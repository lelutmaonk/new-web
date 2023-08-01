<?php

namespace App\Http\Controllers;

use App\Models\VendorTibetkModel;
use Illuminate\Http\Request;

class VendorTibetController extends Controller
{
    public function index()
    {
        $data =  VendorTibetkModel::get();

        return view('vendor-tibet.index', [
            'title' => 'Vendor Tibet',
            'breadcrumb' => 'Vendor Tibet',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('vendor-tibet.create', [
            'title' => 'Tambah Vendor Tibet',
            'breadcrumb' => 'Vendor Tibet / Tambah Vendor Tibet'
        ]);
    }

    public function store(Request $request)
    {
        $validations = $request->validate([
            'vendor_tibet_nama' => 'required|string',
        ]);

        VendorTibetkModel::create($validations);

        return redirect()->route('vendor-tibet.index')->with('success', 'Data Berhasil Disimpan');
    }

}
