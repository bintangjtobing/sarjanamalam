<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    protected $fillable = ['thread', 'subject', 'category_id', 'sub_category_id', 'created_by', 'updated_by', 'logIp'];
}
