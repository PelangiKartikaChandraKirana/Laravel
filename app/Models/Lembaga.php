<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;
    protected $table = 'lembagas';
    protected $primaryKey = 'lembaga_id';
    protected $fillable = [
        'nama_lembaga',
        'gambar',
        'deskripsi',
        'range_harga',
        'durasi_kursus',
        'lokasi',
        'maps',
        'kontak',
    ];


}