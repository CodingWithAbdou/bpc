@extends('front.layouts.app')
@section('title')
{{__('front.title-responsibility')}}
@endsection
@section('titlePage')
{!! __('front.Social <span class="cs-accent_color">Responsibility</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
<li class="breadcrumb-item active">{{ $data->title }}</li>
@endsection

@section('content')
<!-- Start Icon Boxes -->
<section>
  <div class="container">
      <div class="d-flex justify-content-center wow  animate__animated animate__fadeInUp text-dark">
          <div class="col-lg-6">
            {!! $data->description?? "" !!}
        </div>
      </div>
    <div class="cs-height_45 cs-height_lg_45"></div>
    <div class="row justify-content-center">
      <a href="{{ route('our-environment.index') }}" class="col-lg-4 col-sm-6 ">
        <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
          <div class="cs-iconbox_icon d-flex justify-content-center">

              <div class="cs-iconbox_icon_icon rounded-circle">
                  <i class="fa-solid fa-briefcase fa-2x text-white"></i>
              </div>
          </div>
          <h2 class="cs-iconbox_title">{{ $environment->title??"" }}</h2>
          <div class="cs-iconbox_subtitle">{!! Str::limit( $environment->description??'', 120, '...') !!}
          </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
      </a>
      <a  href="{{ route('our-community.index') }}" class="col-lg-4 col-sm-6 ">
        <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
          <div class="cs-iconbox_icon d-flex justify-content-center">

              <div class="cs-iconbox_icon_icon rounded-circle">
                  <i class="fa-regular fa-gem fa-2x text-white"></i>
              </div>
          </div>
          <h2 class="cs-iconbox_title">{{ $community->title?? "" }}
          </h2>
          <div class="cs-iconbox_subtitle">{!! Str::limit( $community->description?? '', 120, '...') !!}
          </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
      </a>
    </div>
  </div>
</section>
<!-- End Icon Boxes -->
@endsection
