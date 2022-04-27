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

                                        <a href="{{ route('user.deposit') }}" class="list-group-item">Deposites fund<span
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

                                        <a href="{{ route('user.withdraw') }}" class="list-group-item">Withdrawal
                                            fund<span class="badge badge-primary" style="float: right; clear:both"><i
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

                <div class="col-md-5">

                    <!-- Over view -->


                    <div class="card">


                        <div class="main-bottom-payment">

                            <h3 class="bottom">Withdraw</h3>

                        </div>

                        <div class="card-body my-5">

                            @if (session('status'))
                                <div class="bg-success rounded-lg text-secondary fw-bold p-4 text-warning mb-4">

                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('user.cash') }}" method="post" class="mb-4">

                                @csrf
                                @method('patch')


                                <div class="form-group">


                                    <label for="">Enter amount</label>
                                    <input type="text" name="chose_amount"
                                        class="form-control subject @error('chose_amount') border border-danger @enderror"
                                        placeholder="Amount">


                                    @error('chose_amount')
                                        <div class="text-danger mt-2 text-sm">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>


                                <div class="form-group">

                                    <p class="text-tag text-muted">Withdraw method</p>
                                    <select id="example" class="form-control subject" name="selected_currency">
                                        <option value="btc" data-icon="../../images/icon/btc.png">BTC</option>
                                        <option value="eth" data-icon="../../images/icon/eth.png">ETH</option>
                                        <option value="bch" data-icon="../../images/icon/bch.png">BCH</option>
                                        <option value="doge" data-icon="../../images/icon/doge.png">DOGE</option>
                                        <option value="shiba" data-icon="../../images/icon/shiba-nu.png">SHIBA</option>
                                        <option value="litecoin" data-icon="../../images/icon/lite.png">LITECOIN
                                        </option>
                                    </select>


                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-outline-primary btn-block">
                                            PROCCESS WITHDRAWAL
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
                                @if ($total_withdraw = auth()->user()->chose_amount)
                                    <h4> <i class="fas fa-hand-holding-usd"></i>&nbsp;{{ $total_withdraw }}
                                    </h4>
                                @endif
                            @endif

                            <h4> Active Withdraw</h4>

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

    <script src="{{ asset('js/custom-selectbox.js') }}"></script>

    <script>
        $('#example').IconSelectBox(true); // isImg: boolean
        $('#example2').IconSelectBox(false); // isImg: boolean
    </script>


    <script>
        jQuery.fn.extend({
            IconSelectBox: function(img) {

                var defaultSelect = '#' + this.prop('id');
                var optionArray = [];
                // convert id to class if id given as selector
                var prefix_class = defaultSelect.replace('#', '.');

                var createElements = function() {
                    var btn_select = extractText(defaultSelect);

                    var button = document.createElement('button');
                    button.classList = btn_select + '-select-box';

                    var div = document.createElement('div');
                    div.classList = btn_select + '-b';

                    var ul = document.createElement('ul');
                    ul.classList = btn_select + '-a';

                    $(div).append(ul);

                    $(button).insertAfter(defaultSelect);

                    $(div).insertAfter(button);
                };

                var getStorage = function() {
                    var lastSelected = localStorage.getItem(extractText(prefix_class) + '-curr');

                    if (lastSelected) {
                        //find an item with value of lastSelected

                        $(prefix_class + '-select-box').html(lastSelected +
                            ' <i data-arrow="true" class="fa fa-angle-down"></i>');
                        var val = $(prefix_class + '-select-box').find('[data-value]').data('value');

                        $(defaultSelect).val(val);
                    } else {
                        $(prefix_class + '-select-box').html(optionArray[0] +
                            ' <i data-arrow="true" class="fa fa-angle-down"></i>');
                        var val = $(optionArray[0]).find('[data-value]').data('value');

                        $(defaultSelect).val(val);
                    }
                };

                var extractText = function() {
                    return defaultSelect.indexOf('#') > -1 ? defaultSelect.replace('#', '') : defaultSelect
                        .replace('.', '');
                };

                var addCss = function() {
                    const head = document.querySelector('head');
                    const css = prefix_class + '-a {' +
                        'padding-left: 0px;' +
                        'background: #faf9f9;' +
                        'margin-bottom: 0px;' +
                        '}' +

                        prefix_class + '-a img, ' + prefix_class + '-select-box img{' +
                        'width: 25px;' +
                        '}' +

                        prefix_class + '-a li{' +
                        'list-style: none;' +
                        'padding: 10px;' +
                        'text-align: left !important;' +
                        '}' +

                        prefix_class + '-a li:not(:last-child){' +
                        'border-bottom: 1px solid #dcd6d6;' +
                        '}' +

                        prefix_class + '-a li:hover{' +
                        'background-color: #F4F3F3;' +
                        '}' +

                        prefix_class + '-a li img {' +
                        'margin: 5px;' +
                        '}' +

                        prefix_class + '-a li span, ' + prefix_class + '-select-box li span {' +
                        'margin-left: 30px;' +
                        '}' +

                        prefix_class + '-b {' +
                        'position: absolute;' +
                        'display: none;' +
                        'width: 100%;' +
                        'box-shadow: 0 6px 12px rgba(0,0,0,.175);' +
                        'border: 1px solid rgba(0,0,0,.15);' +
                        'z-index: 9999;' +
                        '}' +

                        prefix_class + '-select-box {' +
                        'display: flex;' +
                        'align-items: center;' +
                        'position: relative;' +
                        'width: 100%;' +
                        '/*height: 34px;*/' +
                        'background-color: #faf9f9;' +
                        'border: 1px solid #e9e8e8;' +
                        '}' +

                        prefix_class + '-select-box i {' +
                        'font-size: 2rem;' +
                        'top: 10%;' +
                        'position: relative;' +
                        '}' +

                        prefix_class + '-select-box li i {' +
                        'font-size: 1.5rem;' +
                        '}' +

                        prefix_class + '-select-box li {' +
                        'display: flex;' +
                        'align-items: center;' +
                        'list-style: none;' +
                        'float: left;' +
                        'padding-bottom: 0px;' +
                        'width: 95%;' +
                        'text-align: left;' +
                        '}' +

                        prefix_class + '-select-box li {' +
                        'font-size: 16px;' +
                        'line-height: 20px;' +
                        'font-weight: bold;' +
                        'color: #0F1821;' +
                        'cursor: pointer;' +
                        '}' +

                        prefix_class + '-select-box:hover li {' +
                        'margin-left: 0px;' +
                        '}' +

                        prefix_class + '-select-box:hover {' +
                        'background-color: #F4F3F3;' +
                        'border: 1px solid transparent;' +
                        'box-shadow: inset 0 0px 0px 1px #ccc;' +
                        '}' +

                        prefix_class + '-select-box:focus {' +
                        'outline:none;' +
                        '}';


                    $(head).append('<style> ' + css + ' </style>');

                };

                $(defaultSelect).hide();

                $(defaultSelect + ' option').each(function() {
                    var text = this.innerText;
                    var value = this.value;
                    var icon = $(this).data("icon");

                    var iconEl = img ? '<img src="' + icon +
                        '" alt="icon" data-value="' + value + '"/>' :
                        '<i class="' + icon +
                        '" data-value="' + value + '"></i>';

                    var item = '<li>' + iconEl + ' <span>' + text + '</span></li>';
                    optionArray.push(item);
                })

                createElements();
                addCss();

                //console.log(optionArray);
                $(prefix_class + '-a').html(optionArray);

                getStorage();

                //change button stuff on click
                $(prefix_class + '-a li').click(function() {
                    var icon = img ? $(this).find('img').attr("src") : $(this).find('i').attr("class");
                    var value = img ? $(this).find('img').data('value') : $(this).find('i').data(
                        'value');
                    var text = this.innerText;

                    var iconEl = img ? '<img src="' + icon +
                        '" alt="icon" data-value="' + value + '"/>' :
                        '<i class="' + icon +
                        '" data-value="' + value + '"></i>';

                    var item = '<li>' + iconEl + ' <span> ' + text + ' </span>' + '</li>';

                    $(prefix_class + '-select-box').html(item +
                        '<i data-arrow="true" class="fa fa-angle-down"></i>');

                    $(defaultSelect).val(value);
                    $(prefix_class + '-b').toggle();

                    localStorage.setItem(extractText(prefix_class) + '-curr', item);
                });

                $(prefix_class + '-select-box').click(function() {
                    var cls = $(this).find('[data-arrow]').attr('class');
                    if (cls === "fa fa-angle-up") {
                        $(this).find('[data-arrow]').attr('class', 'fa fa-angle-down');
                    } else {
                        $(this).find('[data-arrow]').attr('class', 'fa fa-angle-up');
                    }

                    $(prefix_class + '-b').toggle();
                });

            }
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
                $(".subject").selectpicker();
            });

        });
    </script>
@endsection
