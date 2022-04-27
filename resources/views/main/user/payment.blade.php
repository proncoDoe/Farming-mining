@extends('layouts.main')

@section('content')
    @include('layouts.other_method_payment_modal')
    <header>

        <div id="header">

        </div>

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
                                        <a href="{{ route('user.view_withdraw') }}" class="list-group-item">View withdraws<span
                                                class="badge badge-primary" style="float: right; clear:both"><i
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

                <div class="col-md-5">

                    <!-- Over view -->


                    <div class="card">


                        <div class="main-bottom-payment">

                            <h3 class="bottom">Deposits</h3>

                        </div>

                        <div class="card-body my-5">

                            <form action="{{ route('user.payment') }}" method="post">

                                @csrf

                                @method('patch')

                                <div class="form-group">

                                    <input type="number" name="amount"
                                        class="form-control @error('amount') border border-danger @enderror"
                                        placeholder="Amount">

                                    @error('amount')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-outline-primary btn-block">
                                            PROCEED TO PAY
                                        </button>
                                    </div>
                                </div>


                            </form>


                        </div>

                    </div>


                </div>

                <div class="col-md-4">

                    <div class="card">

                        <div class="card-body text-light">

                            @if (!auth()->user()->amount)
                                <h4> <i class="fas fa-hand-holding-usd"></i>&nbsp;USD 0.00
                                </h4>
                            @else
                                @if ($balance = auth()->user()->amount - auth()->user()->chose_amount)
                                    <h4> <i class="fas fa-hand-holding-usd"></i>&nbsp;{{ $balance }}
                                    </h4>
                                @endif
                            @endif

                            <h4> Active Deposits</h4>

                        </div>

                    </div>
                    <br>

                    <div class="card">


                        <div class="card-body">

                            <button type="button" class="btn btn-primary animated rubberBand" role="status" id=""
                                data-toggle="modal" data-target="#myModal">Other Method of
                                Payment <i class="bi bi-currency-bitcoin"></i></button>

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
