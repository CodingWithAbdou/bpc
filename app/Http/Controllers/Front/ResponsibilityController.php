<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageList;
use Illuminate\Http\Request;

class ResponsibilityController extends Controller
{
    public function index()
    {
        $data = Page::where('page_key', 'responsibility')->where('section_key', "social_responsibility")->first();
        $environment = Page::where('page_key', 'responsibility')->where('section_key', "environment")->first();
        $community = Page::where('page_key', 'responsibility')->where('section_key', "community")->first();
        return view('front.social.responsibility' , compact('data' , 'environment' , 'community'));
    }

    public function environment()
    {
        $data = Page::where('page_key', 'responsibility')->where('section_key', "environment")->first();
        $lists = PageList::get();
        return view('front.social.details' ,  compact('data' , 'lists'));
    }

    public function community()
    {
        $data = Page::where('page_key', 'responsibility')->where('section_key', "community")->first();

        return view('front.social.community', compact('data'));
    }
}
