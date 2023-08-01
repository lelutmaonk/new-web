<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorTeknikModel extends Model
{
    use HasFactory;

    protected $table = 'vendor_teknik';
    protected $primaryKey = 'vendor_teknik_id';

    protected $fillable = [
        'vendor_teknik_nama'
    ];
}
