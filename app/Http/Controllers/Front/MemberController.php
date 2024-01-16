<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function show(Member $obj)
    {
        return view('front.member' , ['data' =>  $obj]) ;
    }
}
