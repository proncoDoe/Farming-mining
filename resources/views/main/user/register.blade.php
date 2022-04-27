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
                            <h2>Create your account</h2>
                        </div>

                        <div class="card-body">

                            {{-- @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif --}}

                            <form action="{{ route('user.register') }}" method="post">

                                @csrf

                                <div class="row">

                                    <div class="form-group col-md-5">

                                        <input id="fName" type="text" name="fName"
                                            class="form-control @error('fName') border border-danger @enderror"
                                            value="{{ old('fName') }}" placeholder="First name">


                                        @error('fName')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group col-md-5">
                                        <input id="lName" type="text" name="lName"
                                            class="form-control @error('lName') border border-danger @enderror"
                                            value="{{ old('lName') }}" placeholder="Last name">

                                        @error('lName')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group col-md-2">

                                        <i class="bi bi-person-plus fa-lg"></i>
                                    </div>

                                </div>

                                <div class="form-group row email">

                                    <div class="col-md-10">
                                        <input id="username" type="text" name="username"
                                            class="form-control @error('username') border border-danger @enderror"
                                            value="{{ old('username') }}" placeholder="username">

                                        @error('username')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>


                                    <span> <i class="bi bi-envelope fa-lg"></i></span>

                                </div>

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


                                <div class="form-group row fontuser">

                                    <div class="col-md-10">
                                        <input id="phone" type="text" name="phone"
                                            class=" form-control @error('phone') border border-danger @enderror"
                                            value="{{ old('phone') }}" placeholder="Phone">

                                        <span id="valid-msg" class="hide text-success">
                                            {{-- ✓Valid --}} </span>
                                        <span id="error-msg" class="hide text-danger"></span>

                                        @error('phone')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <span> <i class="text-white fa-solid fa-phone-flip fa-lg"></i></span>

                                </div>

                                <div class="row my-3">

                                    <div class="col-md-4">


                                        <select name="currency"
                                            class="form-select subject bg-outline-primary text-white form-control show-tick @error('currency') border border-danger @enderror"
                                            value="{{ old('currency') }}" data-live-search="true">
                                            {{-- <option value="">Select Currency <option> --}}
                                            <option value="btc" data-icon="../../images/icon/btc.png">BTC</option>
                                            <option value="eth" data-icon="../../images/icon/eth.png">ETH</option>
                                            <option value="bch" data-icon="../../images/icon/bch.png">BCH</option>
                                            <option value="doge" data-icon="../../images/icon/doge.png">DOGE</option>
                                            <option value="shiba" data-icon="../../images/icon/shiba-nu.png">SHIBA</option>
                                            <option value="litecoin" data-icon="../../images/icon/lite.png">LITECOIN
                                            </option>
                                        </select>

                                        @error('currency')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <div class="col-md-6">
                                        <input id="wallet_address" type="text" name="wallet_address"
                                            class="form-control @error('wallet_address') border border-danger @enderror"
                                            value="{{ old('wallet_address') }}" placeholder="Wallet address">


                                        @error('wallet_address')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-1">

                                        <i class="fas fa-wallet fa-lg"></i>

                                    </div>

                                </div>

                                <div class="row my-3">

                                    <div class="col-md-4">

                                        <select name="select_question1" id="select_question1"
                                            class="form-select  subject bg-light text-white form-control show-tick @error('select_question1') border border-danger @enderror">
                                            <option value="select_question">Select question</option>
                                            <option value="select_question">Secret question </option>
                                            <option value="secret_answer">Secret answer</option>


                                        </select>

                                        @error('select_question1')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <textarea id="answer1" type="text" name="answer1"
                                            class="form-control @error('answer1') border border-danger @enderror"></textarea>

                                        @error('answer1')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-2">

                                        <i class="fas fa-key fa-lg"></i>
                                    </div>

                                </div>

                                <div class="row my-3">

                                    <div class="col-md-4">

                                        <select name="select_question2" id="select_question2"
                                            class="form-select  subject bg-light text-white form-control show-tick  @error('select_question2') border border-danger @enderror">

                                            <option value="secret_answer">Select question</option>
                                            <option value="secret_answer">Secret answer</option>
                                            <option value="select_question">Secret question </option>

                                        </select>


                                        @error('select_question2')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <div class="col-md-6">
                                        <textarea id="answer2" type="text" name="answer2"
                                            class="form-control  @error('answer2') border border-danger @enderror"></textarea>

                                        @error('answer2')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-2">

                                        <i class="fas fa-key fa-lg"></i>
                                    </div>

                                </div>


                                <div class="form-group row fontuser">

                                    <div class="col-md-10">

                                        <select name="country" id="country"
                                            class="form-select  subject bg-outline-primary text-white form-control show-tick @error('country') border border-danger @enderror"
                                            data-live-search="true">

                                            <option value="">Select country</option>

                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}"> {{ $country->name }}</option>
                                            @endforeach

                                        </select>

                                        @error('country')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <span> <i class="fas fa-globe fa-lg fa-lg" style="color:#f7f7f7"></i></span>

                                </div>



                                <div class="form-group row fontuser">

                                    <div class="col-md-10">

                                        <select name="state" id="state"
                                            class="form-select subject bg-outline-primary text-white form-control show-tick @error('state') border border-danger @enderror"
                                            data-live-search="true">

                                            <option value="">Select state</option>

                                            @foreach ($states as $state)
                                                <option value="{{ $state->name }}"> {{ $state->name }}</option>
                                            @endforeach


                                        </select>


                                        @error('state')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror

                                    </div>

                                    <span> <i class="fas fa-globe fa-lg fa-lg" style="color:#f7f7f7"></i></span>

                                </div>


                                <div cass="form-group row">

                                    <div class="col-md-10 col-sm-12 mb-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Refferal code optional
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <input type="text" name="Reffered_by_name" class="form-control mx-2"
                                                            placeholder="Reffered name">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


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


                                <div class="form-group row fontpassword">

                                    <div class="col-md-10">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="Confirm password" />
                                    </div>
                                    <span class="eye" onclick="showFunction3()">
                                        <i id="hide5" class="bi bi-eye fa-lg"></i>
                                        <i id="hide6" class="bi bi-eye-slash fa-lg"></i>
                                    </span>
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
                                    <div class="col-md-10 text-center">
                                        <button type="submit" name="Register" class="btn btn-outline-primary btn-block"
                                            value="Register">

                                            Sign up
                                        </button>
                                    </div>
                                </div>


                                <div class="col-md-12 col-form-label form-control-check">

                                    <div class="row">

                                        <div class="col-md-1">

                                            <input type="checkbox" name="remember" id="remember" class="mr-1 input-check">
                                        </div>

                                        <div class="col-md-11">

                                            <p>I certify that I am 18 years of age or older, and agree to the User Agreement
                                                and Privacy Policy.</p>

                                        </div>

                                    </div>


                                    </p>
                                </div>


                                <a class="btn btn-link text-warning" href="{{ route('user.login') }}">
                                    <small class="text-primary">Already have an </small> Signin?
                                </a>

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


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
                $(".subject").selectpicker();
            });

        });
    </script>


    {{-- <script>

    $(document).ready(function(){

    $("#country").on('change', function(){

        // alert("ok");

        let country_id = this.val();
        $.get('/get_States?country='+country_id, function(data){

            console.log(data);
            $("#state").html(data);

        });

    });

    })
    </script> --}}

    <script src="{{ asset('js/custom-selectbox.js') }}"></script>

    <script>
        $('.example').IconSelectBox(true); // isImg: boolean
        $('.example2').IconSelectBox(false); // isImg: boolean
    </script>


    <script>
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>
@endsection
