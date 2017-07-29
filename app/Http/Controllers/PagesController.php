<?php

namespace App\Http\Controllers;
use App\Post;
use Session;
use Illuminate\Http\Request;
use Mail;

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


    public function postContact(Request $request){

        $this->validate($request, array(
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ));

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
        );

        Mail::send('email.contact', $data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('a.rashidbeigi@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Email successfully sent.');

        return redirect()->url('/');
    }



}