<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Productivity;
use App\Models\ProductType;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // $sliders = Slider::translatedIn(getLocale())->orderByTranslation('order_by', 'asc')->get();
        $sliders = Slider::orderBy('order_by', 'asc')->get();
        $experience = Page::where('section_key' , 'experience')->get()->first();
        $product_info = Page::translatedIn(getLocale())->where('section_key' , 'products')->get()->first();
        $porductivity_info = Page::translatedIn(getLocale())->where('section_key' , 'productivity')->get()->first();
        $production_types = ProductType::orderBy('order_by', 'asc')->get();
        $productivities = Productivity::orderBy('order_by', 'asc')->get();
        $latest_news = Article::latest()->take(4)->get();


        return view('front.home.index' , compact('sliders', 'experience' , 'product_info' , 'porductivity_info' , 'production_types' , 'productivities' , 'latest_news'));
    }
}
