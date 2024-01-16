<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use Illuminate\Http\Request;

class CodeOfConductController extends Controller
{
    public function index()
    {
        $data = Governance::where('id' , '6' )->first();
        return view('front.governance.code-of-conduct' , compact('data'));
    }
}
