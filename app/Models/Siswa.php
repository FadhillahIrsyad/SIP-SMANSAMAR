<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'nisn',
        'kelas',
        'no_hp_ortu',
        'created_by',
        'updated_by',
    ];
}
