<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateDB extends Model
{
    protected  $table = 'candidate';
    protected $primaryKey = 'candidate_id';
    protected $fillable = [
        'posisi', 'sumber_informasi', 'nama_lengkap', 'noktp', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat_domisili', 'email', 'nohp', 'status_perkawinan', 'pendidikan_akhir', 'about', 'kota', 'status_interview'
    ];
}
