@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- Head -->
        <section class="features-head">
            <div class="container grid">
                <div>
                    <h1 class="xl">F.A.Q</h1>
                    <h4 class="lead">
                        If you need advice or technical assistance, do not hesitate to
                        contact our specialists.
                    </h4>
                </div>
                {{-- <img src="../../images/crypto6.jpg" alt=""> --}}
            </div>
        </section>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>FAQ</li>
                </ol>

            </div>
        </section><!-- End Breadcrumbs -->

        <div class="main-grid">

            <div class="box-2">


                <div class="main-accordion">
                    <div class="containa">
                        <div class="inner-accordion">

                            <div class="faq active">
                                <h3 class="faq-title">
                                    How can I withdraw funds?
                                </h3>

                                <p class="faq-text">
                                    Login to your account using your email and password and check the Withdraw section.
                                </p>

                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="accordion-item">

                                <a class="detail-link">What if I can't log into my account because I forgot my
                                    password?</a>


                                <div class="content">

                                    <p> Click password link, type
                                        your e-mail and
                                        you'll receive your
                                        account information.</p>


                                </div>

                            </div>


                            <div class="accordion-item">

                                <a class="detail-link">After I make a withdrawal request, when will the funds be
                                    available on my ecurrency account?</a>


                                <div class="content">

                                    <p>Funds are usually available instantly.</p>


                                </div>

                            </div>


                            <div class="accordion-item">

                                <a class="detail-link">Is there limit on deposit per plan?</a>


                                <div class="content">

                                    <p>Minimun investment in Starter plan is 3 times while other plans are unlimited.</p>


                                </div>

                            </div>


                        </div>


                    </div>

                </div>



            </div>


            <div class="box-2">

                <img src="images/17973872.svg" class="animated bounce" alt="">

            </div>


        </div>

    </main>
@endsection
