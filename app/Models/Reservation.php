<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "location" ,
        "hotel" ,
        "checkin" ,
        "checkout" ,
        "phone" ,
        "email" ,
        "number_people" ,
        "room" ,
        "delivery" ,
        "flight_no" ,
        "arrival_time" ,
        "auth" ,
    ];

    public function peoples()
    {
        return $this->hasMany(People::class);
    }

}
