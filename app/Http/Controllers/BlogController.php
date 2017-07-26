<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller {

    public function slugBlogShow($slug) {
        $post = Post::where('slug', '=', $slug)->first();
//        return $post->title;
        return view('posts.show')->withPost($post);
    }

    public function blogIndex() {
        $posts =Post::paginate(5);
        return view('blog.blogIndex')->withPosts($posts);
    }

}
