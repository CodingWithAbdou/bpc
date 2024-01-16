<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $table = 'members';
    protected $fillable = ['image' , 'order_by' , 'type'];

    public $translatedAttributes = ['name'  ,  'job_title' , 'description'];
    public static $trans =  ['name'  ,  'job_title' , 'description'];


    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
