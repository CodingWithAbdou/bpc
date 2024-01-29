<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        $this->validate($request, [
            'location' => 'required',
            'hotel' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'number_people' => 'required',
            'room' => 'required',
            'fullname' => 'required',
            'age' => 'required',
            'number_passport' => 'required',
            'nationality' => 'required',
            'delivery' => 'required',
            'flight_no' => 'required',
            'arrival_time' => 'required',
        ]);
    }
}
