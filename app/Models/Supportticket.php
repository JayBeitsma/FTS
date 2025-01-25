<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supportticket extends Model
{
    protected $table = 'supporttickets';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];

}
