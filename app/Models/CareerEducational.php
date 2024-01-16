<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerEducational extends Model
{
    use HasFactory;
    protected $table = 'career_educational';
    protected $fillable = ['career_id' , 'degree_specialization' , 'degree_university' , 'degree_date' , 'degree' ];

    public function career()
    {
        return $this->belongsTo(Career::class , 'career_id' );
    }
}
