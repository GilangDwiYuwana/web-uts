<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_peserta',
        'email',
        'nama_kursus',
        'kategori_kursus',
        'tanggal_mulai',
        'tanggal_selesai',
        'status_pendaftaran',
    ];
}
