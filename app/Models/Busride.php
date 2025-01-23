<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Busride extends Model
{
    use HasFactory;

    protected $table = 'busrides';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'ftimg',
        'festival_name',
        'description',
        'price',
        'starting_point',
        'end_point',
        'departure_time',
        'arrival_time',
        'tickets_available',
    ];
}
