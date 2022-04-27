@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Sign up</li>
                </ol>

            </div>
        </section><!-- End Breadcrumbs -->


        <div class="container my-5">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg p-3 bg-light mb-5 rounded containers">

                        <div class="card-header text-center">
                            <h2>Sign in to Farm mining</h2>
                        </div>

                        <div class="card-body">

                            @if (session('fails'))
                                <div class="rounded-lg text-secondary fw-bold p-4 text-warning mb-4"
                                    style="background-color:#e02f6b">
                                    {{ session('fails') }}
                                </div>
                            @endif

                            <form action="{{ route('user.check') }}" method="post">

                                @csrf

                                <div class="row">
                                    <div class="form-group row email">
                                        <div class="col-md-10">
                                            <input id="email" type="email" name="email"
                                                class="form-control @error('email') border border-danger @enderror"
                                                value="{{ old('email') }}" placeholder="Email" autocomplete="off">
                                            @error('email')
                                                <div class="text-danger mt-2 text-sm">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>

                                        <span> <i class="bi bi-envelope fa-lg"></i></span>

                                    </div>

                                    <div class="form-group row fontpassword">

                                        <div class="col-md-10">
                                            <input id="showPassword2" type="password" name="password" placeholder="password"
                                                class="form-control @error('password') border border-danger @enderror">

                                        </div>

                                        <span class="eye" onclick="showFunction2()">
                                            <i id="hide3" class="bi bi-eye fa-lg "></i>
                                            <i id="hide4" class="bi bi-eye-slash fa-lg"></i>
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

                                    <div class="form-group mt-3">

                                        {!! NoCaptcha::renderJs('en', false, 'recaptchaCallback') !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block" style="color:#e02f6b">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" name="Register" class="btn btn-outline-primary btn-block"
                                                value="Register">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>

                            </form>

                            <div class="d-flex justify-content-between">

                                <a class="btn btn-link text-warning" href="{{ route('user.register') }}">
                                    Sign Up?
                                </a>

                                <a href="{{ route('user.passwordemail') }}">Forgot Password?</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main>

    <script>
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>
@endsection
