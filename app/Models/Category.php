<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model  implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $fillable = ['order_by' , 'product_type_id'];

    public $translatedAttributes = [ 'name' , 'description'];
    public static $trans = [ 'name' , 'description'];

    public function type()
    {
        return $this->belongsTo(ProductType::class , 'product_type_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class , 'product_category');
    }

}
