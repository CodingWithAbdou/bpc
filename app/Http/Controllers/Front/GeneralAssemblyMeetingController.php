<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use Illuminate\Http\Request;

class GeneralAssemblyMeetingController extends Controller
{
    public function index()
    {
        $governances = Governance::select('*')->get();
        $section = $governances[6];

        return view('front.governance.general-assembly-meeting' , compact('section'));
    }
}
