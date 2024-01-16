@extends('front.layouts.app')
@section('title')
{{__('front.title-career')}}
@endsection
@section('titlePage')
{{ __('front.Careers') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.Careers') }}</li>
@endsection

@section('content')
<section>

    <div class="container ">
        <div class="cs-cta cs-style2 text-center cs-shape_accent_bg pb-5">
            <h2 class="cs-cta_title text-white">{{__('front.JOIN A TEAM AND INSPIRE THE WORK')}}</h2>
            <div class="cs-cta_subtitle text-white">{{__('front.Our values are part of everything built here — including careers.')}}</div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 position-relative mb-3 mb-lg-0 ">
                    <div class="cs-iconbox h-100  cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">{{__('front.Accessibility')}}</h2>
                        <div class="cs-iconbox_subtitle">
                            {{__('front.Technology is most powerful when everyone can make their mark.')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 position-relative mb-3 mb-lg-0 ">
                    <div class="cs-iconbox  h-100 cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">{{__('front.Environment')}}</h2>
                        <div class="cs-iconbox_subtitle">
                            {{__('front.Our goal is to leave the planet better than we found it.')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 position-relative mb-3 mb-lg-0">
                    <div class="cs-iconbox  h-100 cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">{{__('front.Education')}}</h2>
                        <div class="cs-iconbox_subtitle">
                            {{__('front.Education is a potent equalizer, providing opportunity for all.')}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </section>
  <section class="mt-5">
    <div class="container-lg">
        <div class="row justify-content-center">
        @if($data->count() > 0)
          <div class="col-12 text-center">
            <h3>{{__('front.Available')}} <span class="cs-accent_color">{{__('front.Now')}}</span></h3>
          </div>
        @endif
        @forelse($data as $career)
        <a href="{{ route('careers.form' , $career ) }}" class="col-lg-4 col-sm-6 " >
          <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
            <div class="cs-iconbox_icon d-flex justify-content-center">

                <div class="cs-iconbox_icon_icon rounded-circle">
                    <i class="fa-solid fa-briefcase fa-2x text-white"></i>
                </div>
            </div>
            <h2 class="cs-iconbox_title">{{$career->title}}
            </h2>
            <div class="cs-iconbox_subtitle">{{$career->description}}
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </a>

        @empty
        <div class="col-12 text-center">
            <h3><span class="cs-accent_color">{{__('front.No Career')}}</span>{{__('front.Vacancy Now')}}</h3>
          </div>
          <div class="col-lg-6 col-sm-12 ">
            <img src="{{asset('assets/img/general/section-04.webp')}}" class="img-fluid">
          </div>
        @endforelse
        </div>

    </div>
  </section>
@endsection
