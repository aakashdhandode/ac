<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>



    </style>
</head>

<body>
    <div class="">
        <div class="overlay"></div>
        <div class="utility-nav d-none d-md-block header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="about-menu">
                            <li><a href="#"> About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-right">
                        <p class="small">Customer Care 1800 208 1800</p>
                    </div>
                </div>
            </div>
        </div>
        <header class="section-header">
            <section class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-sm-2 col-md-2 col-5"> <a href="/" class="brand-wrap" data-abc="true">
                               
                                <span class="logo colr">LOGO</span> </a>
                        </div>
                        <div class="col-lg-7 col-xl-7 col-sm-8 col-md-4 d-none d-md-block">
                            <form action="#" class="search-wrap">
                                <div class="input-group w-100"> <input type="text" class="form-control search-form"
                                        style="width:55%;" placeholder="Search">
                                    <div class="input-group-append"> <button class="btn sec-btn search-button"
                                            type="submit"> <i class="fa fa-search"></i> </button> </div>
                                    <div class="col-lg-6 col-xl-4 col-sm-12 col-md-12 get-services">
                                        <button class="btn" type="submit">Get AC Service Repair</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-sm-8 col-md-4 col-7">
                            <div class="d-flex justify-content-end drop">
                                <div class="dropdown btn-group"> <a class="nav-link nav-icons padd" href="#"
                                        id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-abc="true">
                                        <i class="fa fa-user-circle mr-1 pr-2 "></i><span>Login</span></a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Profile</a>
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Orders</a>
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Booking</a>
                                        <a class="dropdown-item" href="#{{('/myprofile') }}">Change Password</a>
                                        <a class="dropdown-item" href="{{('/address') }}">My Address</a>
                                        <a class="dropdown-item" href="#">Logout</a>

                                    </div>
                                </div>
                                <span class="vl"></span>
                                <a class="nav-link nav-user-img" href="{{('/cart-page')}}"><i class="fa fa-shopping-cart pr-2"></i><span>my cart</span> </a>
                                <button type="button" class="" data-toggle="modal" data-target="#login">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
              
            </section>
            
            <nav class="navbar navbar-expand-md navbar-main">
                <div class="container">
                    <form class="d-md-none my-2">
                        <div class="input-group"> <input type="search" name="search" class="form-control"
                                placeholder="Search" required="">
                            <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i
                                        class="fa fa-search"></i> </button> </div>
                        </div>
                    </form>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="dropdown6" style="">
                        <ul class="navbar-nav mr-auto navbar-center">
                            <li class="nav-item"> <a class="nav-link" href="{{('/acunit')}}">AC Units</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/portable-ac-units')}}">Portable AC
                                    units</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/water-cooler')}}">Water Cooler</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/air-purifier')}}">Air Purifier</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

       
    </div>
    <main class="">
        @yield('content')
    </main>




</body>

</html>
