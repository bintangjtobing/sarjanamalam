<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventDB extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'event_id';
    protected $fillable = [
        'nama_event', 'nama_pic',
        'email_pic', 'nohp_pic', 'tglevent', 'deskripsi_event', 'harga_event', 'speaker', 'kategori_event', 'tempat_event', 'tgl_berakhirevent', 'waktu_event', 'link_daftar', 'logIP', 'created_by', 'updated_by'
    ];
}
