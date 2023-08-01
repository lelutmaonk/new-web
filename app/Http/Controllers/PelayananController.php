<?php

namespace App\Http\Controllers;

use App\Models\PelayananModel;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    // FILESYSTEM_DRIVER=public //storage:link

    public function index()
    {
        $data =  PelayananModel::get();

        return view('pelayanan.index', [
            'title' => 'Pelayanan',
            'breadcrumb' => 'Pelayanan',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pelayanan.create', [
            'title' => 'Tambah Pelayanan',
            'breadcrumb' => 'Pelayanan / Tambah Pelayanan'
        ]);
    }

    public function store(Request $request)
    {
        $validations = $request->validate([
            'tanggal_permohonan' => 'required|date',
            'nomor_agenda' => 'required|string',
            'capel_nama' => 'required|string',
            'alamat' => 'required|string',
            'daya_permohonan' => 'required|string',
            'telepon' => 'required',
            'tarif' => 'required|string',
            'file_berkas_permohonan' => 'required|file',
            'keterangan' => 'required|string',
        ]);

        $validations['file_berkas_permohonan'] = $request->file('file_berkas_permohonan')->store('pelayanan/file_berkas_permohonan');

        PelayananModel::create($validations);


        return redirect()->route('pelayanan.index')->with('success', 'Data Berhasil Disimpan');
    }

}
