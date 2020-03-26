<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialprovider extends Model
{
    protected $table = 'social_providers';
    protected $fillable = ['provider','provider_id'];
    function user()
    {
        return $this->belongsTo(UserMod::class);
    }
}
