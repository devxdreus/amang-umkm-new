<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Package as ModelsPackage;
use Illuminate\Http\Request;

class Package extends Controller
{
    public function index(Request $request)
    {
        return view('panel.package.index', ['packages' => Merchant::where('user_id', auth()->id())?->first()?->package()?->orderBy('updated_at', 'asc')->get()]);
    }

    public function create()
    {
        return view('panel.package.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'benefit' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $data['merchant_id'] = Merchant::where('user_id', auth()->id())->first()->id;

        ModelsPackage::insert($data);

        return response()->redirectToRoute('panel.packages.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Request $request, ModelsPackage $package)
    {
        return view('panel.package.edit', ['package' => $package]);
    }

    public function update(Request $request, ModelsPackage $package)
    {
        $data = $request->validate([
            'name' => 'required',
            'benefit' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $package->update($data);

        return response()->redirectToRoute('panel.packages.index')->with('success', 'Data berhasil di update!');
    }

    public function destroy(ModelsPackage $package)
    {
        $package->delete();

        return response()->redirectToRoute('panel.packages.index')->with('success', 'Data berhasil dihapus!');
    }
}
