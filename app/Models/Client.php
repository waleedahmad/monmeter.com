<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'admin', 'access', 'name', 'company', 'added', 'card_tag'
    ];

    protected $table = 'clients';
}