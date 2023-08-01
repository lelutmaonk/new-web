<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorSpbjModel extends Model
{
    use HasFactory;

    protected $table = 'nomor_spbj';
    protected $primaryKey = 'nomor_spbj_id';

    protected $fillable = [
        'nomor',
        'jangka_waktu_awal',
        'jangka_waktu_akhir',
        'nilai_kontrak'
    ];
}
