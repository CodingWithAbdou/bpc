<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorService extends Model
{
    use HasFactory;
    protected $fillable = ['name' ,'card_id' ,'mobile' ,'email' ,'address' ,'image' ,'bank_name' ,'iban' ];
}
