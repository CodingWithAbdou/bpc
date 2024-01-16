
<header class="cs-site_header cs-style1 cs-sticky-header cs-white_bg">
    <div class="cs-main_header">
      <div class="container-fluid">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <a class="cs-site_branding" href="{{ route('home.index') }}">
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
                <a target="_blank" href="{{ App\Models\Setting::where('setting_key' , "facebook")->first()->setting_value }}"><i class="fab fa-facebook-f fa-fw"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value != '')
                <a target="_blank" href="{{ App\Models\Setting::where('setting_key' , "twitter")->first()->setting_value }}"><i class="fab fa-twitter fa-fw"></i></a>
                @endif
                @if(App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value != '')
                <a target="_blank" href="{{ App\Models\Setting::where('setting_key' , "instagram")->first()->setting_value }}"><i class="fab fa-instagram fa-fw"></i></a>
                @endif
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
