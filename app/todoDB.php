<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todoDB extends Model
{
    protected $table = 'todo';
    protected $primaryKey = 'todo_id';
    protected $fillable = [
        'userid', 'task', 'status'
    ];
}
