<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model  implements TranslatableContract
{
    use HasFactory , Translatable;
    protected $fillable = ['image', 'file', 'file_name' , 'product_type_id' , 'order_by' , 'title'];

    public $translatedAttributes = ['use'  ,  'name' , 'how_to_use'];
    public static $trans = ['use'  ,  'name' , 'how_to_use'];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class , 'product_category');
    }


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
