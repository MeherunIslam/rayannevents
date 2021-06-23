
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rayann | Events</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('userfont') }}/css/style.css" type="text/css">
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li style="background: transparent; background-color: white; font-size: 20px; color: #1c1c1c; border-radius:2px; padding-top:15px; padding-bottom:15px; padding-left:20px; padding-right:20px; width:620px; height:80px;">T0 Get 15% Discount You Can Apply Coupon "EID-UL-ADHA".....</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <!-- <div class="header__top__right__language">
                                    <img src="{{ asset('userfont') }}/img/language.png" alt="">
                                    <div>English</div>
                                </div> -->
                                <div class="header__top__right__auth">
                                    <div id="app">
                                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                            <div class="container">
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav ml-auto">
                                                        @guest
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                            </li>
                                                            @if (Route::has('register'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                            @else
                                                            <li class="nav-item dropdown" style=" width:170px; height:50px;">
                                                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" style="border:1px solid #cccccc; border-radius:50px; width:50px; height:50px; float:right; margin-left:15px;">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                                                                    <a href="{{ route('user.order') }}" class="btn btn-primary btn-sm btn-block">My Bookings</a>
                                                                    <a href="{{ route('user.appoint') }}" class="btn btn-primary btn-sm btn-block">My Parlor Appointments</a>
                                                                    <a href="{{ route('user.rent') }}" class="btn btn-primary btn-sm btn-block">My Car Bookings</a>
                                                                    <a class="btn btn-danger btn-sm btn-block" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endguest
                                                    </ul>                                                    
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('cart'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('cart')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="{{ url('/home') }}"><img src="{{ asset('userfont') }}/img/rayann.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                                <li><a href="#">Birthday</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ url('pages/teenage') }}">Teenage</a></li>
                                        <li><a href="{{ url('pages/adult') }}">Adult</a></li>
                                        <li><a href="{{ url('pages/baby') }}">Baby</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Wedding</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ url('pages/muslim') }}">Muslim</a></li>
                                        <li><a href="{{ url('pages/hindu') }}">Hindu</a></li>
                                        <li><a href="{{ url('pages/christian') }}">Christian</a></li>
                                        <li><a href="{{ url('pages/parlor') }}">Bridal Makeup & Parlor</a></li>
                                        <li><a href="{{ url('pages/car') }}">Wedding Car Booking</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Others</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ url('pages/engage') }}">Engagement Parties</a></li>
                                        <li><a href="{{ url('pages/anniversary') }}">Wedding Anniversary</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ url('pages/project') }}">Portfolio</a></li>
                                        <li><a href="{{ url('pages/career') }}">Career</a></li>
                                        <li><a href="{{ url('cart') }}">Shopping Cart</a></li>
                                        <li><a href="{{ url('wishlist') }}">My Wishlist</a></li>
                                        <li><a href="{{ url('checkout') }}">Check Out</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('pages/contact_us') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__cart">
                            @php
                                $total = App\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                                return $t->price * $t->qty;
                                });
                                $quantity = App\Cart::where('user_ip',request()->ip())->sum('qty');
                                $wishqty = App\Wishlist::where('user_id',Auth::id())->get();
                            @endphp
                            <ul>
                                <li><a href="{{ url('wishlist') }}"><i class="fa fa-heart"></i> <span>{{ count($wishqty) }}</span></a></li>
                                <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ $quantity }}</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>${{ $total }}</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        @yield('user_content')

        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="{{ url('/home') }}"><img src="{{ asset('userfont') }}/img/rayann.png" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 Narayangonj</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: meherunislam72@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="{{ url('pages/about') }}">About Us</a></li>
                                <li><a href="{{ url('pages/services') }}">Our Services</a></li>
                                <li><a href="{{ url('pages/contact_us') }}">Contact Us</a></li>
                            </ul>
                            <ul>
                                <li><a href="">Birthday Specials</a></li>
                                <li><a href="">Wedding Parties</a></li>
                                <li><a href="">Other Events</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ url('cart') }}">My Cart</a></li>
                                <li><a href="{{ url('wishlist') }}">My Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Join Our Newsletter Now</h6>
                            <p>Get E-mail updates about our latest design and special offers.</p>
                            <form action="{{ route('store.subscribe') }}" method="POST">
                                @csrf
                                <input type="text" placeholder="Enter your mail" name="subscribe_email">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="fa fa-heart" aria-hidden="true"></i> by Khadiza Islam 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                            <div class="footer__copyright__payment"><img src="{{ asset('userfont') }}/img/payment-item.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{ asset('userfont') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('userfont') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('userfont') }}/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('userfont') }}/js/jquery-ui.min.js"></script>
        <script src="{{ asset('userfont') }}/js/jquery.slicknav.js"></script>
        <script src="{{ asset('userfont') }}/js/mixitup.min.js"></script>
        <script src="{{ asset('userfont') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('userfont') }}/js/main.js"></script>
        <script>
            $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
            });
        </script>


    </body>

</html>
