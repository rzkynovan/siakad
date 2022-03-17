<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'is_alumni', 'gender', 'nis', 'nisn', 'nists', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'asal_kota', 'alamat_asal', 'alamat_kost'
    ];
}
