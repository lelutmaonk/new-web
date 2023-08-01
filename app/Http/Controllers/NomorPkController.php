<?php

namespace App\Http\Controllers;

use App\Models\NomorPkModel;
use Illuminate\Http\Request;

class NomorPkController extends Controller
{
    public function index()
    {
        $data = NomorPkModel::get();

        return view('nomor-pk.index', [
            'title' => 'Nomor PK',
            'breadcrumb' => 'Nomor PK',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('nomor-pk.create', [
            'title' => 'Tambah Nomor PK',
            'breadcrumb' => 'Nomor PK / Tambah Nomor PK'
        ]);
    }

    public function store(Request $request)
    {
        $validations = $request->validate([
            'nomor' => 'required|string',
            'jangka_waktu_awal' => 'required|date',
            'jangka_waktu_akhir' => 'required|date',
            'nilai_kontrak' => 'required|string',
        ]);

        NomorPkModel::create($validations);

        return redirect()->route('nomor-pk.index')->with('success', 'Data Berhasil Disimpan');
    }
}
