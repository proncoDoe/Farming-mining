@extends('layouts.main')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Privacy</li>
                </ol>
                <h2>Privacy</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="../../images/privacy2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">

                        <ul>
                            <li><i class="bi bi-check-circle"></i> No double creation account.
                            </li>
                            <li><i class="bi bi-check-circle"></i>No exchange of document like transaction hash
                            </li>
                            <li><i class="bi bi-check-circle"></i>You are adviced to register with your crypto wallet.</li>

                            <li><i class="bi bi-check-circle"></i>kidly any issues Kindly contact the customer support
                                service.
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


    </main><!-- End #main -->
@endsection
