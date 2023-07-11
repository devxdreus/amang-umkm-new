<?php

namespace App\Http\Controllers;

use App\Models\Merchant as ModelsMerchant;
use Illuminate\Http\Request;

class Merchant extends Controller
{
    public function index(Request $request)
    {
        return view('panel.merchants.index', ['merchant' => ModelsMerchant::find(auth()->id())]);
    }
}
