<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.statically.io/gh/kswedberg/jquery-smooth-scroll/3948290d/jquery.smooth-scroll.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        integrity="sha512-TyUaMbYrKFZfQfp+9nQGOEt+vGu4nKzLk0KaV3nFifL3K8n7lzb8DayTzLOK0pNyzxGJzGRSw78e8xqJhURJ3Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" hre="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css"
        integrity="sha512-6g9IGCc67eh+xK03Z8ILcnKLbJnKBW+qpEdoUVD/4hBa2Ghiq5dQgeNOGWJfGoe9tdCRM4GpJMnsRXa2FDJp9Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
    <style type="text/css">
        .features-head {
            background-image: url('{{ asset('../../../images/server1.jpg') }}') !important;

            width: 100vw !important;
            background-repeat: no-repeat;
            opacity: 0.5 !important;
            background-color: #1e75bc !important;
            color: #fff;
            background-position: left center !important;
            background-size: cover center !important;

        }

        .features-head div p,
        .features-head div h4 {

            /* background-color: #ccc !important; */

            color: #00FF00 !important;

            font-size: 25px !important;
            opacity: 0.9 !important;
            width: 500px !important;
            text-justify: left !important;
            padding: 0.5rem !important;
            border-radius: 5px !important;




            /* Add a default img to phone codecountry */
            .iti__flag {

                background-image: url('{{ asset('../../../img/flags.png') }}') !important;
            }

            @media (-webkit-min-device-pixel-ratio: 2),
            (min-resolution: 192dpi) {
                .iti__flag {
                    background-image: url('{{ asset('../../../img/flags@2x.png') }}') !important;
                }
            }

        }

        /* model profile style */
        #image {
            display: block;
            /* This rule is very important, please don't ignore this */
            max-width: 400px;
        }


        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            /* border: 1px solid red; */
            border-radius: 50%;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">

    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">

    <!-- Vendor CSS Files -->


    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">

    <link rel="icon" type="image/png" sizes="150x150" href="{{ asset('/favicon-96x96.png') }}">

    <title>{{ config('app.name', 'Farm_mining') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/621408161ffac05b1d7b00b5/1fsf3v8q8';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>


    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-geo-alt d-flex align-items-center"><a href="mailto:contact@example.com">Leicester Square
                        West End, London WC2H 7LU UK</a></i>
                &nbsp;&nbsp;&nbsp;
                <i class="bi  bi-telephone d-flex align-items-center ms-4"><span>+44 7908 617669</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ route('user.login') }}">
                    <p><button type="button" class="btn btn-outline-success">SIGN IN</button></p>
                </a>
                <a href="{{ route('user.register') }}">
                    <p><button type="button" class="btn btn-success">SIGN UP</button></p>
                </a> &nbsp;&nbsp;

            </div>
        </div>
    </section>

    <header id="header">


        @include('layouts.nav')

    </header>
    {{-- https://p.nomics.com/cryptocurrency-bitcoin-api --}}
    {{-- API KEY:  m_ab5112c1aa9e85bb06f1aba25322bf950f91f334 --}}


    {{-- https://github.com/spatie/laravel-newsletter --}}

    {{-- https://github.com/anhskohbo/no-captcha --}}

    {{-- https://flatuicolors.com/palette/us --}}
