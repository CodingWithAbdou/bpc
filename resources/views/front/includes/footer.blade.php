
<footer class="cs-footer cs-style1">
    <div class="cs-footer_bg"></div>
    <div class="cs-height_40 cs-height_lg_60"></div>
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <div class="cs-footer_widget">
            <a class="cs-site_branding" href="{{ route('home.index') }}"><img src="{{ asset('assets/img/logo.webp')}}" alt="Logo"></a>
            <p class="mt-2">{{ App\Models\Setting::where('setting_key' , "footer_description_" . getLocale())->first()->setting_value }}</p>
            <div class="cs-footer_social_btns">
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
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-3 col-sm-3">
              <div class="cs-footer_widget">
                <h2 class="cs-widget_title">BPC</h2>
                <ul class="cs-widget_nav">
                  <li><a href="{{ route('about.index') }}">{{ __('front.About') }}</a></li>
                  <li><a href="{{ route('products.index' , 'all') }}">{{ __('front.Products') }}</a></li>
                  <li><a href="{{ route('social-responsibility.index') }}">{{ __('front.Social Responsibility') }}</a></li>

                  <li><a href="{{ route('contact.index') }}">{{ __('front.Contact') }}</a></li>
                  <li><a href="{{ route('careers.index') }}">{{ __('front.Careers') }}</a></li>
                </ul>
              </div>
            </div><!-- .col -->
            <div class="col-lg-3 col-sm-3">
              <div class="cs-footer_widget pt-2">
                <ul class="cs-widget_nav mt-4">
                  <li><a href="{{ route('article.index') }}">{{ __('front.Newsroom') }}</a></li>
                  <li><a href="{{ route('investor-services.index') }}">{{ __('front.Stock') }}</a></li>
                  <li><a href="{{ route('our-community.index') }}">{{ __('front.Our Community') }}</a></li>
                  <li><a href="{{ route('board-of-directors.index') }}">{{ __('front.Board of Directors') }}</a></li>
                  <li><a href="{{ route('certificates.index') }}">{{ __('front.Certificates') }}</a></li>
                  <li><a href="{{ route('sitemap.index') }}">{{ __('front.Sitemap') }}</a></li>
                </ul>
              </div>
            </div><!-- .col -->
            <div class="col-lg-6 col-sm-3">
                <img src="{{ asset('assets/img/logo-50years.webp') }}" class="bpc-50" height="190px" width="auto">

            </div><!-- .col -->

          </div>
        </div>

      </div>
    </div>
    <div class="cs-footer_bottom">
      <div class="container-lg">
        <div class="cs-footer_separetor"></div>
        <div class="row">
          <div class="col-12 col-md-6"><div class="cs-copyright p-3 m-0">{{ __('front.© 2023 BPC. ALL RIGHTS RESERVED.') }} <a href="{{ route('pages.index' , 'terms') }}">{{ __('front.Terms and Conditions') }}</a> | <a href="{{ route('pages.index' , 'privacy') }}">{{ __('front.Privacy Policy') }}</a></div></div>
          <div class="col-12 col-md-6">
            <div class="text-start cs-copyright p-3 m-0">{{ __('front.Developed by ') }}<a href="https://fis.ps" target="_blank">FIS.PS</a></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
