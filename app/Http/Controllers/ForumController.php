<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use App\Models\Like;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::with('comments')->get();
        return view('forum.index', compact('forums'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Forum::create([
            'user_id' => auth()->user()->id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('forum.index')->with('success', 'Forum berhasil ditambahkan.');
    }

    public function show($id)
    {
        $forum = Forum::with(['comments.replies', 'comments.likes'])->findOrFail($id);
        return view('forum.show', compact('forum'));
    }

    public function storeComment(Request $request, $forumId)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create([
            'forum_id' => $forumId,
            'user_id' => auth()->user()->id,
            'content' => $validatedData['content'],
            'parent_id' => $validatedData['parent_id'] ?? null,
        ]);

        return redirect()->route('forum-show', $forumId)->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function likeComment($commentId)
    {
        $like = Like::where('comment_id', $commentId)->where('user_id', auth()->user()->id)->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create([
                'comment_id' => $commentId,
                'user_id' => auth()->user()->id,
            ]);
        }

        return back();
    }
}
