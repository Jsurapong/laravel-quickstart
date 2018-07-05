<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    //

    public function store(Post $post)
    {
        
        $this->validate(request(),['body'=>'required|min:2']);
        
        $post->addComment(request('body'));

        return back();

    }



    public function comment(Comment $comment){


        //$comment = Comment::find($comment->id);
        
        return view('posts.comment',compact('comment'));
    }

    public function updateComment(Comment $comment){

        $this->validate(request(),['body'=>'required|min:2']);

        $id      = $comment->id;
        $newBody = request('body');
        
      
        //$comment = Comment::find($id);
       
        $comment->update(['body'=>$newBody]);
        
        return redirect('/');

    }   


    public function remove(){

        $commentId  = request('comment');
        //dd(request('comment'));

        $comment = Comment::find($commentId);

        $comment->delete();
        
        return back();
    }



}
