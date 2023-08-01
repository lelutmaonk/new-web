<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelayananModel extends Model
{
    use HasFactory;

    protected $table = 'pelayanan';
    protected $primaryKey = 'pelayanan_id';
    protected $fillable = [
        'tanggal_permohonan',
        'nomor_agenda',
        'capel_nama',
        'alamat',
        'daya_permohonan',
        'telepon',
        'tarif',
        'file_berkas_permohonan',
        'keterangan',
        'tanggal_pembayaran',
        'cluster',
        'tanggal_permintaan_teknik',
        'file_surat_clusterisasi',
        'file_surat_izin_tiang',
        'file_sph',
        'file_berkas_sip',
        'file_berkas_pk',
        'file_berkas_ba',
        'file_berkas_spjbtl',
        'file_berkas_peremajaan'
    ];

}
