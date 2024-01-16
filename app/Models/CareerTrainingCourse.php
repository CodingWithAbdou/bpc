<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerTrainingCourse extends Model
{
    protected $table = 'career_training_courses';
    use HasFactory;
    protected $fillable = ['career_id' , 'name' , 'training_institute' , 'Period'  ];

    public function career()
    {
        return $this->belongsTo(Career::class , 'career_id' );
    }}
