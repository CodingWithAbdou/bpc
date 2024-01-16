@extends('front.layouts.app')
@section('title')
@section('title' )
{{__('front.title-executive-management')}}
@endsection

@section('titlePage')
{!! __('front.Executive <span class="cs-accent_color">Management</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{ __('front.investor relations') }}</li>
<li class="breadcrumb-item"><a href="{{ route('governance.index') }}">{{ __('front.governance') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.executive management') }}</li>
@endsection

@section('content')
  <section>
    <div class="container-lg">
      <div class="row">
        <div class="row align-items-center justify-content-center">
            @foreach ($members as $member)
            <div class="col-xl-4 col-md-6">
                <div class="team-member text-center wow fadeInUp delay-0-2s mb-3">
                    <a href="{{ route('members.show' ,  $member) }}" class="image cs-center mb-2">
                        <img src=" {{asset($member->image)}} " class="rounded-circle w-50" alt="Team Member">
                    </a>
                    <a href="{{ route('members.show' ,  $member) }}"><h3 class="mb-0">{{$member->name}}</h3></a>
                    <span>{{ Str::limit( $member->description?? '', 90, '...') }}</span>
                </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </section>
@endsection
