<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('home.contact');
    }

    public function about(){
        return view('home.about');
    }

    public function profile(){
        return view('home.profile');
   
    }
    public function edit(){
        return view('home.edit_profile');
    }

    public function editBisnis(){
        return view('home.edit_bisnis');
    
    }
    public function listMerchant(){
        return view('home.list_merchant');
    }

    
}
