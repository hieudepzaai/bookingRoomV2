<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate();

        return view('post.index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * $posts->perPage());
    }


    public function create()
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }


    public function store(Request $request)
    {
//        request()->validate(Post::$rules);
//
//        $post = Post::create($request->all());
//
//        return redirect()->route('posts.index')
//            ->with('success', 'Post created successfully.');
    }


    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        request()->validate(Post::$rules);

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

   function destroy($id)
    {
        $post = Post::find($id)->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
