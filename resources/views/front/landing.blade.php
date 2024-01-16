<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>Birzeit Pharmaceutical Company</title>
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>

  <div class="cs-preloader cs-center">
    <div class="cs-preloader_in"></div>
    <span>Birzeit<br>Pharmaceutical Company</span>
  </div>

  <!-- Start Header Section -->
  
<header class="cs-site_header cs-style1 cs-sticky-header cs-white_bg">
    <div class="cs-main_header">
      <div class="container-fluid">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <a class="cs-site_branding" href="{{ route('landing.index') }}">
              <div class="logos">
                <div class="logo-inner">
                    <div class="logo-front">
                      <img src="{{ asset('assets/img/logo.webp')}}" alt="Birzeit Pharmaceutical Company">
                    </div>
                    <div class="logo-back">
                      <img src="{{ asset('assets/img/logo-50years.webp')}} "  alt="Birzeit Pharmaceutical Company">
                    </div>
                </div>
              </div>
            </a>
            <h1 class="sr-only">Birzeit Pharmaceutical Company</h1>

            <div class="lang_front px-2">
                @if(app()->getLocale() == 'ar')
                <a class="btn btn-icon text-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                href="{{route('lang.switchLang', 'en')}}">EN
                </a>
            @else
                <a class="btn btn-icon text-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                href="{{route('lang.switchLang', 'ar')}}">AR
                </a>
            @endif
            </div>
          </div>
          <div class="cs-main_header_right">
            <div class="cs-search_wrap">
              <form action="#" class="cs-search">
                <input type="text" class="cs-search_input cs-box_shadow" placeholder="Search...">
                <button class="cs-search_btn">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z" stroke="currentColor" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </form>
            </div>
            <div class="cs-nav_wrap">
              <div class="cs-nav_out">
                <div class="cs-nav_in">
                  <div class="cs-nav">
                    <ul class="cs-nav_list">
                      <li><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
                      <li><a href="{{ route('about.index') }}">{{ __('front.about') }}</a></li>

                      <li class="menu-item-has-children">
                        <a href="{{route('products.index' , 'all')}}">{{__('front.Products')}}</a>
                        @php
                            $product_types = App\Models\ProductType::select('*')->orderBy('order_by', 'asc')->get();
                            // dd($product_types)
                        @endphp

                        <ul>
                            @foreach ($product_types as $product_type)
                                <li><a href="{{route('products.index' , $product_type->title)}}">{{$product_type->name}}</a></li>
                            @endforeach
                        </ul>
                      </li>
                      <li><a href="{{route('social-responsibility.index')}}">{{__('front.Social Responsibility')}}</a></li>
                      <li class="menu-item-has-children">
                        <a href="javascript:void(0);">{{__('front.Investor Relations')}}</a>
                        <ul>
                          <li><a href="{{ route('stock-price.index') }}">{{__('front.Stock information')}}</a></li>
                          <li><a href="{{ route('investor-services.index') }}">{{__('front.Investor services')}}</a></li>
                          <li><a href="{{ route('financial-report.index') }}">{{__('front.Financial Reports')}}</a></li>
                          <li><a href="{{ route('governance.index') }}">{{__('front.Governance')}}</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('contact.index') }}">{{__('front.Contact')}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs-header_btns_wrap">
              <div class="cs-header_btns">
                <div class="btn cs-center cs-mobile_search_toggle">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                @if(App\Models\Setting::where('setting_key' , "facebook")->first()->setting_value != '')
                    <a href="{{ App\Models\Setting::where('setting_key' , "facebook")->first()->setting_value }}" target='_blank' ><i class="fab fa-facebook-f"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value != '')
                    <a href="{{ App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value }}" target='_blank' ><i class="fab fa-twitter"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "linkedin")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "linkedin")->first()->setting_value }}" target='_blank' ><i class="fab fa-linkedin-in"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value }}" target='_blank' ><i class="fab fa-instagram"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "youtube")->first()->setting_value != '')
                <a href="{{ App\Models\Setting::where('setting_key' , "youtube")->first()->setting_value }}" target='_blank' ><i class="fab fa-youtube"></i></a>
                @endif
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- End Header Section -->

  <div class="cs-height_90 cs-height_lg_80"></div>

  <!-- Start Page Head -->
  <section class="cs-page_head-v2 cs-center">
    <img src="assets/img/bpc-just50.svg" width="50%" alt="Birzeit Pharmaceutical Company" class="img-fluid z-3 position-relative">

  </section>
  <!-- End Page Head -->
  <div class="cs-height_60 cs-height_lg_40"></div>

  <section>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="cs-cta_title wow  animate__animated animate__fadeInUp">Welcome to BPC’s <span class="cs-accent_color">50th</span> Anniversary Celebrations!</h2>
        
        </div>
        <div class="col-lg-6">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <p class=" wow animate__animated animate__fadeInUp">
              Birzeit Pharmaceutical Company is a truly national enterprise, firmly rooted in Ramallah, Palestine, and stands as one of the leading companies in the region. BPC proudly maintains a diverse portfolio of 270 pharmaceutical products, a testament to our unwavering commitment to excellence.
            </p>                        
          </div> 

        
        </div>
        <div class="col-lg-6">

          <div class="cs-contact_card_wrap lh-lg text-dark rounded-lg p-5">
            <p class=" wow animate__animated animate__fadeInUp">
              This year marks a significant milestone as we celebrate our 50th anniversary. BPC is founded on a set of core values that not only shape our identity but also guide our actions. Each product we manufacture reflects our dedication to excellence, trust, professionalism, efficiency, a sense of belonging, and cooperation at every stage. Thanks to the support of our leaders, investors, employees, and customers, we have illuminated our path toward this remarkable 50-year anniversary. 
            </p>                        
          </div>
          <!--<div class="cs-height_50 cs-height_lg_50"></div>-->
         <!-- <div class="cs-height_50 cs-height_lg_50"></div>-->
         <!--<div class="cs-height_50 cs-height_lg_50"></div>-->


        
        </div>
      </div>
    </div>
    
        <div class="cs-height_60 cs-height_lg_40"></div>

    <div class="bg-multicolor"></div>
    <!--<div class="cs-height_40 cs-height_lg_40"></div>-->
    
  </section>


  <!--<div class="cs-height_60 cs-height_lg_40"></div>-->

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