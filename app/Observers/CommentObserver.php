<?php

namespace App\Observers;

use App\Models\Comment;  // ✅ Comment با C بزرگ

class CommentObserver
{
    public function creating(Comment $comment)  // ✅ Comment با C بزرگ
    {
        $comment->comment_code = mt_rand('100000', '100000000');  // ✅ عدد بدون کوتیشن

    }

    public function created(Comment $comment): void
    {
        //
    }

    public function updated(Comment $comment): void
    {
        //
    }

    public function deleted(Comment $comment): void
    {
        //
    }

    public function restored(Comment $comment): void
    {
        //
    }

    public function forceDeleted(Comment $comment): void
    {
        //
    }
}
