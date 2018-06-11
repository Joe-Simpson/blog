<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

    	return redirect('/');
    }
}
