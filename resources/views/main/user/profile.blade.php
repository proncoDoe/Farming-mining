@extends('layouts.main')


@section('content')
    @include('layouts.modal_profile')
    <header>

        <div id="header">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class=""></div>
                <div class="tradingview-widget-copyright"><a><span class="blue-text">Markets</span></a> Asic mining</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            },
                            {
                                "description": "DOGE",
                                "proName": "BINANCE:DOGEUSDT"
                            },
                            {
                                "description": "LITECOIN",
                                "proName": "BINANCE:LTCUSDT"
                            },
                            {
                                "description": "DOT",
                                "proName": "BINANCE:DOTUSDT"
                            },
                            {
                                "description": "SHABA NU",
                                "proName": "BINANCE:SHIBUSDT"
                            },
                            {
                                "description": "ATOM",
                                "proName": "BINANCE:ATOMUSDT"
                            },
                            {
                                "description": "XRP",
                                "proName": "BINANCE:XRPUSDT"
                            },
                            {
                                "description": "GALA",
                                "proName": "BINANCE:GALAUSDT"
                            }
                        ],
                        "showSymbolLogo": true,
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->



        </div>


    </header>


    <main>

        <div class="container-fluid my-4">

            <div class="row">

                <div class="col-md-3">

                    <div class="list-group">

                        <a href="{{ route('user.home') }}" class="list-group-item active .main-color-bg"><i
                                class="fas fa-cog"></i>
                            Dashboard</a>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-hand-holding-usd"></i>&nbsp; Deposites
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <a href="{{ route('user.deposit') }}" class="list-group-item">Deposits fund<span
                                                class="badge badge-primary" style="float: right; clear:both"><i
                                                    class="bi bi-cash-coin"></i></span></a>
                                        <a href="{{ route('user.view_deposit') }}" class="list-group-item">View
                                            deposits<span class="badge badge-primary" style="float: right; clear:both"><i
                                                    class="bi bi-cash-coin"></i></span></a>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Withdraws
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <a href="{{ route('user.withdraw') }}" class="list-group-item">Withdraws fund<span
                                                class="badge badge-primary" style="float: right; clear:both"><i
                                                    class="bi bi-cash-coin"></i></span></a>
                                        <a href="{{ route('user.view_withdraw') }}" class="list-group-item">View
                                            withdraws<span class="badge badge-primary" style="float: right; clear:both"><i
                                                    class="bi bi-cash-coin"></i></span></a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <br>
                    <div class="card">
                        <a href="{{ route('user.earning') }}" class="list-group-item">Earnings<span
                                class="badge badge-primary" style="float: right; clear:both"><i
                                    class="fas fa-dollar-sign"></i></span></a>
                        <a href="{{ route('user.helpdesk') }}" class="list-group-item">Help desk<span
                                class="badge badge-primary" style="float: right; clear:both"><i
                                    class="fas fa-comment-alt"></i></span></a>

                        <a href="{{ route('user.referal') }}" class="list-group-item">Referals<span
                                class="badge badge-primary" style="float: right; clear:both"><i
                                    class="fas fa-users"></i></span></a>
                        <a href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout <i
                                class="fas fa-sign-out-alt text-light"></i></a>
                        <form action="{{ route('user.logout') }}" id="logout-form" method="post">
                            @csrf</form>

                    </div>


                </div>

                <div class="col-md-3">

                    <!-- Over view -->


                    <div class="card" style="border-top: 8px solid #0275d8">


                        <div class="card-body my-5">

                            <form action="{{ route('user.profile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')


                                <div class="form-group mb-3" id="imagemi">
                                    <label>


                                        @if (asset('uploads/profile/' . $user->profile_image))
                                            <img class="getpic"
                                                src="{{ asset('uploads/profile/' . $user->profile_image) }}">
                                            <input type="file" name="profile_image" class="imageUpload"
                                                accept=".png,.jpg,.jpeg" style="display: none;" id="profileimage"
                                                onchange="imagepreview(this)">
                                        @else
                                            <img class="getpic" src="../../images/default.gif">
                                            <input type="file" name="profile_image" class="imageUpload"
                                                accept=".png,.jpg,.jpeg" style="display: none;" id="profileimage"
                                                onchange="imagepreview(this)">
                                        @endif

                                        <input type="hidden" name="base64image" name="base64image" id="base64image">
                                    </label>
                                </div>
                                <div class="avatar-preview container2">
                                    @php
                                        if (!empty($image->image) && $image->image != '' && file_exists(public_path('images/' . $image->image))) {
                                            $image = $image->image;
                                        } else {
                                            $image = 'default.png';
                                        }
                                        $url = url('public/images/' . $image);
                                        $imgs = "background-image:url($url)";

                                    @endphp
                                    <div id="imagePreview" style="{{ $imgs }};">
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>


                <div class="col-md-5">

                    <div class="card">


                        <div class="card-body">

                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="fName"
                                        class="form-control @error('fName') border border-danger @enderror"
                                        value="{{ old('fName') ? old('fName') : $user->fName }}"
                                        placeholder="First name">


                                    @error('fName')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                                <div class="col form-group">
                                    <input type="text" name="lName"
                                        class="form-control @error('lName') border border-danger @enderror"
                                        value="{{ old('lName') ? old('lName') : $user->lName }}" placeholder="Last name">

                                    @error('lName')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col form-group">
                                <input type="text" name="username" readonly
                                    class="form-control @error('username') border border-danger @enderror"
                                    value="{{ old('username') ? old('username') : $user->username }}"
                                    placeholder="Username">

                                @error('username')
                                    <div class="text-danger mt-2 text-sm">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>



                            <div class="col form-group">
                                <input type="text" name="email" readonly
                                    class="form-control @error('email') border border-danger @enderror"
                                    value="{{ old('email') ? old('email') : $user->email }}" placeholder="Email">

                                @error('email')
                                    <div class="text-danger mt-2 text-sm">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="profile" class="btn btn-outline-primary btn-block"
                                        value="Register">
                                        Update Profile
                                    </button>
                                </div>
                            </div>

                            </form>

                        </div>

                    </div>

                </div>




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

    <script>
        function imagepreview(input) {
            const file = $('[type=file]').get(0).files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = () => {
                    $('.getpic').attr('src', reader.result);
                    console.log(reader.result);
                };

                reader.readAsDataURL(file);
            }
        }


        $(document).ready(function() {
            $("#submitme").click(function() {
                var newp = $("#profileimage").val();
                if (newp == "") {
                    $(".getpic").css({
                        "box-shadow": "0px -3px 6px 2px rgba(108, 4, 4, 0.2)",
                        "border": "5px solid #b91717"
                    });
                    console.log("Image is empty");
                } else {
                    console.log("Image good to go");
                }
                console.log(newp);
            });
        });
    </script>
@endsection
