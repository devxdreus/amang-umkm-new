<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Merchant extends Controller
{
    public function index()
    {
        return view('panel.merchants.index');
    }
}
