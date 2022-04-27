@extends('layouts.main')

@section('content')
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


        {{-- <div id="breadcrumb">

    <div class="container">

            <ol class="breadcrumb">

                <li class="active">Dashboard</li>

            </ol>

    </div>

    </div> --}}


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


                <div class="col-md-8 col-sm-12">

                    <!-- Over view -->

                    <div class="card">

                        <div class="card-body my-5">

                            <form action="{{ route('user.helpdesk') }}" method="post" role="form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name"
                                            class="form-control @error('name') border border-danger @enderror" id="name"
                                            value="{{ old('name') }}" placeholder="Your Name">

                                        @error('email')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email"
                                            class="form-control @error('email') border border-danger @enderror" name="email"
                                            id="email" value="{{ old('email') }}" placeholder="Your Email">

                                        @error('email')
                                            <div class="text-danger mt-2 text-sm">

                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">
                                    <input type="text" name="title"
                                        class="form-control @error('title') border border-danger @enderror" id="title"
                                        value="{{ old('title') }}" placeholder="Your Title">

                                    @error('title')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group mt-3">
                                    <textarea class="form-control @error('content') border border-danger @enderror" name="content" rows="5"
                                        value="{{ old('content') }}" placeholder="Content"></textarea>

                                    @error('content')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-outline-primary btn-block" value="Register">
                                            Submit
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
@endsection
