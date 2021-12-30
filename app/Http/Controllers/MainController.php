<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
      return view('home');
    }

    public function about() {
      return view('about');
    }

    public function email() {
      return view('email');
    }

    public function review() {
      $reviews = new ContactModel();
      //dd($reviews->all());
      return view('review', ['data' => $reviews->all()]);
    }

    public function review_check(Request $request) {
      
      $valid = $request->validate([
        'email' => 'required|min:4|max:100',
        'heading' => 'required|max:100',
        'message' => 'required|min:15|max:500'
      ]);

      $review =  new ContactModel();
      $review->email = $request->input('email');
      $review->heading = $request->input('heading');
      $review->message = $request->input('message');

      $review->save();

      return redirect()->route('review');
    }
}
