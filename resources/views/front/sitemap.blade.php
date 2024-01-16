@extends('front.layouts.app')
@section('title')
{{__('front.title-sitemap')}}
@endsection
@section('titlePage' , 'Sitemap')
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
<li class="breadcrumb-item active">Sitemap</li>
@endsection

@section('content')

  <!-- Start Icon Boxes -->
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 ">
        </div>

        <div class="col-lg-4 col-sm-6 ">
          <div class="cs-iconbox cs-style1 bg-light  wow  animate__animated animate__fadeInUp">

            <h2 class="cs-iconbox_title">{{__('front.Pages')}}</h2>

            <ul class="list-group list-group-flush">

                <li class="list-group-item page-item-972"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('article.index') }}">{{ __('front.Newsroom') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('about.index') }}">{{ __('front.about') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('products.index' , 'all') }}">{{ __('front.Products') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('social-responsibility.index') }}">{{ __('front.Social Responsibility') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('our-community.index') }}">{{ __('front.Our Community') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('our-environment.index') }}">{{ __('front.Our Environment') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('investor-services.index') }}">{{ __('front.Stock') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('investor-services.index') }}">{{ __('front.Investor services') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('financial-report.index') }}">{{ __('front.financial-report') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('governance.index') }}">{{ __('front.Governance') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('board-of-directors.index') }}">{{ __('front.Board of Directors') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('committees.index') }}">{{ __('front.Committees') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('executive-management.index') }}">{{ __('front.Executive Management') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('code-of-conduct.index') }}">{{ __('front.Code of conduct') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('general-assembly-meeting.index') }}">{{ __('front.General Assembly Meeting') }}</a></li>



                <li class="list-group-item page-item-2336"><a href="{{ route('careers.index') }}">{{ __('front.Careers') }}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('certificates.index') }}">{{ __('front.Certificates') }}</a></li>
                <li class="list-group-item page-item-2345"><a href="/pages/privacy">{{__('front.Privacy Policy')}}</a></li>
                <li class="list-group-item page-item-2336"><a href="/pages/terms">{{__('front.Terms and Conditions')}}</a></li>
                <li class="list-group-item page-item-2336"><a href="{{ route('sitemap.index') }}">{{ __('front.Sitemap') }}</a></li>
                <li class="list-group-item page-item-972"><a href="{{ route('contact.index') }}">{{ __('front.Contact') }}</a></li>
            </ul>

          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4 col-sm-6 ">
        </div>
      </div>
    </div>
  </section>
  <!-- End Icon Boxes -->
@endsection
