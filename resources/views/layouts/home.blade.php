@extends('app')
@section('content')
        <!-- banner -->
        <div class="banner">
            <div class="header-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="images/1.jpg" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Maecenas malesuada elit lectus felis</h3>
                                    <p>Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/4.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Curabitur et ligula. Ut molestie </h3>
                                    <p>Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulu. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Etiam ullamcorper. Suspendisse</h3>
                                    <p>Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/6.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Suspendisse a pellentesque dui</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada .</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->
        <!-- nam-matis -->
        <div class="nam-matis">
            <div class="nam-matis-top">
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{asset('images/5.jpg')}}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="col-md-6 nam-matis-1">
                    <a href=""><img src="{{asset('images/6.jpg')}}" class="img-responsive" alt=""></a>
                    <h3><a href="">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="nam-matis-top">
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{asset('images/4.jpg')}}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="col-md-6 nam-matis-1">
                    <a href="single.html"><img src="{{asset('images/1.jpg')}}" class="img-responsive" alt=""></a>
                    <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- nam-matis -->


    {{--<div class="clearfix"> </div>--}}
    {{--<div class="fle-xsel">--}}
        {{--<ul id="flexiselDemo3">--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/6.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/1.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/4.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/6.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="banner-1">--}}
                        {{--<img src="{{asset('images/1.jpg')}}" class="img-responsive" alt="">--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}

        <script type="text/javascript">
            $(window).load(function() {

                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
        <div class="clearfix"> </div>
 @endsection