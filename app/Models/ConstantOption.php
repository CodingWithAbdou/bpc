<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstantOption extends Model
{
    use HasFactory;
    protected $fillable = ['name_ar' , 'name_en' , 'order_by' , 'constant_id'];

    public function constant()
    {
        return $this->belongsTo(Constant::class , 'constant_id');
    }
}
