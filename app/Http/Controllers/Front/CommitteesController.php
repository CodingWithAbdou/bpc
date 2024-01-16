<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    public function index()
    {
        $governances = Governance::select('*')->get();
        $section_one = $governances[2];
        $section_two = $governances[3];
        $section_three = $governances[4];

        return view('front.governance.committees' , compact('section_one' , 'section_two' , 'section_three'));
    }
}
