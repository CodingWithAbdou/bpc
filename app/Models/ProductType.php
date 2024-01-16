<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $table="product_types";

    protected $fillable = ['icone' , 'order_by'];

    public $translatedAttributes = ['name' , 'description'];
    public static $trans = ['name' , 'description'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
