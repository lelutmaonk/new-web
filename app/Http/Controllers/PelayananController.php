<?php

namespace App\Http\Controllers;

use App\Models\PelayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(PelayananModel $pelayanan)
    {

        return view('pelayanan.edit', [
            'title' => 'Ubah Pelayanan',
            'breadcrumb' => 'Pelayanan / Ubah Pelayanan',
            'data' => $pelayanan
        ]);
    }

    public function update(Request $request, PelayananModel $pelayanan)
    {
        $rules = [
            'tanggal_permohonan' => 'required|date',
            'nomor_agenda' => 'required|string',
            'capel_nama' => 'required|string',
            'alamat' => 'required|string',
            'daya_permohonan' => 'required|string',
            'telepon' => 'required',
            'tarif' => 'required|string',
            'file_berkas_permohonan' => 'nullable|file',
            'keterangan' => 'required|string',

            'tanggal_pembayaran' => 'date',
            'tanggal_peremajaan' => 'date',
            'cluster' => 'string',
            'tanggal_permintaan_teknik' => 'date',
            'file_surat_clusterisasi' => 'nullable|file',
            'file_surat_izin_tiang' => 'nullable|file',
            'file_sph' => 'nullable|file',
            'file_berkas_sip' => 'nullable|file',
            'file_berkas_pk' => 'nullable|file',
            'file_berkas_ba' => 'nullable|file',
            'file_berkas_spjbtl' => 'nullable|file',
            'file_berkas_peremajaan' => 'nullable|file',
            
        ];

        $validations = $request->validate($rules);
        
        if($request->file('file_berkas_permohonan'))
        {
            if($request->old_file_berkas_permohonan)
            {
                Storage::delete($request->old_file_berkas_permohonan);
            }
            $validations['file_berkas_permohonan'] = $request->file('file_berkas_permohonan')->store('pelayanan/file_berkas_permohonan');
        }

        if($request->file('file_surat_clusterisasi'))
        {
            if($request->old_file_surat_clusterisasi)
            {
                Storage::delete($request->old_file_surat_clusterisasi);
            }
            $validations['file_surat_clusterisasi'] = $request->file('file_surat_clusterisasi')->store('pelayanan/file_surat_clusterisasi');
        }

        if($request->file('file_surat_izin_tiang'))
        {
            if($request->old_file_surat_izin_tiang)
            {
                Storage::delete($request->old_file_surat_izin_tiang);
            }
            $validations['file_surat_izin_tiang'] = $request->file('file_surat_izin_tiang')->store('pelayanan/file_surat_izin_tiang');
        }

        if($request->file('file_sph'))
        {
            if($request->old_file_sph)
            {
                Storage::delete($request->old_file_sph);
            }
            $validations['file_sph'] = $request->file('file_sph')->store('pelayanan/file_sph');
        }

        if($request->file('file_berkas_sip'))
        {
            if($request->old_file_berkas_sip)
            {
                Storage::delete($request->old_file_berkas_sip);
            }
            $validations['file_berkas_sip'] = $request->file('file_berkas_sip')->store('pelayanan/file_berkas_sip');
        }

        if($request->file('file_berkas_pk'))
        {
            if($request->old_file_berkas_pk)
            {
                Storage::delete($request->old_file_berkas_pk);
            }
            $validations['file_berkas_pk'] = $request->file('file_berkas_pk')->store('pelayanan/file_berkas_pk');
        }

        if($request->file('file_berkas_ba'))
        {
            if($request->old_file_berkas_ba)
            {
                Storage::delete($request->old_file_berkas_ba);
            }
            $validations['file_berkas_ba'] = $request->file('file_berkas_ba')->store('pelayanan/file_berkas_ba');
        }

        if($request->file('file_berkas_spjbtl'))
        {
            if($request->old_file_berkas_spjbtl)
            {
                Storage::delete($request->old_file_berkas_spjbtl);
            }
            $validations['file_berkas_spjbtl'] = $request->file('file_berkas_spjbtl')->store('pelayanan/file_berkas_spjbtl');
        }

        if($request->file('file_berkas_peremajaan'))
        {
            if($request->old_file_berkas_peremajaan)
            {
                Storage::delete($request->old_file_berkas_peremajaan);
            }
            $validations['file_berkas_peremajaan'] = $request->file('file_berkas_peremajaan')->store('pelayanan/file_berkas_peremajaan');
        }

        PelayananModel::where('pelayanan_id', $pelayanan->pelayanan_id)->update($validations);

        return redirect()->route('pelayanan.index')->with('success', 'Data Berhasil Disimpan');

    }

    public function destroy(PelayananModel $pelayanan)
    {
        if($pelayanan->file_berkas_permohonan)
            Storage::delete($pelayanan->file_berkas_permohonan);

        if($pelayanan->file_surat_clusterisasi)
            Storage::delete($pelayanan->file_surat_clusterisasi);

        if($pelayanan->file_surat_izin_tiang)
            Storage::delete($pelayanan->file_surat_izin_tiang);

        if($pelayanan->file_sph)
            Storage::delete($pelayanan->file_sph);

        if($pelayanan->file_berkas_sip)
            Storage::delete($pelayanan->file_berkas_sip);

        if($pelayanan->file_berkas_pk)
            Storage::delete($pelayanan->file_berkas_pk);

        if($pelayanan->file_berkas_ba)
            Storage::delete($pelayanan->file_berkas_ba);
            
        if($pelayanan->file_berkas_spjbtl)
            Storage::delete($pelayanan->file_berkas_spjbtl);

        if($pelayanan->file_berkas_peremajaan)
            Storage::delete($pelayanan->file_berkas_peremajaan);

        PelayananModel::destroy($pelayanan->pelayanan_id);
        return redirect()->route('pelayanan.index')->with('success', 'Data Berhasil Dihapus');

    }


}
