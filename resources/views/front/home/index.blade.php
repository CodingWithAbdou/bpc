@extends('front.layouts.app')
@section('title')
{{ App\Models\Setting::where('setting_key' , "website_name_" . getLocale())->first()->setting_value }}
@endsection
@section('content')


  <!-- Start Hero -->
  <section class="main-slider  position-relative">
    <div class="cs-height_70 cs-height_lg_70"></div>

    <div class="wow  animate__animated animate__fadeInLeft">
      <div class="cs-hero_slider_1 z-1">
        <div class="cs-slider position-relative cs-style1 z-1">
          <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="1">
            <div class="cs-slider_wrapper">

                @foreach ($sliders as $slider)
                <div class="cs-slide">
                  <div class="container-lg">
                    <div class="row m-0 position-relative cs-hero cs-style1 h-100 cs-bg cs-center" >

                      <div class="col-11 col-md-9 col-lg-6 mb-3 px-5">
                        <div class="cs-hero_text">
                          <h2 class="cs-hero_subtitle mt-5 mt-xl-0 ">
                              {!! $slider->title  !!}
                          </h2>
                          <div class="cs-hero_subtitle cs-medium d-none d-md-block text-dark">
                              {!! Str::limit( $slider->description?? '', 150, '...')  !!}
                          </div>
                          <div class="cs-hero_btns mb-sm-0 mb-lg-5 mt-xl-0">
                            <a href="{{ route('slider.show' , $slider->id) }}" class="cs-hero_btn cs-style1 cs-color3"><span>{{ __('front.Read More')}}</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-1 col-md-3 col-lg-6 p-0">
                        <img class="rounded-lg d-none d-lg-block zoom-in-effect" src='{{ asset("$slider->image") }}'>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div><!-- .cs-slider_container -->
          <div class="cs-pagination cs-style1"></div>
        </div><!-- .cs-slider -->
      </div>
    </div>
  </section>
  <!-- End Hero -->


  <section class=" wow  animate__animated animate__fadeInLeft ">
    <div class="container-lg">
      <div class="cs-height_30 cs-height_lg_30"></div>
      <div class="row">
        <div class="col-lg-5 offset-lg-1 text-center text-lg-end" style="
        {{getLocale() == 'ar' ?
        'text-align: start !important;margin-inline-end:8.33%;margin-right: 0%':''}}">
          <h2 class="cs-section_title">{{ $experience->title }}</h2>
          <p class="text-dark">{{ strip_tags($experience->description )}}</p>
          <a href="{{route('about.index')}}" class="cs-btn cs-style1"><span>{{ __('front.Learn More') }}</span></a>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-6 text-center position-relative">
          <img src='{{ asset("$experience->image_one") }}' class="img-fluid rounded-lg" alt="...">
          <img src="{{ asset("$experience->image_two") }}" class="
          {{getLocale() == 'ar' ? 'position-absolute top-50 end-0 w-75 border-5 border border-color-3 rounded-lg' : 'position-absolute top-50 start-50 w-75 border-5 border border-color-3 rounded-lg' }}
           alt="...">
        </div>
      </div>

    </div>
  </section>
  <div class="cs-height_100 cs-height_lg_100"></div>
  <div class="cs-height_100 cs-height_lg_100"></div>

  <section class="wow  animate__animated animate__fadeInRight ">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="cs-section_title">{{ $product_info->title }}</h2>
          <p class="text-dark">{{ strip_tags($product_info->description)  }}</p>
        </div>
        <div class="cs-height_80 cs-height_lg_80"></div>

      </div>
      <div class="row">

        @foreach ($production_types as $production_type)
        <div class="col-lg-4 col-md-12 mb-5 mt-5 mt-lg-0">

          <div class=
          "{{$production_type->id == 1?
          "card h-100 bg-info p-2 border-0 cs-box_shadow rounded-lg  animate__animated animate__fadeInLeft" : 
         ( $production_type->id == 2?
          "card h-100 bg-success p-2 border-0 cs-box_shadow rounded-lg  animate__animated animate__fadeInLeft" :
          
          "card h-100 bg-purplle p-2 border-0 cs-box_shadow rounded-lg  animate__animated animate__fadeInLeft" )
          
          }} "
          
          >
            <div class="col-12 card-services-img position-relative cs-center">
              <img src="{{ asset("$production_type->icone") }}" alt="...">
            </div>
            <a href="{{route('products.index' , $production_type->title)}}" class="text-center mt-3 text-white">{{ $production_type->name }}</a>
          </div>
        </div>
        @endforeach
        <!-- .col -->
        <div class="col-12 text-center">
          <a href="{{route('products.index' , 'all')}}" class="cs-btn cs-style1-outline d-inline-block animate__animated animate__fadeInLeft">{{ __('front.All Products') }} <i class="fa-solid fa-arrow-right-long ms-3"></i></a>

        </div>

      </div>
    </div>
  </section>

  <div class="cs-height_40 cs-height_lg_30"></div>

  <section class="team-works  position-relative">
    <div class="wow  animate__animated animate__fadeInRight ">
      <div class="container-lg">

        <div class="cs-section_heading">
          <div class="cs-height_80 cs-height_lg_80"></div>
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">

              <h2 class="text-center">{{$porductivity_info->title?? ""}}</h2>
            </div>
          </div>
          <div class="cs-height_50 cs-height_lg_50"></div>

        </div>

        <div class="row">

            @foreach ($productivities as $productivity)
            <div class="col-lg-3 col-md-6 mb-5 mt-5 mt-lg-0">
                <div class=" h-100 p-2 border-0 rounded-lg  animate__animated animate__fadeInLeft">
                  <div class="col-12 position-relative cs-center">
                    <img src="{{$productivity->icone}}" width="75px" alt="...">
                  </div>
                  <h3 class="text-center mt-3 mb-0 cs-accent_color counter" data-target="{{$productivity->value}}">{{$productivity->value}}</h3>
                  <h5 class="text-center">{{$productivity->name}}</h5>
                </div>
              </div>
            @endforeach

        </div>
      </div>
    </div>
  </section>

  <div class="cs-height_40 cs-height_lg_30"></div>

  <!-- Start Blog Section -->
  <section class="bg-shape-gray bg-light py-5 wow  animate__animated animate__fadeInLeft ">
    <div class="container-lg">
      <div class="cs-section_heading cs-style2">
        <div class="cs-section_left">
          <h2 class="cs-section_title">{{ __('front.Latest News') }}</h2>

        </div>
        <div class="cs-section_right">
          <a href="{{ route('article.index') }}" class="cs-btn cs-style1"><span>{{ __('front.All News') }}</span></a>
        </div>
      </div>
      <div class="cs-height_45 cs-height_lg_45"></div>
      <div class="row">
        {{-- get here four from latest News --}}
        @foreach($latest_news as $item)
        <div class="col-lg-3">
          <div class="card rounded-lg cs-post cs-style1 cs-box_shadow">
            <a href="{{ route('article.show' , $item) }}" class="cs-post_thumb rounded-lg">
              <div class="cs-post_thumb_in cs-bg rounded-lg" data-src="{{asset($item->image)}}"></div>
            </a>
            <div class="cs-post_info p-3">
              <h3 class="cs-post_title text-overflow-v2"><a href="{{ route('article.show' , $item) }}">{{$item->title}}</a></h3>
                <div class="cs-post_avatar">
                  <div class="cs-post_avatar_right">
                    <div class="cs-post_meta">
                      <span class="cs-post_meta_item"><i class="fa-solid fa-clock cs-accent_color"></i>     {{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y')}}</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>

        @endforeach
      </div>
    </div>
  </section>
  <!-- Start Blog Section -->
@endsection
