<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($key)
    {
        $data = Page::translatedIn(getLocale())->where('page_key', 'other')->where('section_key', $key)->first();
        return view('front.pages' , compact('data'));
    }
}
