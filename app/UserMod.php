<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'role', 'status', 'verified_password', 'created_by', 'updated_by'];

    public function getAvatar()
    {
        if (!$this->profilephoto) {
            return asset('file/default.jpg');
        }
        return asset('file/img' . $this->profilephoto);
    }
}
