@extends('front.layouts.app')
@section('title')
{{__('front.title-board-of-directors')}}
@endsection
@section('titlePage')
{!! __('front.Board of  <span class="cs-accent_color">Directors</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{ __('front.investor relations') }}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{ __('front.governance') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.board of directors') }}</li>
@endsection

@section('content')

  <section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">
            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset($section_one->image) }}">
          </div>

        </div>
        <div class="col-lg-7">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">

            <p class=" wow animate__animated animate__fadeInUp">
                {!! $section_one->description_one !!}
            </p>
            <h2 class="cs-cta_title">{{$section_one->title}} <span class="cs-accent_color wow  animate__animated animate__fadeInUp">{{$section_one->title_color}}</span></h2>
            <p class=" wow animate__animated animate__fadeInUp">
                {!! $section_one->description_two !!}
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
            <h2 class="cs-cta_title ">{{$section_two->title}} <span class="cs-accent_color wow  animate__animated animate__fadeInUp">{{$section_two->title_color}}</span></h2>

            <p class=" wow animate__animated animate__fadeInUp">
                {!! $section_two->description_one !!}
            </p>

          </div>

          <div class="cs-height_80 cs-height_lg_80"></div>

        </div>
        <div class="col-lg-5 d-none d-lg-block">

          <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInRight">

            <img class=" rounded-lg" width="auto" height="300px" src="{{ asset('assets/img/board/Board-Of-Direcors') }}-picture-1.webp">

          </div>
        </div>
      </div>
    </div>

  </section>
  <div class="cs-height_80 cs-height_lg_80"></div>

  <section>
    <div class="container-lg">
      <div class="row">
        <div class="row align-items-center justify-content-center">
            @foreach ($members as $member)
            <div class="col-xl-4 col-md-6">
                <div class="team-member text-center wow fadeInUp delay-0-2s mb-3">
                    <a href="{{route('members.show' , $member)}}" class="image cs-center mb-2">
                        <img src="{{ asset($member->image) }}" class="rounded-circle w-50" alt="Team Member">
                    </a>
                    <a href="{{ route('members.show' , $member)}}"><h3 class="mb-0">{{$member->name }}</h3></a>
                    <span>
                        {{ Str::limit( strip_tags($member->description)?? '', 90, '...') }}
                    </span>
                </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </section>
@endsection
