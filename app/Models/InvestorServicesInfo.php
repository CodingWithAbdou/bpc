<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorServicesInfo extends Model
{
    use HasFactory;
    protected $table = 'investor_services_info';


    protected $fillable = ['whatsapp' ,'email' ,'description_ar' ,'description_en'];

}
