@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- Head -->
        <section class="features-head">
            <div class="container grid">
                <div>
                    <h1 class="xl">Contact</h1>
                    <h4 class="lead">
                        we are dedicated to creating a community of financially liberated people. through our financial,
                        capital and asset based management. Our financial activities (SIC) includes. Activities of financial
                        services holding companies, Administrations of financial markets, Security and commodity contracts
                        dealing activities, Fund management activities.
                    </h4>
                </div>
                <div>
                    <a class="float-right mr-5 animated rubberBand wahatsapp" data-toggle='tooltip' data-placement='right'
                        title='24/7 Live Chat' href="https://api.whatsapp.com/send/?phone=447908617669" target="_blank"><i
                            class="fab fa-whatsapp fa-7x" style="color: #25d366;"></i></a>
                </div>
            </div>
        </section>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>Contact</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p> New york, Block 7LU Ma
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 7908 617669</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sng!4v1651072238455!5m2!1sen!2sng"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">

                        <form action="{{ route('contact') }}" method="post" role="form">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name"
                                        class="form-control @error('name') border border-danger @enderror" id="name"
                                        value="{{ old('name') }}" placeholder="Name">

                                    @error('email')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>


                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control @error('email') border border-danger @enderror"
                                        name="email" id="email" value="{{ old('email') }}" placeholder="Email">

                                    @error('email')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group mt-3">
                                <textarea class="form-control @error('message') border border-danger @enderror" name="message" rows="5"
                                    value="{{ old('message') }}" placeholder="Message"></textarea>

                                @error('message')
                                    message <div class="text-danger mt-2 text-sm">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-block" value="Register">
                                        Contact
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
