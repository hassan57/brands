<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elhawary For Online Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') !!}
    <link rel="stylesheet" href="{{ url('front_assets/css/font-awesome.min.css') }}">
    {!! Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="{{ url('front_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('front_assets/css/default_theme.css') }}">
    <link rel="stylesheet" href="{{ url('front_assets/css/hover.css') }}">
    <link rel="stylesheet" href="{{ url('front_assets/css/animate.css') }}">
    {!! Html::style('assets/css/themify-icons.css') !!}
    {!! Html::style('assets/css/style.css') !!}

    <style>
        html, body{
            font-family: 'Muli', "Open Sans" !important; 
        }
    </style>  
    @stack('style')

</head>

<body>

    <section class="option-box">
        <div class="color-option">
            <ul class="list-unstyled">
                <li data-value="front_assets/css/Red_theme.css"></li>
                <li data-value="front_assets/css/Yellow_theme.css"></li>
                <li data-value="front_assets/css/Green_theme.css"></li>
                <li data-value="front_assets/css/default_theme.css"></li>
            </ul>
        </div>
        <i class="fa fa-gear fa-3x color-gear"></i>
    </section>

    <!-- Start Navbar Logo -->

    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-5">
                    <div class="navbar-header">
                        <a href="{{url('/')}}" class="navbar-brand">Elhawary for online brands</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-7 MyAccount">
                    <ul class="nav navbar-nav" style="display: inline-flex">
                        @auth
                            <li><a href="{!!url('/user/profile')!!}">my account</a></li>
                            <li><a href="{!! url('/logout') !!}"><i class="ti-power-off"></i> logout</a></li>
                        @else
                            <li><a class="btn btn-info sign_option" href="{{url('/user/login')}}">Sign </a></li>
                            <li><a class="btn btn-info sign_option" href="{{url('/user/register')}}">Sign Up</a></li>
                        @endauth
                        <li class="dropdown">
                            <a class="dropdown-toggle"  href="{{url('cart')}}">
                                <i class="ti-shopping-cart"></i>
                                <span class="badge">{!! Cart::instance('default')->count() !!} </span>
                            </a>         
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Logo -->

                   
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav links" id="myNavbar">
                <li class="active" data-value="home"><a href="{{url('/')}}" class=" hvr-underline-from-lefts">Home</a></li>
                    <li><a href="#" data-value="About" class=" hvr-underline-from-lefts">About</a></li>
                    <li><a href="#" data-value="men" class=" hvr-underline-from-lefts">Men</a></li>
                    <li><a href="#" data-value="women" class=" hvr-underline-from-lefts">Women</a></li>
                    <li><a href="#" data-value="contact" class=" hvr-underline-from-lefts">contact us</a></li>
                </ul>
            <form class="navbar-form navbar-right" action="{{url('/')}}">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-white">Submit</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->

    <!-- Start Content -->
<div class="container">
    @yield('content')
</div>
        
        
    <!-- End Content -->

    <!-- Start Contact Us -->

    <section id="contact">
        <div class="container">
            <div class="col-lg-8">
                <div class="section-title wow bounceInLeft" data-wow-duration="1s">
                    <h1>Get In Touch</h1>
                    <p>Please fill out the form below to send us an email and we will get back to you as soon as
                        possible
                    </p>
                </div>
                {!! Form::open(['url' => 'admin/feedbacks']) !!}
                     
                    <div class="row">
                        <div class="col-lg-6 wow bounceInLeft" data-wow-duration="1s">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-lg-6 wow bounceInLeft" data-wow-duration="1s">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group wow bounceInLeft" data-wow-duration="1s">
                        <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <button type="submit" class="btn btn-custom btn-lg wow bounceInLeft" data-wow-duration="1s">Send
                        Message</button>
                {!! Form::close() !!}
            </div>
            <div class="col-lg-4">
                <div class="contact-item">
                    <h3>Contact info</h3>
                    <p>
                        <span>
                            <i class="fa fa-map-marker"></i> Address
                        </span>
                        125 Cairo St,<br>
                        Cairo Egypt
                    </p>
                </div>
                <div class="contact-item">
                    <p>
                        <span>
                            <i class="fa fa-phone"></i> phone
                        </span>
                        01005164154
                    </p>
                </div>
                <div class="contact-item">
                    <p>
                        <span>
                            <i class="fa fa-envelope-o"></i> Email
                        </span>
                        hm5342590@gamil.com
                    </p>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="social-icons">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact Us -->
    <!-- Start Footer -->

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footers">
                        <h4>Information</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">>&nbsp;&nbsp;About Us</a></li>
                            <li><a href="#">>&nbsp;&nbsp;custome services</a></li>
                            <li><a href="#">>&nbsp;&nbsp;privacy policy</a></li>
                            <li><a href="#">>&nbsp;&nbsp;site map</a></li>
                            <li><a href="#">>&nbsp;&nbsp;contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footers">
                        <h4>why buy from us</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">>&nbsp;&nbsp;shippning & returns</a></li>
                            <li><a href="#">>&nbsp;&nbsp;secure shopping</a></li>
                            <li><a href="#">>&nbsp;&nbsp;international shipping</a></li>
                            <li><a href="#">>&nbsp;&nbsp;affilaites</a></li>
                            <li><a href="#">>&nbsp;&nbsp;group sales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footers">
                        <h4>Information</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">>&nbsp;&nbsp;sign in</a></li>
                            <li><a href="#">>&nbsp;&nbsp;view cart</a></li>
                            <li><a href="#">>&nbsp;&nbsp;my wishlist</a></li>
                            <li><a href="#">>&nbsp;&nbsp;track my order</a></li>
                            <li><a href="#">>&nbsp;&nbsp;help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footers">
                        <h4>Information</h4>
                        <form class="form-inline" action="/action_page.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email Address">
                            </div>
                            <button type="submit" class="btn btn-default">Subscripe</button>
                        </form>
                        <p class="lead">Store location: 235 Cairo New,
                            in Cairo ,Egypt</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 copy">
                    <p>copyRight &copy; 2019 by <span class="merzek">Hassan Elhawary</span> all rights reserved</p>
                </div>
                <div class="col-lg-4">
                    <div class="carts">
                        <img src="{{url('front_assets/images/master.jpg') }}">
                        <img src="{{url('front_assets/images/paysera.jpg') }}">
                        <img src="{{url('front_assets/images/master.jpg') }}">
                        <img src="{{url('front_assets/images/paysera.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Footer -->
    <script src=" {{ url('front_assets/js/html5shiv.min.js') }}"></script>
    <script src=" {{ url('front_assets/js/respond.min.js') }}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
    {!! Html::script('assets/js/jquery-1.10.2.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    <script src=" {{url ('front_assets/js/plugin.js') }}"></script>
    <script src=" {{url ('front_assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();

    </script>
    @stack('js')
</body>

</html>
