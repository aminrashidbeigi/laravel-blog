<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('welcome');
    }

    public function getAbout(){
        $first = 'Amin';
        $last = 'Rashidbeigi';
        $fullname = $first . ' ' . $last;
        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = 'a.rashidbeigi@gmail';
        return view('about')->withData($data);
    }

    public function getContact(){

        return view('contact', compact('first', 'last'));
    }


}