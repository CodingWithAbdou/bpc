<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        $languages = ['ar', 'en' , 'en'];
        if (in_array($lang, $languages)) {
            Session::put('language', $lang);
        }

        return redirect()->back();
    }
}
