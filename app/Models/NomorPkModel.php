<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorPkModel extends Model
{
    use HasFactory;

    protected $table = 'nomor_pk';
    protected $primaryKey = 'nomor_pk_id';

    protected $fillable = [
        'nomor',
        'jangka_waktu_awal',
        'jangka_waktu_akhir',
        'nilai_kontrak'
    ];
}
