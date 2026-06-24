<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Http\Resources\CommentStoreResource;
use App\Http\Resources\CommentUpdateResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentStoreRequest $request)
    {
        $comment = Comment::create($request->validated());
        $token = $comment->createToken('Api/CommentLogin');

        return response()->json([
            "message" => "Comment created",
            "token"=>$token->plainTextToken,
            "data" => new CommentStoreResource($comment)

        ], 201);
    }

    public function show(Comment $comment)
    {
        return response()->json([
            "message" => "اطلاعات نظر دریافت شد",
            "data" => $comment
        ], 200);
    }

    public function update(CommentUpdateRequest $request, Comment $comment)
    {
        $comment->update($request->validated());

        return response()->json([
            "message" => "Comment Info Updated ... !",
            "data" => new CommentUpdateResource($comment)
        ], 200);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response()->json([
            "message" => "Comment Info Deleted ... !",
        ], 200);
    }
}
