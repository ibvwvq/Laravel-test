<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
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

    public function review_check(ReviewRequest $req)
    {
        $review = new Contact();
        $review->email = $req->input('email');
        $review->subject=$req->input('subject');
        $review->message = $req->input('message');

        if($req->validate()){
            $review->save();
            return redirect()->route('review');
        }
    }
}
