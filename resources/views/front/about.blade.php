@extends('front.layouts.app')
@section('title')
{{__('front.title-about')}}
@endsection
@section('titlePage')
{!! __('front.About <span class="cs-accent_color">Us</span>') !!}@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.About Us') }}
</li>
@endsection

@section('content')

  <section>
      <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset($profile->image_one) }}">

          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <h2 class="cs-cta_title wow  animate__animated animate__fadeInUp">{{ $profile->title??'' }} <span class="cs-accent_color">{{ $profile->subtitle??'' }} </span></h2>
            <!-- <div class="cs-cta_subtitle lh-lg text-dark"></div>
            <hr> -->
            <p class=" wow animate__animated animate__fadeInUp">
                {!! $profile->description !!}
            </p>
          </div>
          <div class="cs-height_50 cs-height_lg_50"></div>

        </div>
      </div>
     </div>
  </section>

  <section class="bg-light">
    <div class="cs-height_40 cs-height_lg_40"></div>

    <div class="container-lg">
      <div class="row">
        <div class="col-lg-7">

          <div class=" lh-lg text-dark rounded-lg p-5  wow  animate__animated animate__fadeInUp">

            <!-- <h2 class="cs-cta_title">Company <span class="cs-accent_color">Profile</span></h2>
            <div class="cs-cta_subtitle lh-lg text-dark"></div>
            <hr> -->
            {!! $second_profile->description??'' !!}
          </div>
          <div class="cs-height_50 cs-height_lg_50"></div>

        </div>
        <div class="col-lg-4 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow wow  animate__animated animate__fadeInRight">

            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset($second_profile->image_one) }}">

          </div>

        </div>

      </div>
    </div>
    <div class="cs-height_40 cs-height_lg_40"></div>

  </section>
  <section>
    <div class="container-lg">
      <div class="d-flex justify-content-center">
        <h2 class="cs-cta_title">{{ $vision->title??'' }} <span class="cs-accent_color  wow  animate__animated animate__fadeInUp">{{ $vision->subtitle??'' }}</span></h2>
      </div>
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow">

            <img class=" rounded-lg  wow  animate__animated animate__fadeInLeft" width="auto" height="300px" src="{{ asset($vision->image_one) }}">

          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5  wow  animate__animated animate__fadeInRight">

            <!-- <div class="cs-cta_subtitle lh-lg text-dark"></div>
            <hr> -->
                {!! $vision->description !!}
          </div>
          <div class="cs-height_50 cs-height_lg_50"></div>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-lg">
      <div class="d-flex justify-content-center">
        <h2 class="cs-cta_title">{{$history->title??''}} <span class="cs-accent_color  wow  animate__animated animate__fadeInDown">{{$history->subtitle??''}}</span></h2>
      </div>
      <div class="row">

        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5  wow  animate__animated animate__fadeInUp">

            <!-- <div class="cs-cta_subtitle lh-lg text-dark"></div>
            <hr> -->
            {!! $history->description !!}
          </div>
          <div class="cs-height_50 cs-height_lg_50"></div>

        </div>
        <div class="col-lg-5 position-relative">

          <img src="{{ asset($history->image_one) }}" class="img-fluid rounded-lg  wow  animate__animated animate__fadeInRight" alt="...">
          <img src="{{ asset($history->image_two) }}" class="position-absolute top-25 start-25 w-75 border-5 border border-color-3 rounded-lg  wow  animate__animated animate__fadeInLeft" alt="...">

        </div>
      </div>
    </div>
  </section>
@endsection
