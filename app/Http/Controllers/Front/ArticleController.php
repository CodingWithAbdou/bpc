<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\ArticleType;
use App\Models\NewsLetter;
use App\Models\Setting;
use Facebook\Facebook;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    protected $fb;
    protected $token;

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

    public function index(Request $request)
    {
        $article_types = ArticleType::orderBy('order_by', 'asc')->get();
        $letter = NewsLetter::first();
        if($request->ajax()) {
            $articles=null;
            if($request->value) {
                if($request->value == '*') {
                    $articles = Article::select('*');
                }else {
                    $type = ArticleType::where('id' , $request->value)->first();
                    $articles = $type->articles();
                }
            }
            if($request->search == null){
                $articles = $articles;
            }else {
                $search = $request->search;
                $articleTranslations =  ArticleTranslation::where('title' , 'like' , "%$search%")->get();
                $articleId = $articleTranslations->pluck('article_id')->toArray();
                $articles = $articles->whereIn('id', $articleId);
            }
            if($request->page) {
                if($request->page > 1) {
                    $articles = $articles->paginate(9 ,['*'] , 'page' , $request->page );
                }else {
                    $articles = $articles->paginate('9');
                }
            }

            return view('front.article.article_items' , compact('articles' , 'article_types'));
        }else {
            $articles = Article::select('*')->paginate(9 , 'page' , 1);
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

            return view('front.article.index' , compact('articles' , 'article_types', 'letter' , 'post'));
        }

    }
    public function show(Article $obj)
    {
        $letter = NewsLetter::first();
        $articles = Article::latest()->inRandomOrder()->take(4)->get();

        $articles = Article::select('*')->paginate(9 , 'page' , 1);

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

        return view('front.article.show' , ['data' => $obj , 'articles' => $articles , 'letter' =>  $letter , 'post' => $post] );
    }
}
