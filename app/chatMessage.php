<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatMessage extends Model
{
    protected $table = 'direct';
    protected $primaryKey = 'directid';
    protected $fillable = ['from', 'to', 'message', 'is_read'];
}
