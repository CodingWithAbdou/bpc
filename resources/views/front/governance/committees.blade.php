
@extends('front.layouts.app')
@section('title' )
{{__('front.title-committees')}}
@endsection

@section('titlePage')
{{ __('front.Committees') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{ __('front.investor relations') }}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{ __('front.governance') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.Committees') }}</li>
@endsection

@section('content')

  <section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src=" {{ asset($section_one->image) }} ">

          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <h2 class="cs-cta_title">{{ $section_one->title}} <span class="cs-accent_color wow  animate__animated animate__fadeInUp">{{ $section_one->title_color}}</span></h2>

            <p class=" wow animate__animated animate__fadeInUp">
                {!!  $section_one->description_one !!}
            </p>

          </div>


        </div>
      </div>
    </div>
  </section>
  <div class="cs-height_80 cs-height_lg_80"></div>

  <section class="bg-light">
    <div class="cs-height_80 cs-height_lg_80"></div>

    <div class="container-lg">
      <div class="row">

        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <h2 class="cs-cta_title ">{{ $section_two->title}} <span class="cs-accent_color wow  animate__animated animate__fadeInUp">{{ $section_two->title_color}}</span></h2>

            <p class=" wow animate__animated animate__fadeInUp">
                {!!  $section_two->description_one !!}

            </p>

          </div>

          <div class="cs-height_80 cs-height_lg_80"></div>

        </div>
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src=" {{ asset($section_two->image) }} ">

          </div>

        </div>
      </div>
    </div>

  </section>
  <div class="cs-height_80 cs-height_lg_80"></div>

  <section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">

            <img class=" rounded-lg" width="auto" height="300px" src=" {{ asset($section_three->image) }} ">

          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <h2 class="cs-cta_title">{{$section_three->title}} <span class="cs-accent_color wow  animate__animated animate__fadeInUp">{{$section_three->title_color}}</span></h2>

            <p class=" wow animate__animated animate__fadeInUp">
                {!!  $section_three->description_one !!}

            </p>

          </div>

          <div class="cs-height_80 cs-height_lg_80"></div>

        </div>
      </div>
    </div>
  </section>


@endsection
