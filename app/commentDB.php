<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentDB extends Model
{
    protected $table = 'comment_threads';
    protected $primaryKey = 'comment_id';
    protected $fillable = ['user_id', 'threads_id', 'comments', 'created_by'];
}
