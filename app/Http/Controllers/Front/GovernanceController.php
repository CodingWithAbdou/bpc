<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class GovernanceController extends Controller
{
    public function index()
    {
        $governances = Page::where('page_key' , 'governance')->get();
        return view('front.governance.index' , compact('governances'));
    }

}
