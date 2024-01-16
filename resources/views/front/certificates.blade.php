@extends('front.layouts.app')
@section('title')
{{__('front.title-certificates')}}
@endsection

@section('titlePage')
{{__('front.Certificates') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
<li class="breadcrumb-item active"> {{__('front.Certificates') }}</li>
@endsection

@section('content')
  <section>
    <div class="container-lg">
        <div class="row justify-content-center">
            @foreach ($data as $certificate )
                <div class="col-lg-3 col-sm-6 ">
                    <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                    <div class="cs-iconbox_icon d-flex justify-content-center">
                        <div class="cs-iconbox_icon">
                            <img src="{{ asset($certificate->icone) }}" width="100px">
                        </div>
                    </div>
                    <h2 class="cs-iconbox_title">{{ $certificate->name }}</h2>
                    <div class="cs-iconbox_subtitle">{{ $certificate->description }}</div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>
            @endforeach
        </div>
    </div>
  </section>

@endsection
