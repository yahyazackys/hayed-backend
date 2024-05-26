<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'user_id' => 'required',
            'forum_id' => 'required|exists:forums,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create($validatedData);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}
