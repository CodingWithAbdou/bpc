<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable =  ['order_by'];
    public $translatedAttributes = ['title'];
    public static $trans =  ['title'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
