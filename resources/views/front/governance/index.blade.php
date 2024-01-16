@extends('front.layouts.app')
@section('title')
{{__('front.title-governance')}}
@endsection

@section('titlePage')
{{ __('front.governance') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{ __('front.investor relations') }}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{ __('front.governance') }}</a></li>
@endsection

@section('content')

  <!-- Start Icon Boxes -->
  <section>
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($governances as $governance)
        <a href="{{ route($governance->section_key . '.index') }}" class="col-lg-4 col-sm-6 ">
          <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
            <div class="cs-iconbox_icon d-flex justify-content-center">
                <div class="cs-iconbox_icon_icon rounded-circle">
                    <i class="fa-solid fa-people-roof fa-2x text-white"></i>
                </div>
            </div>
            <h2 class="cs-iconbox_title">{{ $governance->title }}</h2>
            <div class="cs-iconbox_subtitle">{{ $governance->description }}
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Icon Boxes -->

@endsection
