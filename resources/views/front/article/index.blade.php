@extends('front.layouts.app')
@section('title')
{{__('front.title-newsrom')}}
@endsection
@section('titlePage')
{{__('front.Newsroom')}}
@endsection

@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item active">{{__('front.Newsroom')}}</li>
@endsection

@section('content')

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="cs-isotop_filter cs-style1 cs-center">
                <ul class="cs-mp0 cs-center">
                  <li class="active"><a  class="filter-btn" data-news="*"><span>{{__('front.All')}}
                </span></a></li>
                @foreach($article_types as $type)
                  <li><a  class="filter-btn" data-news="{{$type->id}}"><span>{{$type->title}}</span></a></li>
                @endforeach
                </ul>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
                <div class="articles row">
                    @include('front.article.article_items')
                </div>

            <div class="cs-height_40 cs-height_lg_40"></div>

            <div class="text-center">
                <button  id="load-more-article" data-bla class="cs-btn cs-style1 cs-btn_lg"><span>{{__('front.Load More')}}</span></button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cs-height_0 cs-height_lg_70"></div>
            <div class="cs-blog_sidebar">
                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                  <div  class="cs-search">
                    <input type="text" id="input-search-artcile" class="cs-search_input" placeholder="{{__('front.Search')}}"style="padding-inline: 10px;">
                    <button class="cs-btn cs-style1" id="btn-search-artcile">
                      <span>{{__('front.Search')}}</span>
                    </button>
                </div>
                </div>
                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                    <h2 class="cs-widget_title"><span>{{__('front.Facebook Posts')}}</span></h2>
                    <div>
                        @if (isset($post['message']))
                            <p>{{ $post['message'] }}</p>
                        @endif
                        @if (isset($post['full_picture']))
                            @if (is_array($post['full_picture']))
                                @foreach ($post['full_picture'] as $image)
                                    <img src="{{ $image }}" alt="Post Image">
                                @endforeach
                            @else
                                <img src="{{ $post['full_picture'] }}" alt="Post Image">
                            @endif
                        @endif
                      </div>
                </div>

                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                    <h2 class="cs-widget_title"><span>{{__('front.Newsletter')}}</span></h2>
                    <div class="cs-tag_widget text-center">
                      <p class="m-0 p-0 text-dark">{{__('front.For more information, please look at')}}<br>
                        <a  class="cs-btn cs-style1" ><span style="display: block">{{__($letter->{'message_' . getLocale()})}}</span></a>
                        <a href="{{asset($letter->file)}}" download="{{asset($letter->file_name)}}" class="cs-btn cs-style1 mt-3"><span><i class="fa-solid fa-file-pdf"></i> {{__('front.Download PDF File')}}</span></a>
                      </p>
                    </div>
                </div>

                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                  <h2 class="cs-widget_title"><span>{{__('front.Social Share')}}</span></h2>
                  <div class="cs-social_widget">
                    @if(App\Models\Setting::where('setting_key' , "facebook")->first()->setting_value != '')
                    <a href="{{ App\Models\Setting::where('setting_key' , "facebook")->first()->setting_value }}" target='_blank' ><i class="fab fa-facebook-f"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value != '')
                    <a href="{{ App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value }}" target='_blank' ><i class="fab fa-twitter"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "linkedin")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "linkedin")->first()->setting_value }}" target='_blank' ><i class="fab fa-linkedin-in"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value }}" target='_blank' ><i class="fab fa-instagram"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "youtube")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "youtube")->first()->setting_value }}" target='_blank' ><i class="fab fa-youtube"></i></a>
                @endif                  </div>
                </div>
              </div>
        </div>
    </div>

  </div>

@endsection
