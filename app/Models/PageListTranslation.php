<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageListTranslation extends Model
{
    protected $table="page_list_translations";

    protected $fillable = ['title' , 'title_color' , 'description'];

    public $timestamps = false;
}
