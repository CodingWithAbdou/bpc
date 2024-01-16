<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileReport extends Model
{
    use HasFactory;
    protected $fillable = ['file' , 'file_name' , 'type' , 'quarter' , 'year' , 'order_by'];
}

