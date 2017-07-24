<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SlugController extends Controller {

    public function getPost($slug) {
        $post = Post::where('slug', '=', $slug)->first();
//        return $post->title;
        return view('posts.show')->withPost($post);
    }

}
