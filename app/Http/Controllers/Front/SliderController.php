<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Setting;
use App\Models\Slider;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $token;
    protected $fb;

    public function __construct()
    {
        $app_id =  Setting::where('setting_key' , 'facebook_id')->first()->setting_value;
        $app_secert =  Setting::where('setting_key' , 'facebook_secert')->first()->setting_value;
        $this->token =   Setting::where('setting_key' , 'facebook_token_long')->first()->setting_value;
        $this->fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secert,
            'default_graph_version' => 'v18.0', // Use the latest version
        ]);
    }

    public function show(Request $request)
    {
        $slider = Slider::where('id' , $request->id)->first();
        $articles = Article::latest()->inRandomOrder()->take(4)->get();
        $post = [];
        try{
            $response = $this->fb->get(
                '/me/posts?fields=message,full_picture',
                $this->token,
            );
            $post = $response->getDecodedBody()['data'][0];
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }

        if($slider) {
            return view('front.home.sliders.slider' , compact('slider' , 'articles' , 'post'));
        }else {
            abort('404');
        }
    }
}
