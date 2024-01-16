@extends('front.layouts.app')
@section('title')
{{__('front.title-community')}}
@endsection
@section('titlePage')
{{ $data->title   }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item active">{{ $data->title }}</li>
@endsection

@section('content')
<section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset($data->image_one) }}">

          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">

            <p class=" wow animate__animated animate__fadeInUp">
                {!! $data->description !!}
            </p>

          </div>
          <div class="cs-height_80 cs-height_lg_80"></div>

        </div>
      </div>
    </div>
  </section>
@endsection
