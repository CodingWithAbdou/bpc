<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;

    protected $table = 'news_letter';
    protected $fillable = ['message_ar' , 'message_en' , 'file', 'file_name'];

}
