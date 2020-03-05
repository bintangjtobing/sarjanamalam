<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailUserDB extends Model
{
    protected $table = 'user_detail';
    protected $primaryKey = 'detail_id';
    protected $fillable = ['userid', 'interested', 'university', 'summary', 'bidang_studi', 'tahun_masuk', 'tahun_keluar'];
}
