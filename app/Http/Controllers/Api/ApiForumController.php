<?php

<<<<<<< HEAD
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
=======
namespace App\Http\Controllers;

>>>>>>> c1748c8 (terbaru)
use App\Models\Comment;
use App\Models\Forum;
use App\Models\Like;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Validator;

class ApiForumController extends Controller
=======
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Validator;
>>>>>>> 4d3a964c76536e0354e706d2c6ee8f1443b22110

class ForumController extends Controller
>>>>>>> c1748c8 (terbaru)
{
    public function index()
    {
        $forums = Forum::with('comments')->get();
        return response()->json(['forums' => $forums], 200);
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $forum = Forum::create([
            'user_id' => auth()->user()->id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

=======
>>>>>>> c1748c8 (terbaru)
        $data = Comment::with(['user'])
            ->orderBy('created_at', 'ASC')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diload',
            'data' => $data
        ], 200);
    }

    public function detailForum($id)
    {
        $data = Forum::with(['users'])
            ->where('id', $id)
            ->first();

        $komen = Comment::with(['user'])
            ->orderBy('created_at', 'ASC')
            ->where('forum_id', $id)
            ->get();

        if ($data) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data berhasil diload',
                    'data' => $komen,
                ],
                200
            );
        } else {
            // tampilkan responsenya
            // menggunakan format json
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data Tidak ditemukan',
                    'data' => $data,
                ],
                404
            );
        }
    }

    public function postForum(Request $request)
    {

        // Validasi input pengguna
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error Validation',
                'data' => $validator->errors()
            ], 400);
        }

        $forum = Forum::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

<<<<<<< HEAD
=======
>>>>>>> 4d3a964c76536e0354e706d2c6ee8f1443b22110
>>>>>>> c1748c8 (terbaru)
        return response()->json(['forum' => $forum], 201);
    }

    public function show($id)
    {
        $forum = Forum::with(['comments.replies', 'comments.likes'])->findOrFail($id);
        return response()->json(['forum' => $forum], 200);
    }

    public function storeComment(Request $request, $forumId)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = Comment::create([
            'forum_id' => $forumId,
            'user_id' => auth()->user()->id,
            'content' => $validatedData['content'],
            'parent_id' => $validatedData['parent_id'] ?? null,
        ]);

        return response()->json(['comment' => $comment], 201);
    }

    public function likeComment($commentId)
    {
        $like = Like::where('comment_id', $commentId)->where('user_id', auth()->user()->id)->first();

        if ($like) {
            $like->delete();
            return response()->json(['message' => 'Like removed successfully'], 200);
        } else {
            Like::create([
                'comment_id' => $commentId,
                'user_id' => auth()->user()->id,
            ]);
            return response()->json(['message' => 'Like added successfully'], 201);
        }
    }
}
<<<<<<< HEAD
=======

>>>>>>> c1748c8 (terbaru)
