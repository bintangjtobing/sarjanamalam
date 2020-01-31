<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partnershipDB extends Model
{
    protected $table = 'partnership';
    protected $primaryKey = 'partner_id';
    protected $fillable = [
        'partnershipCompany', 'email', 'nohp', 'lampiran'
    ];
}
