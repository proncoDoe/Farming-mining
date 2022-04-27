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
                            <p>Reset your password</p>
                        </div>

                        <div class="card-body">



                            @if (session('fails'))
                                <div class="rounded-lg text-secondary fw-bold p-4 text-warning mb-4"
                                    style="background-color:#e02f6b">
                                    {{ session('fails') }}
                                </div>
                            @endif

                            <form action="{{ route('user.resetPassword', $reset_code) }}" method="post">

                                @csrf
                                @method('put')
                                <input type="hidden" name="reset_code" value="{{ $reset_code }}">

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address"
                                            class="form-control @error('email') border border-danger @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Enter email" autofocus>

                                        @error('email')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password"
                                            class="form-control @error('password') border border-danger @enderror"
                                            name="password" placeholder="Enter your new password" autofocus>
                                        @error('password')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirm_password"
                                            class="form-control @error('confirm_password') border border-danger @enderror"
                                            name="confirm_password" placeholder="Enter your confirm" autofocus>
                                        @error('confirm_password')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
