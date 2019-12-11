<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'jabatan', 'password', 'role', 'status', 'verified_password', 'displaypic', 'created_by', 'updated_by', 'alamat', 'kota', 'provinsi', 'kodepos', 'tanggallahir'];

    public function getAvatar()
    {
        if (!$this->displaypic) {
            return asset('storage/img/default.png');
        }
        return asset('storage/img/' . $this->displaypic);
    }
}
