@extends('layouts.main')

@section('content')
    <header>
        <div id="header">

            {{-- <div class="container">


            <div class="row">

                <div class="col-7 ml-auto">

                    <h1> <i class="fas fa-cog"></i> Manage Your Content</h1>

                </div>


            </div>



        </div> --}}




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


                <div class="col-md-9">

                    <div class="card cards">


                        <span class="main-bottom-left">

                            <button type="button" class="btn btn-default position-relative">

                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white"
                                    style="color:#444">
                                  Earning
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>

                        </span>

                        <span class="main-bottom">

                            <button type="button" class="btn btn-default position-relative">

                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    Total Earning
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>




                        </span>




                        <div class="card-body">


                            <div class="row mt-3">

                                <div class="col-md-4">

                                    <div class="card card-header earning">

                                        @if (!auth()->user()->amount)
                                            <div class="mb-4">

                                                <h2></i>&nbsp;<span class="badge badge-info"
                                                        style="float: right; clear:both">USD
                                                        0.00</span>
                                                </h2>


                                            </div>
                                        @else
                                            @if ($total = auth()->user()->amount - auth()->user()->chose_amount + auth()->user()->interest)
                                                <span>

                                                    <span><i class="fas fa-wallet fa-4x"></i></span>

                                                    <span>&nbsp;<span class="badge badge-info fw-bold lead"
                                                            style="float: right; clear:both">USD

                                                            {{ $total }}

                                                            <br />
                                                            <h5>Total Earning</h5>
                                                        </span>
                                                        </h2>
                                            @endif
                                        @endif



                                        </span>




                                    </div>



                                </div>


                                <div class="col-md-4">

                                    <div class="card card-header earning">

                                        @if (!auth()->user()->amount)
                                            <div class="mb-4">

                                                <h2></i>&nbsp;<span class="badge badge-info"
                                                        style="float: right; clear:both">USD
                                                        0.00</span>
                                                </h2>


                                            </div>
                                        @else
                                            @if ($total = auth()->user()->interest)
                                                <span>

                                                    <span><i class="fas fa-wallet fa-4x"></i></span>

                                                    <span>&nbsp;<span class="badge badge-info fw-bold lead"
                                                            style="float: right; clear:both">USD

                                                            {{ $total }}

                                                            <br />
                                                            <h5>Interest earnings</h5>
                                                        </span>
                                                        </h2>
                                            @endif
                                        @endif

                                        </span>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="card card-header earning">

                                        @if (!auth()->user()->amount)
                                            <div class="mb-4">

                                                <h2></i>&nbsp;<span class="badge badge-info"
                                                        style="float: right; clear:both">USD
                                                        0.00</span>
                                                </h2>


                                            </div>
                                        @else
                                            @if ($total = auth()->user()->Referral_earnings)
                                                <span>

                                                    <span><i class="fas fa-hand-holding-usd fa-4x"></i></span>

                                                    <span>&nbsp;<span class="badge badge-info fw-bold lead"
                                                            style="float: right; clear:both">USD

                                                            {{ $total }}

                                                            <br />
                                                            <h5>Referral earnings</h5>
                                                        </span>
                                                        </h2>
                                            @endif
                                        @endif

                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <br>

                    <div class="card">

                        <div class="card-body">

                            <div class="row mt-3">


                                <div class="col-md-6 offset-md-3 offset-sm-0">

                                    {{-- image --}}


                                    @if (!auth()->user()->amount && auth()->user()->interest && auth()->user()->Referral_earnings)
                                        <div class="mb-4">


                                            <img src="../../../../images/no-search-results.png" class="img-responsive"
                                                alt="search">

                                            <h4>No transactions can be found</h4>
                                        </div>
                                    @else
                                        <img src="../../../../images/ppc.png" class="img-responsive" alt="search">
                                    @endif

                                    <h4>

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
