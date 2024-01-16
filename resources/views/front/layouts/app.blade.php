<!DOCTYPE html>
<html class="no-js" lang="{{app()->getLocale() == 'ar' ? 'ar' : 'en' }} }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="ThemeMarch">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{App\Models\Setting::where("setting_key" , "description_" . getLocale())->first()->setting_value }}">

        <!-- Site Title -->
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset(App\Models\Setting::where('setting_key' , "favicon")->first()->setting_value)}}">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{  asset('assets/css/plugins/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>

    <body>
    @include('front.includes.preload')

    <!-- Start Header Section -->
    @include('front.includes.header')
    <!-- End Header Section -->

    <!-- Start Page Head -->
    <div class="cs-height_90 cs-height_lg_80"></div>
    @if(!request()->is('/'))
    @include('front.includes.headPage')
    @endif
    <!-- End Page Head -->

    @yield('content')
    @if(!request()->is('/'))
    <div class="cs-height_60 cs-height_lg_40"></div>
    @endif


    <!-- Start Footer -->
    @include('front.includes.footer')
    <!-- End Footer -->

    <!-- Start Video Popup -->
    @include('front.includes.videoPopup')
    <!-- End Video Popup -->

    @vite(['resources/js/app.js'])

    <!-- Script -->
    <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100
        }
        );
        wow.init();

        $( document ).ready(function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        });

    </script>

    @stack('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const SwalModal = (text ,type ,url) => {
            swal.fire({
                text: text,
                icon: type,
                confirmButtonText: '{{__('front.Ok got it')}}',
                confirmButtonColor: '#01acab',
            }).then(function (){
                if (url)
                    window.location = url;
            });
        };
    </script>
    </body>
</html>
