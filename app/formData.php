<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formData extends Model
{
    protected $table = 'eForms';
    protected $primaryKey = 'nameID';
    protected $fillable = ['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'keanggotaan', 'sektor', 'nohp', 'instagram', 'logIP', 'status_formulir', 'alamat', 'email'];
}
