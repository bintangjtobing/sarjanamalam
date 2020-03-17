<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'jabatan', 'password', 'role', 'status', 'verified_password', 'displaypic', 'created_by', 'updated_by', 'alamat', 'kota', 'provinsi', 'kodepos', 'tanggallahir', 'username', 'bulanlahir', 'tahunlahir', 'ponsel', 'verified'];

    public function getAvatar()
    {
        if (!$this->displaypic) {
            return asset('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png');
        }
        return asset('https://res.cloudinary.com/sarjanamalam/image/upload/' . $this->displaypic);
    }
}
