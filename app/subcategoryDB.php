<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoryDB extends Model
{
    protected $table = 'sub_category';
    protected $primaryKey = 'sub_category_id';
    protected $fillable = ['sub_category'];
}
