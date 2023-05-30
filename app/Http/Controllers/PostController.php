<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(){
        $posts = Post::paginate(1);

        return view('welcome', compact('posts'));
    }
}

