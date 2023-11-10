<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Resources\Comments\CommentResource;
use App\Http\Resources\Comments\ReplyResource;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

//        $comments = Comment::with('replies')->orderBy('id', 'desc')->paginate(5);
//        return $comments;

//        $comments = Comment::with(['replies' => function ($query) {
//            $query->orderBy('id', 'desc')->paginate(3);
//        }])->orderBy('id', 'desc')->paginate(2);
//
//        return $comments;ap

//        return Comment::orderBy('id', 'desc')->paginate(10);

        return CommentResource::collection(Comment::orderBy('id', 'desc')->paginate(10));
    }

    public function getReplies($id){
        $comment = Comment::findOrFail($id);
        $replies = ReplyResource::collection($comment->replies()->orderBy('id', 'desc')->paginate(10));
        return $replies;
    }

    public function createComment(StoreRequest $request){
//        dd(\request()->all());
        $data = $request->validated();
        $comment = Comment::create($data);
        return CommentResource::make($comment);
    }
}
