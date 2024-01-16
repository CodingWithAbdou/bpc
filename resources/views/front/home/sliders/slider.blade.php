@extends('front.layouts.app')
@section('title')
{{__('front.title-sliders')}}
@endsection

@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
{{-- here add Title sidebar --}}
<li class="breadcrumb-item active">{{ strip_tags($slider->title) }}</li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="cs-single_post">
                <h1>{{ strip_tags($slider->title) }}</h1>
                <div class="cs-post_avatar">
                  <div class="cs-post_avatar_right">
                    <div class="cs-post_meta">
                      <span class="cs-post_meta_item">{{\Carbon\Carbon::parse($slider->created_at)->translatedFormat('d F Y')}}</span>
                    </div>
                  </div>
                </div>
                <img src='{{ asset("$slider->image") }}' class="rounded-lg" alt="">
                <p class="text-dark">
                    {!! $slider->description !!}
                </p>
                <div class="row justify-content-center my-3">
                    @if($slider->file_one != null)
                    <div class="col-lg-4">
                        <a href="{{ asset($slider->file_one) }}" download="{{ asset($slider->file_one_name) }}" class="cs-btn cs-style1 cs-btn_lg w-100 text-center"><span><i class="fa-solid fa-file-pdf"></i> Download file</span></a>
                    </div>
                    @endif
                    @if($slider->file_two != null)
                    <div class="col-lg-4">
                        <a href="{{ asset($slider->file_two) }}" download="{{ asset($slider->file_one_name) }}" class="cs-btn cs-style1 cs-btn_lg w-100 text-center"><span><i class="fa-solid fa-file-pdf"></i> Download file</span></a>
                    </div>
                    @endif
                </div>

            </div>
            <div class="cs-height_60 cs-height_lg_30"></div>

        </div>
        <div class="col-lg-4">
            <div class="cs-height_0 cs-height_lg_70"></div>
            <div class="cs-blog_sidebar">
                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                    <h2 class="cs-widget_title"><span>{{ __('front.Recent News')}}</span></h2>
                    <ul class="cs-recent_post_widget">
                        {{-- here add four multi article --}}
                        @foreach ($articles as $article)
                        <li>
                          <div class="cs-recent_post">
                            <h3 class="cs-post_title"><a href="{{ route('article.show' , $article) }}">{{$article->title}}</a></h3>
                            <div class="cs-posted_by">{{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')}}</div>
                          </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                    <h2 class="cs-widget_title"><span>{{ __('front.Facebook Posts')}}</span></h2>
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
                  <h2 class="cs-widget_title"><span>{{ __('front.Social Share')}}</span></h2>
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
