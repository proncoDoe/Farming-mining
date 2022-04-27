<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.statically.io/gh/kswedberg/jquery-smooth-scroll/3948290d/jquery.smooth-scroll.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        integrity="sha512-TyUaMbYrKFZfQfp+9nQGOEt+vGu4nKzLk0KaV3nFifL3K8n7lzb8DayTzLOK0pNyzxGJzGRSw78e8xqJhURJ3Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" hre="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css"
        integrity="sha512-6g9IGCc67eh+xK03Z8ILcnKLbJnKBW+qpEdoUVD/4hBa2Ghiq5dQgeNOGWJfGoe9tdCRM4GpJMnsRXa2FDJp9Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">





    <!-- Vendor CSS Files -->


    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">


    <title>Farm mining</title>


</head>



<body>


    <header>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: 0052fe;">
            <div class="container-fluid">
                {{-- <a href="/" class="brand">
                    <svg height="28" viewBox="0 0 158 28" xmlns="http://www.w3.org/2000/svg" class="Header__Logo"
                        role="button" style="
                  width: 112px;
                  height: 20px;
                  margin-top: 2px;
                  fill: #FFFFFF;
                  cursor: pointer;
                ">
                        <path
                            d="M31.6354 7.81707C25.9412 7.81707 21.492 12.1397 21.492 17.9263C21.492 23.713 25.8287 27.9986 31.6354 27.9986C37.442 27.9986 41.8541 23.639 41.8541 17.8893C41.8541 12.1766 37.5174 7.81707 31.6354 7.81707ZM31.6738 23.8283C28.4311 23.8283 26.055 21.3098 26.055 17.9277C26.055 14.5072 28.3927 11.9903 31.6354 11.9903C34.9164 11.9903 37.2911 14.5456 37.2911 17.9277C37.2911 21.3098 34.9164 23.8283 31.6738 23.8283ZM43.0977 12.215H45.9261V27.6244H50.4508V8.19271H43.0977V12.215ZM10.105 11.9888C12.4811 11.9888 14.3664 13.4543 15.0821 15.6341H19.8713C19.0034 10.9743 15.1575 7.81707 10.1434 7.81707C4.4492 7.81707 0 12.1397 0 17.9277C0 23.7158 4.33681 28 10.1434 28C15.0451 28 18.9664 24.8427 19.8343 20.1445H15.0821C14.4034 22.3243 12.5181 23.8283 10.142 23.8283C6.86092 23.8283 4.56159 21.3098 4.56159 17.9277C4.56304 14.5072 6.82535 11.9888 10.105 11.9888ZM129.068 16.0482L125.75 15.5601C124.167 15.3353 123.036 14.8089 123.036 13.5682C123.036 12.215 124.507 11.5392 126.504 11.5392C128.692 11.5392 130.087 12.4783 130.389 14.0192H134.763C134.272 10.1107 131.255 7.81848 126.618 7.81848C121.829 7.81848 118.662 10.2615 118.662 13.719C118.662 17.0257 120.736 18.9437 124.921 19.5441L128.239 20.0321C129.861 20.2569 130.766 20.8972 130.766 22.0995C130.766 23.6404 129.182 24.2793 126.995 24.2793C124.317 24.2793 122.809 23.1894 122.583 21.5361H118.134C118.549 25.3322 121.527 28 126.957 28C131.897 28 135.177 25.7448 135.177 21.8732C135.177 18.4158 132.802 16.6116 129.068 16.0482ZM48.1884 0.187814C46.5294 0.187814 45.2848 1.39011 45.2848 3.04345C45.2848 4.69678 46.5281 5.89907 48.1884 5.89907C49.8474 5.89907 51.0926 4.69678 51.0926 3.04345C51.0926 1.39011 49.8474 0.187814 48.1884 0.187814ZM114.59 14.8459C114.59 10.6371 112.026 7.81848 106.596 7.81848C101.468 7.81848 98.6024 10.4123 98.0363 14.3962H102.524C102.75 12.8553 103.957 11.5776 106.521 11.5776C108.822 11.5776 109.953 12.5921 109.953 13.8328C109.953 15.4492 107.878 15.8618 105.314 16.125C101.845 16.5006 97.5468 17.7029 97.5468 22.2133C97.5468 25.7092 100.149 27.963 104.297 27.963C107.539 27.963 109.575 26.6099 110.594 24.4671C110.745 26.3837 112.178 27.6244 114.177 27.6244H116.816V23.6034H114.591V14.8459H114.59ZM110.14 19.7319C110.14 22.3257 107.878 24.2423 105.125 24.2423C103.428 24.2423 101.995 23.528 101.995 22.0255C101.995 20.1089 104.295 19.5825 106.407 19.3577C108.443 19.1699 109.574 18.7188 110.14 17.8538V19.7319ZM86.1214 7.81707C83.5944 7.81707 81.4831 8.86996 79.975 10.6357V0H75.4504V27.6244H79.8993V25.069C81.4074 26.9101 83.5577 28 86.1214 28C91.5508 28 95.6616 23.7158 95.6616 17.9277C95.6616 12.1397 91.4756 7.81707 86.1214 7.81707ZM85.4429 23.8283C82.2001 23.8283 79.8241 21.3098 79.8241 17.9277C79.8241 14.5456 82.2373 11.9903 85.4796 11.9903C88.7609 11.9903 91.0599 14.5087 91.0599 17.9277C91.0599 21.3098 88.6852 23.8283 85.4429 23.8283ZM64.6279 7.81707C61.6871 7.81707 59.7634 9.01937 58.6324 10.7111V8.19271H54.1446V27.623H58.6692V17.0627C58.6692 14.0932 60.5544 11.9888 63.3448 11.9888C65.947 11.9888 67.5675 13.83 67.5675 16.4992V27.6244H72.0921V16.162C72.0939 11.2746 69.5682 7.81707 64.6279 7.81707ZM156.745 17.2889C156.745 11.727 152.673 7.81848 147.205 7.81848C141.399 7.81848 137.137 12.1781 137.137 17.9277C137.137 23.9791 141.7 28 147.281 28C151.995 28 155.69 25.2184 156.632 21.2728H151.918C151.239 23.0016 149.58 23.9791 147.355 23.9791C144.451 23.9791 142.264 22.1749 141.774 19.0176H156.744V17.2889H156.745ZM142.039 15.785C142.756 13.0787 144.792 11.764 147.13 11.764C149.694 11.764 151.655 13.2295 152.107 15.785H142.039Z"
                            fill-rule="evenodd" />
                    </svg>
                </a> --}}

                <a href="/" class="brand" style="text-decoration: none; color:#fff !important">
                    <img src="">
                    Farm mining
                </a>

                <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>

                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('price') }}">Plans</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-5 pt-4">

                        <li class="nav-item dropdown fadeIn animated-fast">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->email }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a href="https://pro.coinbase.com" style="color:#444 !important"
                                        class="dropdown-item" style="color:#444 !important">Coinbase Pro</a></li>
                                <li><a href="https://prime.coinbase.com" class="dropdown-item"
                                        style="color:#444 !important">Coinbase Prime</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="https://developers.coinbase.com" class="dropdown-item"
                                        style="color:#444 !important">Developer
                                        Platform</a></li>

                                <li> <a href="{{ route('admin.logout') }}" class="dropdown-item"
                                        style="color:#444 !important"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                        @csrf</form>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>

            </div>
        </nav>

    </header>


    <header id="header">



    </header>
    {{-- https://p.nomics.com/cryptocurrency-bitcoin-api --}}
    {{-- API KEY:  m_ab5112c1aa9e85bb06f1aba25322bf950f91f334 --}}



    <main id="main">



        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class=""></div>
            <div class="tradingview-widget-copyright"><a><span class="blue-text">Markets</span></a> Asic mining
            </div>
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


            <div class="container my-4">

                <div class="row">

                    <div class="col-md-3 col-sm-12">

                        <div class="  list-group">

                            <a href="{{ route('admin.home') }}" class=" list-group-item active .main-color-bg"><i
                                    class="fas fa-cog"></i>
                                Dashboard</a>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="fas fa-users"></i>&nbsp; Members
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <a href="{{ route('admin.member') }}" class="list-group-item">Number of
                                                members<span class="badge badge-primary"
                                                    style="float: right; clear:both"><i
                                                        class="fas fa-band-aid"></i></span></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Withdraws
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <a href="" class="list-group-item">Withdraws
                                                fund<span class="badge badge-primary"
                                                    style="float: right; clear:both"><i
                                                        class="bi bi-cash-coin"></i></span></a>
                                            <a href="pages.html" class="list-group-item">View withdraws<span
                                                    class="badge badge-primary" style="float: right; clear:both"><i
                                                        class="bi bi-cash-coin"></i></span></a>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <br>
                        <div class="card">


                            <a href="{{ route('admin.contact') }}" class="list-group-item">Message<span
                                    class="badge badge-primary" style="float: right; clear:both"><i
                                        class="fas fa-dollar-sign"></i></span></a>
                            <a href="{{ route('admin.helpdesk') }}" class="list-group-item">Help desk<span
                                    class="badge badge-primary" style="float: right; clear:both"><i
                                        class="fas fa-comment-alt"></i></span></a>

                            <a href="{{ route('admin.subscribe') }}" class="list-group-item">Subscriptions<span
                                    class="badge badge-primary" style="float: right; clear:both"><i
                                        class="fas fa-comment-alt"></i></span></a>

                            <a href="{{ route('admin.logout') }}" class="logout-bg"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                                <i class="fas fa-sign-out-alt text-light"></i></a>
                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                @csrf</form>

                        </div>

                    </div>

                    <div class="col-md-9 col-sm-12">

                        <!-- Over view -->


                        <div class="card">

                            <div class="card-header main-color-bg">

                                <h3 class="card-title text-dark"> <span> {{ Auth::guard('admin')->user()->email }}
                                    </span>

                                </h3>


                            </div>



                            <div class="card-body my-5">


                                <div class="row">

                                    <div class="col-md-3 dashboad-box shadow-lg">



                                        <h2></i>&nbsp;<span class="badge badge-info"
                                                style="float: right; clear:both">{{ $counts }}</span></h2>

                                        <h4> <i class="bi bi-people"></i>&nbsp;Users</h4>



                                    </div>


                                    <div class="col-md-3 dashboad-box shadow-lg">

                                        <h2></i>&nbsp;<span class="badge badge-info"
                                                style="float: right; clear:both">{{ $countsSubscribers }}</span></h2>

                                        <h4> <i class="bi bi-pencil-fill"></i>&nbsp;Subscribers</h4>

                                    </div>

                                    <div class="col-md-3 dashboad-box shadow-lg">

                                        <h2></i>&nbsp;<span class="badge badge-info"
                                                style="float: right; clear:both">{{ $countsCounts }}</span></h2>

                                        <h4> <i class="bi bi-person-lines-fill"></i>&nbsp;Contacts</h4>


                                    </div>



                                    <div class="col-md-3 dashboad-box shadow-lg">

                                        <h2> &nbsp;<span class="badge badge-info"
                                                style="float: right; clear:both">{{ $countsDeskHelp }}</span>
                                        </h2>

                                        <h4> <i class="bi bi-bar-chart-steps"></i> Desk help</h4>



                                    </div>


                                </div>

                            </div>


                        </div>


                        <div class="row mb-5">

                            <div class="col-md-7">

                                <div class="container" class="transition duration-500 ease-in-out"
                                    style="height:300px">

                                    <h3>Admin chart</h3>
                                    {!! $chart->container() !!}

                                    {!! $chart->script() !!}

                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="container" class="transition duration-500 ease-in-out"
                                    style="height:300px">

                                    <h3>Subscribers</h3>
                                    {!! $round->container() !!}

                                    {!! $round->script() !!}

                                </div>

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12">

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        DataTable
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple"
                                            class="table table-striped table-responsive table-responsive-lg table-responsive-md table-responsive-sm"
                                            style="overflow-y: hidden">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Profile status</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Currency date</th>
                                                    <th>Wallet address</th>
                                                    <th>select question 1</th>
                                                    <th>answer question 1</th>
                                                    <th>select question 2</th>
                                                    <th>answer question 2</th>
                                                    <th>Country</th>
                                                    <th>State</th>
                                                    <th>Deposit plans</th>
                                                    <th>Amount</th>
                                                    <th>Interest</th>
                                                    <th>Referral earning</th>
                                                    <th>Add wallet address</th>
                                                    <th>Chose amount</th>
                                                    <th>Reffered by name</th>
                                                    <th>created at</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <td>ID</td>
                                                    <th>Profile status</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Currency date</th>
                                                    <th>Wallet address</th>
                                                    <th>select question 1</th>
                                                    <th>answer question 1</th>
                                                    <th>select question 2</th>
                                                    <th>answer question 2</th>
                                                    <th>Country</th>
                                                    <th>State</th>
                                                    <th>Deposit plans</th>
                                                    <th>Amount</th>
                                                    <th>Interest</th>
                                                    <th>Referral earning</th>
                                                    <th>Add wallet address</th>
                                                    <th>Chose amount</th>
                                                    <th>Reffered by name</th>
                                                    <th>created at</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </tfoot>

                                            @if ($users->count())
                                                <tbody id="tablecontents">

                                                    @foreach ($users as $user)
                                                        <tr class="row1" data-id="{{ $user->id }}">
                                                            <td>{{ $user->id }}</td>
                                                            <td><img src="{{ asset('uploads/profile/' . $user->profile_image) }}"
                                                                    alt="profie status"
                                                                    class="img-responsive img-fuid img-thumbnail rounded-pill"
                                                                    style="width:70px; height:70px"></td>
                                                            <td>{{ $user->fName }}</td>
                                                            <td>{{ $user->lName }}</td>
                                                            <td>{{ $user->username }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->phone }}</td>
                                                            <td>{{ $user->currency }}</td>
                                                            <td>{{ $user->wallet_address }}</td>
                                                            <td>{{ $user->select_question1 }}</td>
                                                            <td>{{ $user->answer1 }}</td>
                                                            <td>{{ $user->select_question2 }}</td>
                                                            <td>{{ $user->answer2 }}</td>
                                                            <td>{{ $user->country }}</td>
                                                            <td>{{ $user->state }}</td>
                                                            <td>{{ $user->deposit }}</td>
                                                            <td>{{ $user->amount }}</td>
                                                            <td>{{ $user->interest }}</td>
                                                            <td>{{ $user->Referral_earnings }}</td>
                                                            <td>{{ $user->add_wallet_address }}</td>
                                                            <td>{{ $user->chose_amount }}</td>
                                                            <td>{{ $user->Reffered_by_name }}</td>
                                                            <td>{{ $user->created_at }}</td>
                                                            <td>{{ $user->updated_at }}</td>

                                                            <td class="btn btn-group">


                                                                <a href="{{ route('admin.edit', $user->id) }}"
                                                                    data-toggle='tooltip' data-placement='top'
                                                                    title='Edit'
                                                                    class='btn btn-outline-success edit_link red-tooltip'>
                                                                    <i class='fas fa-edit'></i> </a>

                                                                <form
                                                                    action="{{ route('admin.destroy', $user->id) }}"
                                                                    method="POST">

                                                                    @csrf

                                                                    {{-- method puffing --}}
                                                                    @method('DELETE')

                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-block"><i
                                                                            class="fas fa-dumpster"></i></button>

                                                                </form>

                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                    {{-- {{ $deposits->onEachSide(1)->links() }} --}}
                                                </tbody>


                                        </table>
                                    @else
                                        <p class="text-capitalize">No payment proceed</p>
                                        @endif
                                    </div>
                                </div>


                                <!-- last Users -->

                                <div class="card mb-3">

                                    <div class="card-header">

                                        <h3 class="card-title"> Markdown</h3>

                                    </div>


                                    <div class="card-body">

                                        <table class="table table-borderless  table-condensed">

                                            <tr scope="row" class="font-weight">
                                                <td>{{ Auth::guard('admin')->user()->created_at->diffForHumans() }}
                                                </td>

                                                <td>{{ Auth::guard('admin')->user()->updated_at->toFormattedDateString() }}
                                                </td>
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

                </div>


            </div>


            </div>

        </main>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
                integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"
                integrity="sha512-iqhWkvLOXVDz+Lr//ZryEKNvZ5pmgdKEe58Wh/VwfTGwTku0MKbuLhjJ1zUAJu8iSbOqfLcXrrxJ61+27THi2Q=="
                crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
                integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
                crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <!-- Vendor JS Files -->

        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/tootip.js') }}"></script>

        <script src="{{ asset('js/scroll-top.js') }}"></script>

        <script src="{{ asset('js/smooth-scrolling.js') }}"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

        <!-- Charting library -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

        <script>
            window.addEventListener('DOMContentLoaded', event => {
                // Simple-DataTables
                // https://github.com/fiduswriter/Simple-DataTables/wiki

                const datatablesSimple = document.getElementById('datatablesSimple');
                if (datatablesSimple) {
                    new simpleDatatables.DataTable(datatablesSimple);
                }

                $("#tablecontents").sortable({
                    items: "tr",
                    cursor: 'move',
                    opacity: 0.6,
                    updateSortale: function() {
                        sendOrderToServer();
                    }
                });


                function sendOrderToServer() {
                    var order = [];
                    var token = $('meta[name="csrf-token"]').attr('content');
                    //   by this function User can Update hisOrders or Move to top or under
                    $('tr.row1').each(function(index, element) {
                        client.push({
                            id: $(this).attr('data-id'),
                            position: index + 1
                        });
                    });
                    // the Ajax Post update
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ url('admin.home') }}",
                        data: {
                            client: client,
                            _token: token
                        },
                        success: function(response) {
                            if (response.status == "success") {
                                console.log(response);
                            } else {
                                console.log(response);
                            }
                        }
                    });
                }

            });
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
                integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
                crossorigin="anonymous"></script>

        <script>
            @if (Session::has('success'))
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }


                toastr.success("{{ Session::get('success') }}")
            @endif



            @if (Session::has('error'))
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }


                toastr.error("{{ Session::get('error') }}")
            @endif


            @if (Session::has('info'))
                toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }


                toastr.info("{{ Session::get('info') }}")
            @endif
        </script>


</body>

{{-- https://packagist.org/packages/consoletvs/charts --}}

</html>
