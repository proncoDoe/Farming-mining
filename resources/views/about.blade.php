@extends('layouts.main')
@section('content')
    <main id="main">

        <!-- Head -->
        <section class="features-head">
            <div class="container grid">
                <div>
                    <h1 class="xl">About Us</h1>
                    <h4 class="lead">
                        We make sure our website is easy,fast & secure so your investment is always available to accessed
                        and profit Guaranteed. 24/7 custmer support team. We're here to lift your financial status.
                    </h4>
                </div>
                {{-- <img src="../../images/68.jpg" alt=""> --}}
            </div>
        </section>



        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ol>
                <h2>About Us</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="../../images/cryto5.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Welcome to assetminig. Our investment platform is a product of careful preparation and fruitful
                            work of experts in the field of Bitcoin mining, highly profitable trade in cryptocurrencies and
                            online marketing. Using modern methods of doing business and a personal approach to each client,
                            we offer a unique investment model to people who want to use Bitcoin not only as a method of
                            payment, but also as a reliable source of stable income. With the help of our expert and modern
                            mining equipment to keep a stable income for all of our investors..</h3>
                        {{-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                        <ul>
                            <li><i class="bi bi-check-circle"></i> We offer unlimited investment plans.
                            </li>
                            <li><i class="bi bi-check-circle"></i>It's takes view minutes to access your withdrawals and
                                have your earnings paid direct to your wallet
                                velit.</li>
                            <li><i class="bi bi-check-circle"></i>To grow your capitals you need to make a deposit in any of
                                the plans.</li>
                        </ul>
                        <p>
                            Profits are been generated through the help of our experts, and modern mining machines.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row no-gutters text-center">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="1659" data-purecounter-duration="1"
                                class="purecounter"></span>

                            <h3 class="text-center pt-4"><strong class="text-center font-weight-light">Running Days</strong>
                            </h3>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="45590" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h3 class="text-center pt-4 font-weight-light"><strong>Total Accounts</strong></h3>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            $<span data-purecounter-start="0" data-purecounter-end=" 1243904.35"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <h3 class="text-center pt-4 font-weight-light"><strong>Total Deposited</strong></h3>



                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            $<span data-purecounter-start="0" data-purecounter-end="891290.04" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h3 class="text-center pt-4 font-weight-light"><strong>Total withdraw</strong></h3>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title">
                    <!--          <h2>Testimonials</h2>-->
                    {{-- <p>The Benin Chamber of Commerce was incorporated on 20th October 1965, in Nigeria as a non-profit
                        making organization, limited by guarantee (without a share capital) with company registration number
                        RC 4602/T.</p> --}}
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>The Best Way To Earning</h3>
                            <!--              <h4>Store Owner</h4>-->
                            <p class="font-weight-bold">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Automatically optimizes cost basis accounting methods and enables you to tax-loss harvest
                                your portfolio to save thousands per year. Additional visibility into tax lots helps you
                                make better trades.
                                The income is settled on the same day, and the withdrawal is received in real time
                                Become a mine owner for free without any fees
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>START MINIG </h3>
                            <!--              <h4>Freelancer</h4>-->
                            <p class="font-weight-bold">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                With expert management, technical operative team, constantly expanding with eco-friendly
                                energy sources, investment in ecosystem and research on technology; company collective
                                development as well individual and social benefits. % First register an account with
                                platform and fill in all the necessary needed %secondly choose the minig plan which you want
                                to invest . $fund your wallet with the amount which you need to start with or click on
                                deposit it will direct you to our supported wallets exchanges to buy coin. % withdrawals are
                                instant(automated)

                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->
        </section><!-- End Clients Section -->
    </main><!-- End #main -->
@endsection
