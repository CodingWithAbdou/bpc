<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductivityTranslation extends Model
{
    protected $table="productivity_translations";

    protected $fillable = ['name'];

    public $timestamps = false;
}
