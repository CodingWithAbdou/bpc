<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable = ['image' , 'full_name' , 'position' , 'address' , 'mobile' , 'email' , 'date_of_birth' , 'place_of_birth'
     , 'gender' , 'passport_no' , 'marital_status' , 'has_suffer' , 'desc_suffer' , 'has_allergy' , 'smoke' , 'is_agree'];


    public function computerSkill()
    {
        return $this->hasMany(CareerComputerSkill::class);
    }

    public function universities()
    {
        return $this->hasMany(CareerEducational::class);
    }

    public function languages()
    {
        return $this->hasMany(CareerLanguage::class);
    }

    public function trainings()
    {
        return $this->hasMany(CareerTrainingCourse::class);
    }

    public function experiences()
    {
        return $this->hasMany(CareerWorkExperience::class);
    }
}
