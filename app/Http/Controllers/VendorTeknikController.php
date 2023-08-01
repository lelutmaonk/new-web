<?php

namespace App\Http\Controllers;

use App\Models\VendorTeknikModel;
use Illuminate\Http\Request;

class VendorTeknikController extends Controller
{
    public function index()
    {
        $data =  VendorTeknikModel::get();

        return view('vendor-teknik.index', [
            'title' => 'Vendor Teknik',
            'breadcrumb' => 'Vendor Teknik',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('vendor-teknik.create', [
            'title' => 'Tambah Vendor Teknik',
            'breadcrumb' => 'Vendor Teknik / Tambah Vendor Teknik'
        ]);
    }

    public function store(Request $request)
    {
        $validations = $request->validate([
            'vendor_teknik_nama' => 'required|string',
        ]);

        VendorTeknikModel::create($validations);

        return redirect()->route('vendor-teknik.index')->with('success', 'Data Berhasil Disimpan');
    }

}
