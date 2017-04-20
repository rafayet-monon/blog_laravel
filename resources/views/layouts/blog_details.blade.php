@extends('app')
@section('content')


        <div class="blog-artical">
            <div class="blog-artical-info">
                <div class="blog-artical-info-img">
                    <img src="{{URL::to($details_blog->blog_image)}}" title="{{$details_blog->blog_title}}" height="500" width="150">
                </div>
                <div class="blog-artical-info-head">
                    <h2>{{$details_blog->blog_title}}</h2>
                    <h5>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a> | Category : {{$details_blog->category_name}}</h5>

                </div>
                <div class="blog-artical-info-text">
                    <p><?php echo $details_blog->blog_short_description ?></p>
                </div>
                <div class="blog-artical-info-text">
                    <p><?php echo $details_blog->blog_long_description ?></p>
                </div>
                <div class="artical-links">
                    <ul>
                        <li><small> </small><span>june 14, 2013</span></li>
                        <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
                        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                        <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
                        <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>


@endsection