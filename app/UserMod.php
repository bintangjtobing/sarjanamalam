<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'role', 'status', 'verified_password', 'displaypic', 'created_by', 'updated_by'];

    public function getAvatar()
    {
        if (!$this->displaypic) {
            return asset('storage/img/default.png');
        }
        return asset('storage/img/' . $this->displaypic);
    }
}
