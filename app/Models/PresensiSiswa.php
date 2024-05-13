<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiSiswa extends Model
{
    use HasFactory;
    protected $table = 'presensi_siswa';
    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'status_kehadiran',
        'status_pelanggaran',
        'penanggung_jawab',
        'keterangan'
    ];
}
