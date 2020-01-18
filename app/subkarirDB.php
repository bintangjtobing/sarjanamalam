<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subkarirDB extends Model
{
    protected $table = 'subcareer';
    protected $primaryKey = 'subcareer_id';
    protected $fillable = [
        'nama_subcareer',
        'deskripsi',
        'minimal_kualifikasi',
        'kualifikasi_rekomendasi',
        'tanggung_jawab',
        'lokasi',
        'status',
    ];
}
