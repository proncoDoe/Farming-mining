<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">




    <!-- Vendor CSS Files -->


    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">


    <title>Document</title>


</head>



<body>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Sign up</li>
                </ol>

            </div>
        </section><!-- End Breadcrumbs -->


        <div class="container my-5">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg p-3 bg-light mb-5 rounded containers">
                        <div class="card-header text-center">
                            <h2>Admin Login</h2>
                        </div>

                        <div class="card-body">


                            @if (session('fails'))
                                <div class="rounded-lg text-secondary fw-bold p-4 text-warning mb-4"
                                    style="background-color:#e02f6b">
                                    {{ session('fails') }}
                                </div>
                            @endif

                            <form action="{{ route('admin.login') }}" method="post">

                                @csrf

                                <div class="row">

                                    <div class="form-group row email">


                                        <div class="col-md-10 mb-2">
                                            <input id="email" type="email" name="email"
                                                class="form-control @error('email') border border-danger @enderror"
                                                value="{{ old('email') }}" placeholder="Email" autocomplete="off">


                                            @error('email')
                                                <div class="text-danger mt-2 text-sm">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>

                                        <i class="bi bi-envelope fa-lg"></i>
                                    </div>


                                    <div class="form-group row fontpassword">

                                        <div class="col-md-10 mb-2">
                                            <input id="showPassword2" type="password" name="password"
                                                placeholder="password"
                                                class="form-control @error('password') border border-danger @enderror">

                                        </div>

                                        <span class="eye" onclick="showFunction2()">
                                            <i id="hide3" class="bi bi-eye-slash fa-lg"></i>
                                            <i id="hide4" class="bi bi-eye fa-lg"></i>
                                        </span>

                                        @error('password')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 col-form-label form-control-check">

                                        <div class="row">

                                            <div class="col-md-1">

                                                <input type="checkbox" name="remember" id="remember"
                                                    class="mr-1 input-check">
                                            </div>

                                            <div class="col-md-11">

                                                <p> Keep me In</p>

                                            </div>

                                        </div>


                                        </p>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" name="Register"
                                                class="btn btn-outline-primary btn-block" value="Register">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>


                                    <div class="row">



                                        <div class="col-md-7 clear-fix">
                                            <a class="btn btn-link float-right"
                                                href="forgot_password.php?forget=<?php echo uniqid(true); ?>">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>

                            </form>
                        </div>

                        <?php if(isset($_SESSION['status'])): ?>
                        <div class=" alert alert-danger font-weight-bold alert-dismissible fade show" role="alert">
                            <strong><?php echo $_SESSION['alert-class']; ?>!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php

                            echo $_SESSION['status'];
                            unset($_SESSION['status']);
                            unset($_SESSION['alert-class']);

                            ?>

                        </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


    </main>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"
        integrity="sha512-iqhWkvLOXVDz+Lr//ZryEKNvZ5pmgdKEe58Wh/VwfTGwTku0MKbuLhjJ1zUAJu8iSbOqfLcXrrxJ61+27THi2Q=="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Vendor JS Files -->

    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/tootip.js') }}"></script>

    <script src="{{ asset('js/scroll-top.js') }}"></script>

    <script src="{{ asset('js/smooth-scrolling.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
</body>

</html>
