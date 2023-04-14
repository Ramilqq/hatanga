<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentForm(CommentRequest $request)
    {   
        $data = $request->validated();
        $comment = Comment::create($data);

        if ($comment) event(new \App\Events\NewCommentTourEvent($comment));

        return redirect()->back();
    }
}
