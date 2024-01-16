<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class ExecutiveManagementController extends Controller
{
    public function index()
    {
        $members = Member::where('type' , '2')->get();
        return view('front.governance.executive-management' , compact('members'));
    }
}
