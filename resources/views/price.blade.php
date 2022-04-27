@extends('layouts.main')
@section('content')
    <main id="main">

        <!-- Head -->
        <section class="features-head">
            <div class="container grid">
                <div>
                    <h1 class="xl">Pricing</h1>
                    <p class="lead bottom">
                        investing packages
                    </p>
                </div>


                <div>
                    <p>Bitcoin is the world’s first advanced decentralized cash and installment organize.
                        We are Crypto Trading and Cloud Mining Company
                        With the help of our trading experts and the installation of S9 Antiminer Machines we guarantee a
                        secured and profitable investments with instant withdrawal to our investors.
                    </p>
                </div>

            </div>
        </section>



        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Plans</li>
                </ol>
                <h2>Plans</h2>

            </div>
        </section><!-- End Breadcrumbs -->



        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 box">
                        <h3>Starter Plan</h3>
                        <h4 class="plan-price">$100 - $500<span>24hour</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Minimum and maximum </li>
                            <li><i class="bx bx-check"></i>15% Profit</li>
                            <li><i class="bx bx-check"></i> Automatic withdraw</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="buy-btn">Buy Now</a>
                    </div>

                    <div class="col-lg-3 box featured">
                        <h3>Pro Plan</h3>
                        <h4 class="plan-price">$500 - $2000<span>48hour</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Minimum and maximum </li>
                            <li><i class="bx bx-check"></i>20% Profit</li>
                            <li><i class="bx bx-check"></i> Automatic withdraw</li>
                            <li><i class="bx bx-check"></i> Unlimited Investment</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="buy-btn">Buy Now</a>
                    </div>

                    <div class="col-lg-3 box featured">
                        <h3>Advance Plan</h3>
                        <h4 class="plan-price">$2000<span>Unlimited</span> <span>72hour</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Minimum and maximum</li>
                            <li><i class="bx bx-check"></i> 30% Profit</li>
                            <li><i class="bx bx-check"></i> Automatic withdraw</li>
                            <li><i class="bx bx-check"></i> Unlimited Investment</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="buy-btn">Buy Now</a>
                    </div>

                    <div class="col-lg-3 box">
                        <h3>CONTRACT PLAN</h3>
                        <h4 class="plan-price">$200<span>Unlimited</span> <span>7 Days</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Minimum and maximum</li>
                            <li><i class="bx bx-check"></i> 73.0% per lot</li>
                            <li><i class="bx bx-check"></i> Automatic withdraw</li>
                            <li><i class="bx bx-check"></i> Unlimited Investment</li>
                            <li><i class="bx bx-check"></i> Renew after six months</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="buy-btn">Buy Now</a>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->



    </main><!-- End #main -->
@endsection
