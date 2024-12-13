<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function createPost()
    {
        return view('create-post');
    }

    public function postStore(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        Mail::raw("A new post titled ' {$post->title} ' has been published", function ($message) {
            $message->to('farjanur15-2956@diu.edu.bd')
                ->subject('New Post Published');
        });

        return redirect()->back();
    }
}
