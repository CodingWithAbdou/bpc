<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model  implements TranslatableContract
{

    use HasFactory , Translatable;

    protected $fillable = ['page_key' , 'section_key' , 'image_one' , 'image_two' , 'info' , 'order_by'];

    public $translatedAttributes = ['title' , 'subtitle' , 'description' , "list"];
    public static $trans = ['title' , 'subtitle' , 'description' , "list"];


    public function lists()
    {
        return $this->hasMany(PageList::class);
    }
}
