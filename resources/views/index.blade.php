@extends('layouts.main')

@section('content')
    @include('modal')

    <!-- Slider main container -->

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src="../../images/c2.jpg" alt="crypto img">

                <div class="slider-text">

                    <h1>Asset mining is a revolutionary investment community.</h1>


                </div>

            </div>
            <div class="swiper-slide"><img src="../../images/c1.jpg" alt="crypto img">

                <div class="slider-text">
                    <h1>We are a leading financial company with a
                        secure and certified status in the Uk 🇬🇧,</h1>
                </div>

            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <div class="container" style="margin: 0 auto;">


        <h2 class="font-weight-bold text-center">Cryto Mining Farm</h2>

        <div class="row mt-5">

            @foreach ($response as $currency)
                <div class="col-lg-3 col-md-4 col-sm-12 mb-3 text-center cryptos" data-aos="fade-up">

                    <div class="card crypto" style="width: 16rem">

                        <img src="{{ $currency['logo_url'] }}" alt="logo" style="width: 75px; margin:10px auto" />

                        <div class="card-body">

                            <div class="card-tile" style="margin: 5px">{{ $currency['currency'] }}</div>
                            <div class="card-text" style="margin: 5px"> Price: {{ $currency['price'] }}</div>
                            <div class="card-text" style="margin: 5px">Circulating Supply:
                                {{ $currency['circulating_supply'] }}</div>
                            <div class="card-text" style="margin: 5px">Market Cap: {{ $currency['market_cap'] }}
                            </div>
                            <div class="card-text" style="margin: 5px">Name: {{ $currency['name'] }}</div>

                            @if ($currency['7d']['price_change_pct'] > 0)
                                <div class="card-text" style="margin: 5px; color:green;font-weight:bold">Increase:
                                    {{ $currency['7d']['price_change_pct'] }}</div>
                            @else
                                <div class="card-text" style="margin: 5px; color:red; font-weight:bold">Decrease:
                                    {{ $currency['7d']['price_change_pct'] }}</div>
                            @endif

                        </div>
                    </div>

                </div>
            @endforeach


        </div>


        <style>
            .number img {

                width: 80px;
                height: 80px;

                box-shadow: 0 2px 5px 0;
                border-radius: 50%;
            }

            .number p {

                color: #bbb;
            }

        </style>

        <div class="row members">

            <div class="col-md-6 offset-md-5 col-sm-12 number" data-aos="fade-right">

                <div>
                    <img src="../../images/award/member.png" class="ml-5 member" alt="award">
                </div>

                @if ($members->count())
                    @foreach ($members as $member)
                        <div>
                            <h4 class="font-weight-bold text-capitalize text-muted">
                                <span>{{ $member->number }}</span> Members
                            </h4>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row my-5">

                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3> Crypto farm Limited is founded by a professional group of skillful cryptocurrency traders as
                            well as elite venture investors.</h3>
                        <p class="fst-italic font-weight-bold">

                            We are Crypto Trading and Cloud Mining Company
                            With the help of our trading experts and the installation of S9 Antiminer Machines we guarantee
                            a secured and profitable investments with instant withdrawal to our investors

                        </p>

                    </div>

                    <div class="col-md-6">

                        <img src="../../images/p1.jpg" class="img-fluid top-container" alt="">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary spinner-grow animated rubberBand tops" role="status"
                            id="modal-button" data-toggle="modal" data-target="#myModal">
                            <i class="fas fa-play fa-lg"></i>
                        </button>
                    </div>


                </div>

            </div>
        </section><!-- End About Section -->

        <style>
            .award img {

                width: 80px;
                height: 80px;

                box-shadow: 0 2px 5px 0;
                border-radius: 50%;
            }

            .award p {

                color: #bbb;
            }

        </style>

        <div class="row">

            <div class="col-md-4 col-sm-12 award" data-aos="fade-right">

                <div class="ml-5">
                    <img src="../../images/award/award.png" class="ml-5" alt="award">
                </div>

                <div>

                    <h4 class="font-weight-bold text-capitalize"> Best CRYPTOs Investment!</h4>

                    <p class="font-weight-bold">TradeON Summit 2020.</p>

                </div>

            </div>

            <div class="col-md-4 col-sm-12 award" data-aos="fade-right">

                <div class="ml-5">
                    <img src="../../images/award/award.png" class="ml-5" alt="award">
                </div>

                <div>


                    <h4 class="font-weight-bold text-capitalize">Best Mining Platform!</h4>

                    <p class="font-weight-bold">London Summit 2020.</p>

                </div>

            </div>

            <div class="col-md-4 col-sm-12 award" data-aos="fade-right">

                <div class="ml-5">
                    <img src="../../images/award/award.png" class="ml-5" alt="award">
                </div>

                <div>

                    <h4 class="font-weight-bold text-capitalize">Best Investment Website!</h4>

                    <p class="font-weight-bold">Forex EXPO Dubai 2020.</p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">


                <h2 class="font-weight-bold text-capitalize text-center">What Clients Say</h2>

                <div class="owl-carousel owl-theme">

                    <div class="item">

                        <div>

                            <div>

                                <h2 class="name">Smith seank</h2>

                                <div class="row">

                                    <div class="col-md-4">

                                        <img src="../../images/testimonies/person-1.jpg" alt="props.Animal" />

                                    </div>

                                    <div class="col-md-8">

                                        <p class="lead font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Reprehenderit tempore voluptas
                                            ex architecto quas esse totam sunt veniam non distinctio.</p>

                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>

                    <div class="item">
                        <div>

                            <div>
                                <h2>john doe</h2>

                                <div class="row">

                                    <div class="col-md-4">

                                        <img src="../../images/testimonies/person2.jpg" alt="Animal" />

                                    </div>

                                    <div class="col-md-8">

                                        <p class="lead font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Reprehenderit tempore voluptas
                                            ex architecto quas esse totam sunt veniam non distinctio.</p>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="item">

                        <div>

                            <div>
                                <h2>Love</h2>

                                <div class="row">

                                    <div class="col-md-4">

                                        <img src="../../images/testimonies/profile-img.png" alt="props.Animal" />

                                    </div>

                                    <div class="col-md-8">

                                        <p class="lead font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Reprehenderit tempore voluptas
                                            ex architecto quas esse totam sunt veniam non distinctio.</p>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>


        </div><!-- END COL -->


        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/" rel="noopener"
                    target="_blank"><span class="blue-text">Markets</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "US 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": true,
                    "displayMode": "compact",
                    "locale": "in"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->



    </div>

    <a href="#" id="scroll-top"><i class="fas fa-angle-double-up  animated bounce  scrollup text-white"></i></a>

@endsection
