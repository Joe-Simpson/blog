<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	// dd(request()->all());
    	// create a new post
    	$post = new Post;

    	$post->title = request('title');
    	$post->body = request('body');

    	// save to the database

    	$post->save();

    	// return to homepage

    	return redirect('/');
    }
}
