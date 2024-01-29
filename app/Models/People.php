<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $fillable = [
        "fullname" ,
        "age" ,
        "number_passport" ,
        "nationality" ,
        "reservation_id" ,
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class , 'reservation_id' );
    }
}
