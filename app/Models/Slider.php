<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable = ['image' , 'order_by' , 'file_one' , 'file_two', 'file_one_name' , 'file_two_name'];

    public $translatedAttributes = ['title' , 'description'];
    public static $trans = ['title' , 'description'];
}
