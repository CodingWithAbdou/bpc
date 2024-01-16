<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerLanguage extends Model
{
    protected $table = 'career_languages';
    use HasFactory;
    protected $fillable = ['career_id' , 'language' , 'reading' , 'writing' , 'speaking' ];

    public function career()
    {
        return $this->belongsTo(Career::class , 'career_id' );
    }
}
