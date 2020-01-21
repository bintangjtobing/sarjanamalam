<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogDB extends Model
{
    protected $table  = 'blog';
    protected $primaryKey = 'blog_id';
    protected $fillable = [
        'coverimg', 'blog_title', 'kategori_blog', 'isiblog', 'alternatif', 'created_by', 'updated_by'
    ];
}
