<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home(){
        return view ('home', ['title' => 'Home']);
    }
    public function profile(){
        return view ('profile', ['title' => 'Profile']);
    }
    public function contact(){
        return view ('contact', ['title' => 'Contact']);
}

}