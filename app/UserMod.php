<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'role','status','verified_password','created_by','updated_by'];
}
