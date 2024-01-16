@extends('front.layouts.app')
@section('title')
{{__('front.title-member')}}
@endsection
@section('titlePage')
{{$data->type == '1' ? __('front.board of directors') :__('front.executive management') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{__('front.investor relations')}}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{__('front.governance')}}</a></li>
@if($data->type == '1')
<li class="breadcrumb-item active"><a href="{{ route('board-of-directors.index') }}">{{ __('front.board of directors')}}</a></li>
@else
<li class="breadcrumb-item active"><a href="{{ route('board-of-directors.index') }}">{{ __('front.executive management')}}</a></li>
@endif
{{-- name change here --}}
<li class="breadcrumb-item active"> {{ $data->name}}</li>
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

            <h2 class="cs-cta_title wow animate__animated animate__fadeInLeft">{{ $data->name}}</h2>
            <p class=" wow animate__animated animate__fadeInUp">
                {!! $data->description !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
