<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = ['masuk', 'pulang', 'longitude', 'latitude', 'siswa_id', 'pegawai_id', 'tapel_id', 'semester_id'];
}
