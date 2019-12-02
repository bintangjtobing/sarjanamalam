<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryDB extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category', 'count'];
}
