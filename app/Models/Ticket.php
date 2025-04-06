<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';

    protected $fillable = [
        'user_id',
        'busride_id',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function busride()
    {
        return $this->belongsTo(Busride::class);
    }
    public function getPriceAttribute($value)
    {
        return $this->busride->price;
    }


}
