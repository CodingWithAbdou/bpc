<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    use HasFactory;
    protected $fillable = ['title_ar' , 'title_en'];

    public function options()
    {
        return $this->hasMany(ConstantOption::class);
    }
}
