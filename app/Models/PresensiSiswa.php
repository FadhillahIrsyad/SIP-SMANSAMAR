<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiSiswa extends Model
{
    use HasFactory;
    protected $table = 'presensi_siswa';
    protected $fillable = [
        'id_creator',
        'id_updater',
        'id_siswa',
        'id_status_kehadiran',
        'keterangan',
        'pelanggaran',
    ];
}
