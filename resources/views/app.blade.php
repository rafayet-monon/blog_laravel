<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>
    {{--auth--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
{{--auth end--}}
</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt=""></a>
        </div>

        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                <li><a href="{{URL::to('/services')}}">Services</a></li>

                <li><a href="{{URL::to('/contact')}}">Contact</a></li>

                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                <li>
                        <a href="{{URL::to('/user_dashboard')}}">
                            {{ Auth::user()->name }}
                        </a>
                </li>

                <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                </li>


                @endif
                <div class="clearfix"></div>
                    <!-- Authentication Links -->

            </ul>
        </div>

        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->



        <div class="clearfix"> </div>
    </div>
</div>
<!-- header -->

<!-- CONTENT -->
<div class="container">

    <div class="col-md-9 bann-right">

    @yield('content')
    </div>

    <div class="col-md-3 bann-left">
        @yield('side_bar')
    </div>

</div>
<!-- CONTENT -->


    <div class="footer">
        <div class="col-md-3 foot-1">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">||   Lorem Ipsum passage</a></li>
                <li><a href="#">||   Finibus Bonorum et</a></li>
                <li><a href="#">||   Treatise on the theory</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Favorite Resources</h4>
            <ul>
                <li><a href="#">||   Characteristic words</a></li>
                <li><a href="#">||   combined with a handful</a></li>
                <li><a href="#">||   which looks reasonable</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>About Us</h4>
            <ul>
                <li><a href="#">||  Even slightly believable</a></li>
                <li><a href="#">||  Hidden in the middle</a></li>
                <li><a href="#">||  Ipsum therefore always</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Custom Menu</h4>
            <ul>
                <li><a href="#">||  Internet tend to repeat</a></li>
                <li><a href="#">||  Alteration in some form</a></li>
                <li><a href="#">||  This book is a treatise</a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
        <div class="copyright">
            <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>