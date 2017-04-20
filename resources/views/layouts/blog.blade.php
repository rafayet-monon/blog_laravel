@extends('app')
@section('content')

    @foreach($all_published_blog as $v_blog)
                <div class="blog-artical">
                    <div class="blog-artical-info">
                        <div class="blog-artical-info-img">
                            <a href="{{URL::to('/blog_details/'.$v_blog->blog_id)}}"><img src="{{URL::to($v_blog->blog_image)}}" title="{{$v_blog->blog_title}}" height="450" width="150"></a>
                        </div>
                        <div class="blog-artical-info-head">
                            <h2><a href="{{URL::to('/blog_details/'.$v_blog->blog_id)}}">{{$v_blog->blog_title}}</a></h2>
                            <h5>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a> | Category : {{$v_blog->category_name}}</h5>

                        </div>
                        <div class="blog-artical-info-text">
                            <p><?php echo $v_blog->blog_short_description ?><a href="{{URL::to('/blog_details/'.$v_blog->blog_id)}}">[Read More]</a></p>
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

        @endforeach
    @endsection