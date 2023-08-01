<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorTibetkModel extends Model
{
    use HasFactory;

    protected $table = 'vendor_tibet';
    protected $primaryKey = 'vendor_tibet_id';

    protected $fillable = [
        'vendor_tibet_nama'
    ];
}
