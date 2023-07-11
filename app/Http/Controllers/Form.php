<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function index()
    {
        return view('form.form_mitra');
    }
    public function confirm()
    {
        return view('productDetails.mitra_confirm');
    }

    public function syarat()
    {
        return view('form.syarat');
    }


}
