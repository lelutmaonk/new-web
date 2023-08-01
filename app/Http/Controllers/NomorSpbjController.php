<?php

namespace App\Http\Controllers;

use App\Models\NomorSpbjModel;
use Illuminate\Http\Request;

class NomorSpbjController extends Controller
{
    public function index()
    {
        $data = NomorSpbjModel::get();

        return view('nomor-spbj.index', [
            'title' => 'Nomor SPBJ',
            'breadcrumb' => 'Nomor SPBJ',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('nomor-spbj.create', [
            'title' => 'Tambah Nomor SPBJ',
            'breadcrumb' => 'Nomor SPBJ / Tambah Nomor SPBJ'
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

        NomorSpbjModel::create($validations);

        return redirect()->route('nomor-spbj.index')->with('success', 'Data Berhasil Disimpan');
    }

}
