<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function admin() {
        return view('admin');
    }



    public function comment() {
        $comments = new comment();
        return view('comment', ['comments' => $comments->all()]);
    }

    public function comment_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);

        $review = new comment();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('comment');

    }

}
