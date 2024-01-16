<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernanceTranslation extends Model
{
    use HasFactory;

    protected $fillable = [ 'title' , 'title_color' ,'description_one' , 'description_two'];

    public $timestamps = false;
}
