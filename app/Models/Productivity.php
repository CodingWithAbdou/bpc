<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productivity extends Model  implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $table="productivities";

    protected $fillable = ['icone' , 'order_by' , 'value'];

    public $translatedAttributes = ['name'];
    public static $trans = ['name'];
}
