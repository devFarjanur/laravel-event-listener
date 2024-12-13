<?php

namespace App\Http\Controllers;

use App\Events\PostPublished;
use App\Models\Post;
use App\Models\User;
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

        PostPublished::dispatch($post);

        return redirect()->back();
    }
}
