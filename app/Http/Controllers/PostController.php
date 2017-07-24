<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts =Post::paginate(2);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $slug = str_slug($request->title, '_');
        $post->slug = $slug;
        $post->save();

        Session::flash('success', 'Post successfully created :)');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $slug = str_slug($request->title, '_');
        $post->slug = $slug;
        $post->save();

        Session::flash('success', 'Post successfully edited :)');

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
