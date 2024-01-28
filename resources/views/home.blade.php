<!DOCTYPE html>
<html lang="en" dir="rtl">
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
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} " />
        {{-- <link
            rel="shortcut icon"
            href="images/logo2.jpeg"
            type="image/x-icon" /> --}}

        <title> </title>
    </head>
    <body>
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
                        <a href="">عربــي</a>
                        <a href="">frensh</a>
                        <a href="">english</a>
                    </div>
                    <div class="auth">
                        <a href="">Log In</a>
                        <a href="">Sign Up</a>
                    </div>
                    <div class="serch">
                        <img src="{{ asset('assets/images/serch.svg') }} " alt="" />
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
                        <h1>Canturk Hotel Resrvation</h1>
                        <p>Request your reservation now</p>
                    </div>
                    <form action="">
                        <div class="frist-section">
                            <div class="input-field">
                                <select>
                                    <option value="">Choose Location</option>
                                    <option value="1">ISTANBUL</option>
                                    <option value="2">ANTALYA</option>
                                    <option value="3">TRABZON</option>
                                </select>
                            </div>
                            <div class="bar"></div>
                            <div class="full-name">
                                <input
                                    placeholder="Choose Hotel"
                                    id="first_name"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="bar"></div>

                            <div>
                                <input
                                    type="text"
                                    placeholder="check in"
                                    class="datepicker" />
                            </div>
                            <div class="bar"></div>

                            <div>
                                <input
                                    type="text"
                                    placeholder="check out"
                                    class="datepicker" />
                            </div>
                        </div>
                        <div class="secode-section">
                            <div class="">
                                <label for="first_name">Phone</label>
                                <input
                                    placeholder="+213 560 40 32 21"
                                    id="first_name"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="">
                                <label for="first_name">E-mail</label>
                                <input
                                    placeholder="Info@Canturcktourousim.com"
                                    id="first_name"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last">
                                <label for="people">People</label>
                                <input
                                    placeholder="number of persons"
                                    id="people"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="last">
                                <label for="room">Room</label>
                                <input
                                    placeholder="number of rome"
                                    id="room"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <div id="persons_section"></div>
                        <div class="last-section">
                            <div>They need a transfewr from aitport ?</div>

                            <div class="bar"></div>

                            <div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap"
                                            name="group1"
                                            type="radio" />
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input
                                            class="with-gap"
                                            name="group1"
                                            type="radio" />
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                            <div class="bar"></div>

                            <div class="">
                                <input
                                    placeholder="Flight No"
                                    id="first_name"
                                    type="text"
                                    class="validate" />
                            </div>
                            <div class="bar"></div>

                            <div class="">
                                <input
                                    placeholder="Arrival Time"
                                    id="first_name"
                                    type="text"
                                    class="validate" />
                            </div>
                        </div>
                        <a class="btn-request"> Request </a>
                    </form>
                </div>
            </section>
            <section class="subscribe">
                <div class="container">
                    <div>Subsctibe and be notifed about new locations</div>
                    <div class="input-field inline email">
                        <input
                            id="email_inline"
                            type="email"
                            placeholder="Your Email"
                            class="validate" />
                        <a href="">
                            <img
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
                        <h4>CanTurk Tourism</h4>
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
                            <h4>Contact</h4>
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

</html>
