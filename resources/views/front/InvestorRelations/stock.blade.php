@extends('front.layouts.app')
@section('title')
{{__('front.title-stock-price')}}
@endsection
@section('titlePage')
{!! __('front.Stock <span class="cs-accent_color">Price</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{__('front.Investor Relations')}}</li>
<li class="breadcrumb-item"><a href="#">{{__('front.Financial Information')}}</a></li>
<li class="breadcrumb-item active">{{__('front.Stock Price')}}
</li>
@endsection


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src="{{$data->image}}">

          </div>
      </div>
      <div class="col-lg-7">
        <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
          <div class="cs-cta_subtitle lh-lg text-dark fw-bold">{{$data->subtite }}</div>
          <h2 class="cs-cta_title wow  animate__animated animate__fadeInUp mb-0"><span class="cs-accent_color">${{$data->price}}</span> {{__('front.Change')}} (%) <span class="text-danger fw-bold mb-3">{{$data->percent}}</span>  {{__('front.Volume')}}</h2>
          <div class="cs-cta_subtitle lh-lg text-dark fw-bold">{{$data->info}}</div>
          <p class=" wow animate__animated animate__fadeInUp">
            {!! $data->description !!}
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="cs-height_50 cs-height_lg_50"></div>

  <section>
    <div class="container">
      <div class="cs-cta cs-style2 text-center cs-accent_bg">
        <h2 class="cs-cta_title cs-white_color_8">{{ __('front.You can view the full stock information under the link below.') }}</h2>
        <a href="{{ $data->link }}" target="_blank" class="cs-btn cs-style1 cs-btn_lg cs-color2"><span>{{__('front.BPC stock info')}}</span></a>
      </div>
    </div>
  </section>
@endsection
