<!DOCTYPE html>
@if(app()->getLocale() == 'ar')
    <html  dir="rtl" lang="ar">
@elseif(app()->getLocale() == 'en')
    <html dir="ltr" lang="en">
@else
    <html dir="ltr" lang="fr">
@endif
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="{{\App\Models\Setting::where('setting_key', 'keywords')->first()->setting_value}}" />
        <meta name="title" content="{{\App\Models\Setting::where('setting_key', 'website_name_' . getLocale() )->first()->setting_value}}" />
        <meta name="description" content="{{\App\Models\Setting::where('setting_key', 'description_' .  getLocale() )->first()->setting_value}}" />
        <meta
            name="author"
            content="Khaldi Abdou  @https://khamsat.com/user/khaldi_abdou" />
        <meta name="copyright" content="https://github.com/CodingWithAbdou" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }} " />
        <link rel="shortcut icon" href="{{asset(\App\Models\Setting::where('setting_key', 'favicon')->first()->setting_value)}}" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
      @vite(['resources/css/app.css', 'resources/js/app.js'])


        <title>{{\App\Models\Setting::where('setting_key', 'website_name_' . getLocale() )->first()->setting_value}} </title>
    </head>
    @if(getLocale() == 'ar')
        <body class="ar">
    @elseif(getLocale() == 'fr')
        <body class="fr">
    @else
        <body class="en">
    @endif
        <div class="navigation"  >
            <div class="container" >
                <div class="logo animate__animated  {{getLocale()  == 'ar'? 'animate__fadeInRight ' : 'animate__fadeInLeft' }}">
                    <img src="{{ asset('assets/images/logo.svg') }} " height="60" alt="" />
                </div>
                <div class="menu">
                    <img src="{{ asset('assets/images/menu.svg') }} " width="30" alt="" />
                </div>
                <div class="nav-info animate__animated {{getLocale()  == 'ar'? 'animate__fadeInLeft' : 'animate__fadeInRight ' }}">
                    <div class="lang" >
                        <a href="{{route('lang.switchLang', 'ar')}}">عربــي</a>
                        <a href="{{route('lang.switchLang', 'fr')}}">frensh</a>
                        <a href="{{route('lang.switchLang', 'en')}}">english</a>
                    </div>
                    <div class="auth">
                        @auth
                            <a href="{{route('dashboard.logout')}}">{{__('dash.sign out')}}</a>
                        @else
                            <a href="{{route('home.login.index')}}">{{__('front.Log In')}}</a>
                            <a href="{{route('home')}}">{{__('front.Sign Up')}}</a>
                            <img src="{{ asset('assets/images/serch.svg') }} " alt="" />
                        @endauth
                    </div>
                    <div class="serch">
                    </div>
                </div>
            </div>
        </div>

        <main>
            <section
                class="form-section"
                style="background: url('{{ asset('assets/images/background.png') }}')">
                <div class="container">
                    <div class="head-title">
                        <h1 class="animate__animated animate__fadeInDown">{{__('front.Canturk Hotel Resrvation')}}</h1>
                        <p  class="animate__animated animate__fadeInUp">{{__('front.Request your reservation now')}}</p>
                    </div>
                    <form action="{{route('form')}}" id="data_form">
                        <div class="frist-section " >
                            <div class="input-field" >
                                <select name="location">
                                    <option value="">{{__('front.Choose Location')}}</option>
                                    @foreach ($locations as $location)
                                        <option value="{{$location->{'name_' . getLocale() } }}" data-icon="{{asset($location->image) }}" class="right">{{$location->{'name_' . getLocale() } }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="bar"></div>
                            <div class="full-name">
                                <input
                                    placeholder="{{__('front.Choose Hotel')}}"
                                    id="hotel"
                                    name="hotel"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="bar"></div>

                            <div>
                                <input
                                    type="text"
                                    placeholder="{{__('front.check in')}}"
                                    name="checkin"
                                    onfocus="(this.type='date')"
                                    onblur="(this.type='text')"
                                    id="checkin" />
                            </div>
                            <div class="bar"></div>

                            <div>
                                <input
                                    type="text"
                                    placeholder="{{__('front.check out')}}"
                                    onfocus="(this.type='date')"
                                    onblur="(this.type='text')"
                                    name="checkout"
                                    id="checkout" />
                            </div>
                            <div class="bar bar_last"></div>
                            <div id="dateDifference">
                                <span class="days"></span>
                                {{__('front.day')}}
                            </div>
                        </div>
                        <div class="secode-section" >
                            <div class="animate__animated   {{getLocale()  == 'ar'? 'animate__fadeInRight ' : 'animate__fadeInLeft' }}">
                                <label for="phone">{{__('front.Phone')}}</label>
                                <input
                                    placeholder="+213 560 40 32 21"
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class=" animate__animated   {{getLocale()  == 'ar'? 'animate__fadeInLeft  ' : 'animate__fadeInRight' }}">
                                <label for="email">{{__('front.E-mail')}}</label>
                                <input
                                    placeholder="Info@Canturcktourousim.com"
                                    id="email"
                                    name="email"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last animate__animated   {{getLocale()  == 'ar'? 'animate__fadeInRight ' : 'animate__fadeInLeft' }}">
                                <label for="people">{{__('front.People')}}</label>
                                <input
                                    placeholder="{{__('front.number of persons')}}"
                                    id="people"
                                    name="number_people"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last animate__animated   {{getLocale()  == 'ar'? 'animate__fadeInLeft  ' : 'animate__fadeInRight' }}">
                                <label for="room">{{__('front.Room')}}</label>
                                <input
                                    placeholder="{{__('front.number of rooms')}}"
                                    id="room"
                                    name="room"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <div id="persons_section" class=""></div>
                        <div class="last-section animate__animated  animate__zoomIn" >
                            <div>{{ __('front.They need a transfer from the airport?') }}</div>

                            <div class="bar "></div>

                            <div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap checkbox"
                                            id="yes"
                                            name="delivery"
                                            type="radio"
                                            value="1"
                                            checked
                                            />
                                        <span>{{__('front.Yes')}}</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap checkbox"
                                            id="no"
                                            name="delivery"
                                            value="0"

                                            type="radio" />
                                        <span>{{__('front.No')}}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="bar delivery"></div>

                            <div class="flight_div">
                                <input
                                    placeholder="{{__('front.Flight No')}}"
                                    id="flight"
                                    name="flight_no"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="bar delivery"></div>

                            <div class="arrival_div">
                                <input
                                    placeholder="{{__('front.Arrival Time')}}"
                                    id="arrival"
                                    name="arrival_time"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <button  type="submit" class="btn-request animate__animated animate__zoomInUp">
                            <span class="base">{{__('front.Request')}} </span>
                            <span class="second">{{__('front.wait')}} </span>
                        </button>
                    </form>
                </div>
            </section>
            <section class="subscribe">
                <div class="container">
                    <div >{{__('front.Subsctibe and be notifed about new locations')}}</div>
                    <div  class="input-field inline email">
                        <input
                            id="email_inline"
                            type="email"
                            name="email_sub"
                            placeholder="{{__('front.Your Email')}}"
                            class="validate" />
                        <a href="">
                            <img
                            class="arrow"
                                src="{{ asset('assets/images/arrow.svg') }} "
                                height="14"
                                alt="" />
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div>
                    <div>
                        <h4>{{__('front.CanTurk Tourism')}}</h4>
                        <p>
                            {{\App\Models\Setting::where('setting_key', 'footer_description_' . getLocale() )->first()->setting_value}}
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <h4>{{__('front.Contact')}}</h4>
                            <div class="info">
                                <img
                                    src="{{ asset('assets/images/location.png') }} "
                                    width="16"
                                    alt="" />
                                <span>
                                    {{\App\Models\Setting::where('setting_key', 'address_' . getLocale() )->first()->setting_value}}
                                </span>
                            </div>
                            <div class="info">
                                <img
                                    src="{{ asset('assets/images/phone.png') }} "
                                    width="16"
                                    alt="" />
                                <span class="phone">{{\App\Models\Setting::where('setting_key', 'phone' )->first()->setting_value}}</span>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/word.svg') }} " alt="" />
                            <img src="{{ asset('assets/images/Point.svg') }} " alt="" />
                            <img src="{{ asset('assets/images/Point.svg') }} " alt="" />
                            <img src="{{ asset('assets/images/Point.svg') }} " alt="" />
                            <img src="{{ asset('assets/images/Point.svg') }} " alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer">
            <div class="container">
                {!! __("front.copyright") !!} <span id="year"></span>
            </div>
        </div>
    </body>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/materialize.min.js') }} "></script>
    <x-js.form />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const SwalModal = (text ,type ,url) => {
            Swal.fire({
                text: text,
                icon: type,
                confirmButtonText: '{{__('front.Ok got it')}}',
                confirmButtonColor: '#4ca1af',
                customClass: {
                    title: "Nexa-Thin",
                    content: 'Nexa-Thin',
                    confirmButton: 'Nexa-Thin',
                }
            }).then(function (){
                if (url)
                    window.location = url;
            });
        };

        $(document).on('submit', '#data_form', function(e){
            e.preventDefault();
            let form = $(this);
            showWait(true);
            HideValidationError(form);
            let action = $(this).attr('action');
            $.ajax({
                headers:  {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: action,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    if(response.status){
                        SwalModal(response.msg, 'success');
                    }else{
                        SwalModal(response.msg, 'errors');
                    }
                    form.find(':input:not(.datepicker):not(.checkbox)').val('');
                    form.find('select').val(null).trigger('change');
                    showWait(false);

                },
                error: function (response) {
                    let array= []
                    $.each(response.responseJSON.errors, function (i, value) {
                        let index = i.split('.')[0];
                        console.log(index);

                        showValidationError(form, index, value);
                    });
                    Swal.fire({
                        title: '{{__('front.check the input')}}',
                        icon: 'error',
                        confirmButtonColor: '#4ca1af',
                        confirmButtonText: '{{__('dash.ok')}}',
                    })
                    showWait(false);

                }
            });

            function showWait(status) {
                if(status) {
                    document.querySelector('.base').classList.add('loading')
                    document.querySelector('.second').classList.add('loading')
                }else {
                    document.querySelector('.base').classList.remove('loading')
                    document.querySelector('.second').classList.remove('loading')
                }
            }

        })
    </script>

</html>
