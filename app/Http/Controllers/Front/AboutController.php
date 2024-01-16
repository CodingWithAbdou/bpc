<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = Page::where('page_key' , 'about')->orderBy('order_by', 'asc')->get();

        $profile = $data->where('section_key' , 'profile')->first();
        $second_profile =  $data->where('section_key' , 'second_profile')->first();
        $vision = $data->where('section_key' , 'vision')->first();
        $history = $data->where('section_key' , 'history')->first();
        return view('front.about' , compact('profile' , 'second_profile' , 'vision' , 'history'));
    }
}
