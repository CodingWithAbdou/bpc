@extends('front.layouts.app')
@section('title')
{{__('front.title-show-newsrom')}}
@endsection
@section('titlePage')
{{__('front.Newsroom')}}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('article.index') }}">{{__('front.Newsroom')}}</a></li>
{{-- here Add title article --}}
<li class="breadcrumb-item active">{{ $data->title }}</li>
@endsection

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="cs-single_post">
                <h1>{{ $data->title }}</h1>
                <div class="cs-post_avatar">
                  <a href="{{route('members.show' , $data->owner)}}" class="cs-post_avatar_img"><img src="{{ asset($data->owner->image) }}" alt="Avat r"></a>
                  <div class="cs-post_avatar_right">
                    <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">{{ $data->owner->name }}</a></h2>
                    <div class="cs-post_meta">
                      <span class="cs-post_meta_item">{{\Carbon\Carbon::parse($data->created_at)->translatedFormat('d F Y')}}</span>
                      {{-- <span class="cs-post_meta_item">25 Comments</span> --}}
                    </div>
                  </div>
                </div>
                <img src="{{ asset( $data->image) }}" class="rounded-lg" alt="">
                <p class="text-dark">
                    {!! $data->description !!}
                </p>
                <div class="row justify-content-center my-3">
                    @if($data->file_one != null)
                    <div class="col-lg-4">
                        <a href="{{ asset($data->file_one) }}"  download="{{ asset($data->file_one_name) }}"class="cs-btn cs-style1 cs-btn_lg w-100 text-center"><span><i class="fa-solid fa-file-pdf"></i> Download file</span></a>
                    </div>
                    @endif
                    @if($data->file_two != null)
                    <div class="col-lg-4">
                        <a href="{{ asset($data->file_two) }}" download="{{ asset($data->file_tow_name) }}" class="cs-btn cs-style1 cs-btn_lg w-100 text-center"><span><i class="fa-solid fa-file-pdf"></i> Download file</span></a>
                    </div>
                    @endif
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cs-height_0 cs-height_lg_70"></div>
            <div class="cs-blog_sidebar">
                {{-- <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                  <form action="#" class="cs-search">
                    <input type="text" class="cs-search_input" placeholder="{{__('front.Search')}}">
                    <button class="cs-btn cs-style1">
                      <span>{{__('front.Search')}}</span>
                    </button>
                  </form>
                </div> --}}
                <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                    <h2 class="cs-widget_title"><span> {{__('front.Recent News')}}</span></h2>
                    <ul class="cs-recent_post_widget">
                        @foreach ($articles as $article)
                        <li>
                          <div class="cs-recent_post">
                            <h3 class="cs-post_title"><a href="{{ route('article.show' , $article) }}">{{ $article->title }}</a></h3>
                            <div class="cs-posted_by">{{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')}}</div>
                          </div>
                        </li>
                        @endforeach
                    </ul>
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
