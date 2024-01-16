<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use App\Models\Member;
use Illuminate\Http\Request;

class boardOfDirectorsController extends Controller
{
    public function index()
    {
        $members = Member::where('type' , '1')->get();
        $governances = Governance::select('*')->get();
        $section_one = $governances[0];
        $section_two = $governances[1];
        return view('front.governance.board-of-directors' , compact('members' , 'section_one' , 'section_two'));
    }
}
