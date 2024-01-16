@extends('front.layouts.app')
@section('title')
{{$data->title }}
@endsection
@section('titlePage' )
@if($data->section_key == 'privacy' )
{!! __('front.Privacy <span class="cs-accent_color">Policy</span>') !!}
@else
{!! __('front.Terms and <span class="cs-accent_color">Conditions</span>') !!}

@endif
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item active">{{ $data->title }}</li>
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="cs-single_post">
                {!! $data->description !!}
            </div>
            <div class="cs-height_60 cs-height_lg_30"></div>
        </div>
    </div>
  </div>
@endsection
