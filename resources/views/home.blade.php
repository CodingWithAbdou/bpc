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
        <meta name="keywords" content=" , ,  " />
        <meta name="title" content="" />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Khaldi Abdou  @https://khamsat.com/user/khaldi_abdou" />
        <meta name="copyright" content="https://github.com/CodingWithAbdou" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} " />
        {{-- <link
            rel="shortcut icon"
            href="images/logo2.jpeg"
            type="image/x-icon" /> --}}

        <title> </title>
    </head>
    @if(getLocale() == 'ar')
        <body class="ar">
    @elseif(getLocale() == 'fr')
        <body class="fr">
    @else
        <body class="en">
    @endif
        <div class="navigation">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo.svg') }} " height="60" alt="" />
                </div>
                <div class="menu">
                    <img src="{{ asset('assets/images/menu.svg') }} " width="30" alt="" />
                </div>
                <div class="nav-info">
                    <div class="lang">
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
                        <h1>{{__('front.Canturk Hotel Resrvation')}}</h1>
                        <p>{{__('front.Request your reservation now')}}</p>
                    </div>
                    <form action="{{route('form')}}" id="data_form">
                        <div class="frist-section">
                            <div class="input-field">
                                <select name="location">
                                    <option value="">{{__('front.Choose Location')}}</option>
                                    <option value="1">ISTANBUL</option>
                                    <option value="2">ANTALYA</option>
                                    <option value="3">TRABZON</option>
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
                                    class="datepicker" />
                            </div>
                            <div class="bar"></div>

                            <div>
                                <input
                                    type="text"
                                    placeholder="{{__('front.check out')}}"
                                    name="checkout"
                                    class="datepicker" />
                            </div>
                        </div>
                        <div class="secode-section">
                            <div class="">
                                <label for="phone">{{__('front.Phone')}}</label>
                                <input
                                    placeholder="+213 560 40 32 21"
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="">
                                <label for="email">{{__('front.E-mail')}}</label>
                                <input
                                    placeholder="Info@Canturcktourousim.com"
                                    id="email"
                                    name="email"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last">
                                <label for="people">{{__('front.People')}}</label>
                                <input
                                    placeholder="{{__('front.number of persons')}}"
                                    id="people"
                                    name="number_people"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last">
                                <label for="room">{{__('front.Room')}}</label>
                                <input
                                    placeholder="{{__('front.number of rooms')}}"
                                    id="room"
                                    name="room"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <div id="persons_section"></div>
                        <div class="last-section">
                            <div>{{ __('front.They need a transfer from the airport?') }}</div>

                            <div class="bar"></div>

                            <div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap"
                                            name="delivery"
                                            type="radio"
                                            checked
                                            />
                                        <span>{{__('front.Yes')}}</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap"
                                            name="delivery"
                                            type="radio" />
                                        <span>{{__('front.No')}}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="bar"></div>

                            <div class="">
                                <input
                                    placeholder="{{__('front.Flight No')}}"
                                    id="flight"
                                    name="flight_no"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="bar"></div>

                            <div class="">
                                <input
                                    placeholder="{{__('front.Arrival Time')}}"
                                    id="arrival"
                                    name="arrival_time"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <button type="submit" class="btn-request"> {{__('front.Request')}} </button>
                    </form>
                </div>
            </section>
            <section class="subscribe">
                <div class="container">
                    <div>{{__('front.Subsctibe and be notifed about new locations')}}</div>
                    <div class="input-field inline email">
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
                            Welcome to Canturk Tourism, your gateway to
                            unforgettable experiences in Istanbul! Immerse
                            yourself in the charm of this vibrant city with our
                            expertly crafted travel solutions.
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
                                    Balabana a, Kurultay Sk. No:25/1, 34134
                                    Fatih/ stanbul
                                </span>
                            </div>
                            <div class="info">
                                <img
                                    src="{{ asset('assets/images/phone.png') }} "
                                    width="16"
                                    alt="" />
                                <span class="phone">(+90) 545 362 00 80</span>
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
                &copy; 2024 Copyright by Oussama Benabila. All rights reserved.
            </div>
        </div>
        <!-- <input type="text" class="datepicker" /> -->
    </body>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/materialize.min.js') }} "></script>
    <script src="{{ asset('assets/js/script.js') }} "></script>
    <x-js.form />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const SwalModal = (text ,type ,url) => {
            swal.fire({
                text: text,
                icon: type,
                confirmButtonText: '{{__('front.Ok got it')}}',
                confirmButtonColor: '#4ca1af',
            }).then(function (){
                if (url)
                    window.location = url;
            });
        };
    </script>
    <script>


        $(document).on('submit', '#data_form', function(e){
            e.preventDefault();
            let form = $(this);
            loaderStart(form.find('button[type="submit"]'));
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
                    form.trigger('reset');
                    form.find('select').val(null).trigger('change');
                    loaderEnd(form.find('button[type="submit"]'));
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
                        confirmButtonText: '{{__('dash.ok')}}',
                    })
                    loaderEnd(form.find('button[type="submit"]'));
                }
            });
        })
    </script>
</html>
