{{-- <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="">
        Farming ming
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <i class="fa fa-bars"></i>


    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav li ml-auto pt-4">
            <li class="nav-item active">
                <a class="nav-link" href="index.html"><img class="li-log" src="image/logo.png" alt="">
                    <span class="sr-only">(current)</span></a>
            </li>


            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
            @endguest


            @auth


                <li class="nav-item dropdown fadeIn animated-fast">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        @if (!asset('uploads/profile/' . Auth::user()->profile_image))
                            <img class="getpic img-fluid img-thumbnail rounded-circle" src="../../images/default.gif"
                                style="width:70px; height:70px">
                        @else
                            <img class="getpic img-fluid img-thumbnail rounded-circle"
                                src="{{ asset('uploads/profile/' . Auth::user()->profile_image) }}"
                                style="width:70px; height:70px">
                        @endif

                        @if ($cut = substr(Auth::guard('web')->user()->fName, 0, 1) . '' . substr(Auth::guard('web')->user()->lName, 0, 1))
                            {{ $cut }}
                        @endif
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">

                        <li class="d-flex justify-content-between"><i class="fas fa-user"></i> <a
                                href="{{ route('user.profile') }}" class="dropdown-item">Profile</a></li>

                        <li class="d-flex justify-content-between"><i class="fas fa-user-lock"></i><a
                                href="{{ route('user.passprofile') }}" class="dropdown-item">Security</a></li>

                    </ul>
            </li> @endauth
            @guest <li class="nav-item">

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


                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="">Sign in</a>
                </li>

                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="">Sign up</a>
                </li>
            @endguest



            @auth


                <li><a href="#" class="p-3" style="text-decoration: none"></a>
                </li>

                {{-- <li>

                    <form action="{{ route('logout') }}" method="post" class="p-2 inline">

                        @csrf
                        <button type="submit" class="btn btn-outline-danger text-info font-weight-bold">Logout</button>

                    </form>

                </li> --}}

{{-- @endauth


</ul>

</div>
</nav> --}}



<section id="navbar-section">

    <nav class="navbar navbar-expand-lg" style="background-color: 0052fe;">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('home') }}" style="position: relative; bottom: 1rem !important;">
                <img src="">
                Farming ming
            </a>

            <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav li ml-auto pt-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><img class="li-log" src="image/logo.png"
                                alt="">
                            <span class="sr-only">(current)</span></a>
                    </li>


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">HOME</a>
                        </li>
                    @endguest


                    @auth


                        <li class="nav-item dropdown fadeIn animated-fast">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="position: relative; bottom: 2.5rem !important;">

                                @if (!asset('uploads/profile/' . Auth::user()->profile_image))
                                    <img class="getpic img-fluid img-thumbnail rounded-circle"
                                        src="../../images/default.gif" style="width:70px; height:70px">
                                @else
                                    <img class="getpic img-fluid img-thumbnail rounded-circle"
                                        src="{{ asset('uploads/profile/' . Auth::user()->profile_image) }}"
                                        style="width:70px; height:70px">
                                @endif

                                @if ($cut = substr(Auth::guard('web')->user()->fName, 0, 1) . '' . substr(Auth::guard('web')->user()->lName, 0, 1))
                                    {{ $cut }}
                                @endif
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">

                                <li class="d-flex justify-content-between"><i class="fas fa-user"></i> <a
                                        href="{{ route('user.profile') }}" class="dropdown-item">Profile</a></li>

                                <li class="d-flex justify-content-between"><i class="fas fa-user-lock"></i><a
                                        href="{{ route('user.passprofile') }}" class="dropdown-item">Security</a></li>

                            </ul>
                    </li> @endauth
                    @guest <li class="nav-item">

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


                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="{{ route('user.login') }}">Sign in</a>
                        </li>

                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="{{ route('user.register') }}">Sign up</a>
                        </li>
                    @endguest



                    @auth


                        <li><a href="#" class="p-3" style="text-decoration: none"></a>
                        </li>

                        {{-- <li>

                            <form action="{{ route('logout') }}" method="post" class="p-2 inline">

                                @csrf
                                <button type="submit" class="btn btn-outline-danger text-info font-weight-bold">Logout</button>

                            </form>

                        </li> --}}

                    @endauth


                </ul>

            </div>

        </div>
    </nav>


</section>
