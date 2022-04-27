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


        <div class="container my-4">

            <div class="row">

                <div class="col-md-3 col-sm-12 col-xs-12">

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

                        <a href="{{ route('user.referal') }}" class="list-group-item">Referal<span
                                class="badge badge-primary" style="float: right; clear:both"><i
                                    class="fas fa-users"></i></span></a>

                        <a href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout <i
                                class="fas fa-sign-out-alt text-light"></i></a>
                        <form action="{{ route('user.logout') }}" id="logout-form" method="post">
                            @csrf</form>

                    </div>

                </div>


                <div class="col-md-9 col-sm-12 col-xs-12">

                    <!-- Over view -->


                    <div class="card">

                        <div class="card-header main-color-bg">

                            <h3 class="card-title text-light"> <span> Welcome, {{ Auth::guard('web')->user()->fName }}
                                </span>
                                <span>{{ auth()->user()->lName }}</span>
                            </h3>

                        </div>

                        <div class="card-body my-5">

                            <div class="  row">

                                <div class="col-md-5 mb-5">

                                    {{-- <div class="card card-header">

                            <h2></i>&nbsp;<span class="badge badge-info" style="float: right; clear:both">1000</span></h2>

                            <h4> <i class="bi bi-people"></i>&nbsp;Users</h4>

                        </div> --}}


                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">

                                                {{-- <h2></i>&nbsp;<span class="badge badge-info"
                                                        style="float: right; clear:both">100</span></h2> --}}


                                                @if (!auth()->user()->chose_amount)
                                                    <h4> <i class="fas fa-hand-holding-usd"></i>&nbsp;USD 0.00
                                                    </h4>
                                                @else
                                                    <h4> <i
                                                            class="fas fa-hand-holding-usd"></i>&nbsp;{{ auth()->user()->chose_amount }}
                                                    </h4>
                                                @endif

                                                <h4> Withdrawable</h4>
                                            </div>
                                            <div class="flip-card-back">
                                                <h1>{{ Auth::guard('web')->user()->fName }}
                                                    </span>
                                                    <span>{{ auth()->user()->lName }}</span>
                                                </h1>
                                                <p>{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-md-5 mb-5">

                                    {{-- <div class="card card-header">

                            <h2></i>&nbsp;<span class="badge badge-info" style="float: right; clear:both">77</span></h2>

                            <h4> <i class="bi bi-pencil-fill"></i>&nbsp;Posts</h4>

                        </div> --}}

                                    <div class="flip-card">
                                        <div class="flip-card-inner ">
                                            <div class="flip-card-front">

                                                {{-- <h2></i>&nbsp;<span class="badge badge-info"
                                                        style="float: right; clear:both">77</span></h2> --}}

                                                @if (!auth()->user()->amount)
                                                    <h4> <i class="fas fa-hand-holding-usd"></i>&nbsp;USD 0.00
                                                    </h4>
                                                @else
                                                    @if ($balance = auth()->user()->amount - auth()->user()->chose_amount)
                                                        <h4> <i
                                                                class="fas fa-hand-holding-usd"></i>&nbsp;{{ $balance }}
                                                        </h4>
                                                    @endif
                                                @endif

                                                <h4> Active Deposit</h4>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>{{ auth()->user()->answer1 }}</p>
                                                <p>{{ auth()->user()->answer2 }}</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>




                            </div>

                        </div>


                    </div>



                    <br>


                    <!-- last Users -->

                    <div class="card">

                        <div class="card-header text-light">

                            <h3 class="card-title"> Markdown</h3>

                        </div>


                        <div class="card-body">

                            <table class="table table-borderless  table-condensed">

                                <tr scope="row" class="text-light font-weight">
                                    <td>{{ auth()->user()->created_at->diffForHumans() }}</td>

                                    <td>{{ auth()->user()->updated_at->toFormattedDateString() }}</td>
                                </tr>

                            </table>

                            <tr>
                                <td colspan="5">


                                </td>
                            </tr>

                        </div>

                    </div>


                </div>


            </div>


        </div>


    </main>


    @include('layouts.stockApi')
@endsection
