<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    protected $fillable = ['image'  , 'member_id' , 'article_type_id' ,'file_one' , 'file_two'  , 'file_one_name' , 'file_two_name', 'order_by'];

    public $translatedAttributes = ['title'  ,  'description'];
    public static $trans =  ['title' , 'description'];

    public function article_type()
    {
        return $this->belongsTo(ArticleType::class);
    }

    public function owner()
    {
        return $this->belongsTo(Member::class , 'member_id');
    }
}
