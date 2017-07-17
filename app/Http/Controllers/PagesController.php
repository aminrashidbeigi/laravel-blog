<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('pages/index');
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

}