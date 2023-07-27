<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        return view('/home');
    }

    public function about(){
        return view('/about');
    }

    public function review(){
        $reviews = new Contact();
        return view('/review',['reviews'=>$reviews->all()]);
    }

    public function review_check(Request $req): \Illuminate\Http\RedirectResponse
    {
        $valid = $req->validate([
            'email'=> 'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=>'required'
            ]);

        $review = new Contact();
        $review->email = $req->input('email');
        $review->subject=$req->input('subject');
        $review->message = $req->input('message');

            $review->save();

        return redirect()->route('review');

    }
}
