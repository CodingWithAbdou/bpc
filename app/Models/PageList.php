<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageList extends Model  implements TranslatableContract
{
    protected $table="page_lists";
    use HasFactory  , Translatable;

    protected $fillable = ['order_by'];

    public $translatedAttributes = ['title' , 'title_color' , 'description'];
    public static $trans = ['title' , 'title_color' , 'description'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
