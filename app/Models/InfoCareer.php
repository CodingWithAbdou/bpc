<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class InfoCareer extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    protected $table = 'info_careers';

    protected $fillable = ['order_by' , 'file' , 'file_name'];

    public $translatedAttributes  = [ 'title' , 'description'];
    public static $trans = [ 'title' , 'description'];
}
