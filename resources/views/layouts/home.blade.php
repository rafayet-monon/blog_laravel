@extends('app')
@section('content')
        <!-- banner -->
        <div class="banner">
            <div class="header-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="{{asset('images/1.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Programmer's Blog</h3>
                                    <p>Share your works. Write a blog about it.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/2.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Hackers</h3>
                                    <p>Latest news about cyber security</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/3.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Technology</h3>
                                    <p>Know about new technologies. Write if you can. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/4.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Codes</h3>
                                    <p>Write what problems you faced when writing codes</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->

<?php

$popular_blog=DB::table('tbl_blog')
             ->orderBy('hit_count','desc')
             ->take(4)
             ->get();


?>


        <!-- nam-matis -->

        <div class="nam-matis">
            <h1 style="text-align :center">Popular Blogs</h1>

            <div class="nam-matis-top">
                <div class="container-fluid" style="margin-bottom: 100px">
                @foreach($popular_blog as $p_blog )
                <div class="col-md-6 nam-matis-1">

                    <a href="{{URL::to('/blog_details/'.$p_blog->blog_id)}}"><img src="{{URL::to($p_blog->blog_image)}}"  alt="" height="200" width="200" class="img-circle" style="display: block; margin: auto"></a>
                    <h3 style="text-align :center"><a href="{{URL::to('/blog_details/'.$p_blog->blog_id)}}">{{$p_blog->blog_title}}</a></h3>
                </div>
                @endforeach
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