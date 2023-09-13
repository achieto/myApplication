<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.post', compact('posts'));
    }

    public function create()
    {
        return view('post.post-create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'date' => Carbon::now(),
            'username' => Auth()->user()->username
        ]);

        return redirect('/post/' . $post->idpost);
    }

    public function show($idpost)
    {
        $post = Post::where('idpost', $idpost)->firstOrFail();
        return view('post.post-show', compact('post'));
    }

    public function edit($idpost)
    {
        $post = Post::where('idpost', $idpost)->firstOrFail();
        return view('post.post-edit', compact('post'));
    }

    public function update(Request $request, $idpost)
    {
        $post = Post::where('idpost', $idpost)->first();
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'date' => Carbon::now(),
            'username' => Auth()->user()->username
        ]);

        return redirect('/post/' . $idpost);
    }

    public function delete($idpost)
    {
        Post::where('idpost', $idpost)->delete();
        return redirect('/post');
    }
}
