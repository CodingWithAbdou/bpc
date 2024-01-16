<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StokePrice;
use Illuminate\Http\Request;

class StockPriceController extends Controller
{
    public function index()
    {
        $data = StokePrice::translatedIn(getLocale())->first();
        return view('front.InvestorRelations.stock' , compact('data'));
    }
}
