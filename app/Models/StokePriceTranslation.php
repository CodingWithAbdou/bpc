<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokePriceTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['subtitle' , 'info', 'description' ];

    public $timestamps = false;
}
