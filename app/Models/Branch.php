<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends  Model implements TranslatableContract
{
    use HasFactory , Translatable;
    protected $fillable = ['image'  , 'phone' , 'order_by'];

    public $translatedAttributes = ['title' , 'title_color' ,  'address' ];
    public static $trans =  ['title' , 'title_color', 'address'];
}
