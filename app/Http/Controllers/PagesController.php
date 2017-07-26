<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

    public function getIndex(){
        $posts = Post::paginate(2);
        return view('pages/index')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Amin';
        $last = 'Rashidbeigi';
        $fullname = $first . ' ' . $last;
        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = 'a.rashidbeigi@gmail';
        return view('pages/about')->withData($data);
    }

    public function getContact(){
        return view('pages/contact', compact('first', 'last'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


}