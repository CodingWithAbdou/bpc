<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Governance extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable = ['image' , 'file' , 'file_name'];

    public $translatedAttributes = ['title' , 'title_color' ,'description_one' , 'description_two'];
    public static $trans = [ 'title' , 'title_color' ,'description_one' , 'description_two'];
}
