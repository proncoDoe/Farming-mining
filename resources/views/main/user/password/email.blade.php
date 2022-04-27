@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li>Sign up</li>
                </ol>

            </div>
        </section><!-- End Breadcrumbs -->


        <div class="container my-5">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg p-3 bg-light mb-5 rounded containers">
                        <div class="card-header text-center">
                            <p>Forgot password? Let us know by sending your
                                email address and we will email you
                                by sending you a reset password link that
                                will allow you to choose a new password</p>
                        </div>

                        <div class="card-body">



                            @if (session('message'))
                                <div class="rounded-lg text-success fw-bold p-4 text-warning mb-4" style="color: #5cb85c">
                                    {{ session('message') }}
                                </div>
                            @endif


                            @if (session('fails'))
                                <div class="rounded-lg text-secondary fw-bold p-4 text-warning mb-4"
                                    style="background-color:#e02f6b">
                                    {{ session('fails') }}
                                </div>
                            @endif

                            <form action="{{ route('user.email') }}" method="post">

                                @csrf

                                <div class="row">

                                    @if (session('status'))
                                        <div class="alert alert-ssuccess">
                                            {{ session('status') }}
                                        </div>
                                    @endif

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

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-outline-primary btn-block">
                                                password reset link
                                            </button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
