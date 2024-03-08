<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeIzin extends Model
{
    use HasFactory;

    protected $table = 'tipe_izin';
    protected $fillable = [
        'tipe',
    ];
}