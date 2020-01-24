<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesertaDB extends Model
{
    protected $table = 'peserta_event';
    protected $primaryKey = 'peserta_id';
    protected $fillable  = [
        'nama_lengkap', 'email', 'nohp', 'informasi', 'reserved', 'created_by', 'updated_by'
    ];
}
