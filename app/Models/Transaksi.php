<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nama_User',
        'Nama_Instruktur',
        'Nama_Kelas',
        'Total_Biaya',
        'Metoide_Pembayaran',
        'Status',
    ];
}
