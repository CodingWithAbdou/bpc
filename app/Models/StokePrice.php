<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokePrice extends Model  implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable = ['price' , 'percent' , 'link' , 'image'];

    public $translatedAttributes = ['subtitle' , 'info', 'description' ];
    public static $trans = ['subtitle' , 'info', 'description' ];
}
