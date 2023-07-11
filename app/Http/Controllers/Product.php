<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){
        return view('productDetails.product_detail');
    }

    public function checkout(){
        return view('productDetails.checkout');
    }

    public function confirm(){
        return view('productDetails.checkout_confirm');
    }

    
}
