<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerComputerSkill extends Model
{
    protected $table = 'career_computer_skills';
    use HasFactory;
    protected $fillable = ['career_id' , 'name' , 'Experience' ];

    public function career()
    {
        return $this->belongsTo(Career::class , 'career_id' );
    }

}
