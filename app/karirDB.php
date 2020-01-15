<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karirDB extends Model
{
    protected $table = 'career';
    protected $primaryKey = 'career_id';
    protected $fillable = ['nama_team', 'description', 'features_pic'];
}
