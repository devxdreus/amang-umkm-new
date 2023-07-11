<?php

namespace App\Http\Controllers;

use App\Models\Merchant as ModelsMerchant;
use App\Models\User;
use Illuminate\Http\Request;

class Merchant extends Controller
{
    public function index(Request $request)
    {
        return view('panel.merchants.index', ['merchant' => ModelsMerchant::find(auth()->id())]);
    }

    public function store(Request $request)
    {
        $data = $request->all(['name', 'birth', 'instagram', 'outlet', 'pic', 'area', 'contact', 'email',  'gross_income', 'net_income', 'category_id']);
        $data['contract'] = 'adf';
        $data['description'] = 'er2';
        $data['user_id'] = auth()->id();
        $data['birth'] = '2023-09-26';

        $merchant = ModelsMerchant::create($data);

        User::where('id', $merchant->id)->update(['role_id' => 2]);

        return response()->redirectToRoute('mitra-confirm');
    }
}
