<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messagesDB extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'messages_id';
    protected $fillable = [
        'judul_messages',
        'nama_lengkap',
        'email',
        'subject',
        'messages',
        'status'
    ];
}
