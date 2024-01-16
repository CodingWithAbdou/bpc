<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerWorkExperience extends Model
{
    protected $table = 'career_work_experience';
    use HasFactory;
    protected $fillable = ['career_id' , 'company_name' , 'company_address' , 'company_tel' , 'salary_start'  , 'salary_end'  , 'period_from'  , 'period_to'  , 'reason_for_leaving'  ];

    public function career()
    {
        return $this->belongsTo(Career::class , 'career_id' );
    }
}
