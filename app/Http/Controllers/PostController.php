<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        //$posts = Post::orderBy('title', 'asc')->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create',compact('categories'));
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title'=>request('title'),
            'category_id'=>request('category_id'),
            'content'=>request('content'),
            'slug'=>str_slug(request('title'))
        ]);

        return redirect()->route('post.index')->withSuccess('Success adding a post !');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('post.edit', compact('post','categories'));
    }

    public function update(Post $post)
    {
        $post->update([
            'title'=> request('title'),
            'category_id'=>request('category_id'),
            'content'=> request('content')
        ]);

        return redirect()->route('post.index')->withInfo('Post updated !');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->withDanger('Post deleted !');
    }

    public function details(Post $post)
    {
        return view('post.details', compact('post'));
    }
}
