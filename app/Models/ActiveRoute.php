<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'busride_id',
        'starting_point',
        'end_point',
        'number_of_passangers',
        'number_of_seats',
        'departure_date',
        'departure_time',
        'arrival_date',
        'arrival_time',
    ];

    public function busride()
    {
        return $this->belongsTo(Busride::class);
    }
}
