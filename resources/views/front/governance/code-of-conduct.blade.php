@extends('front.layouts.app')
@section('title')
{{__('front.title-code-of-conduct')}}
@endsection
@section('titlePage')
{!! __('front.Code of  <span class="cs-accent_color">contact</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{ __('front.investor relations') }}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{ __('front.governance') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.code of conduct') }}</li>
@endsection

@section('content')
<section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">
            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset($data->image) }}">
          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">

            <p class=" wow animate__animated animate__fadeInUp">
                {!! $data->description_one !!}
            </p>
            <a href="{{$data->file}}" download="{{ asset($data->file_name) }}"  class="cs-btn cs-style1 mt-3 wow animate__animated animate__fadeInUp"><span><i class="fa-solid fa-file-pdf"></i> {{ __('front.download PDF file')  }}</span></a>
          </div>

          <div class="cs-height_80 cs-height_lg_80"></div>

        </div>
      </div>
    </div>
  </section>
@endsection
