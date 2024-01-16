@extends('front.layouts.app')
@section('title')
{{__('front.title-environment')}}
@endsection
@section('titlePage')
{!! __('front.Our <span class="cs-accent_color">Environment</span>') !!}
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

  <section class="bg-light">
    <div class="cs-height_40 cs-height_lg_40"></div>

    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
            @foreach ($lists  as $list)
                <h2 class="cs-cta_title wow  animate__animated animate__fadeInUp">{{$list->title}} <span class="cs-accent_color">{{$list->title_color}}</span></h2>
                <p class=" wow animate__animated animate__fadeInUp">
                    {!! $list->description !!}
                </p>
            @endforeach
          <div class="cs-height_50 cs-height_lg_50"></div>
        </div>


      </div>
    </div>
    <div class="cs-height_40 cs-height_lg_40"></div>

  </section>

@endsection
