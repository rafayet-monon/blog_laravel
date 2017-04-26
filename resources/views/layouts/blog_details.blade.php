@extends('app')
@section('content')


        <div class="blog-artical" style="background-color: whitesmoke;">
            <div class="blog-artical-info" style="margin-left: 25px; margin-right: 25px; margin-top: 25px; margin-bottom: 25px" >
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
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <h3 style="color: green">
            <?php
            $message=Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
            ?>
        </h3>
        @if (Auth::guest())
            <div class="comment">
            <h3>** Please <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post Comments **</h3>
                <div class="clearfix"> </div>
            </div>
            @else
    <div class="comment">
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Add Comment</label>
            <div class="controls">
                {!! Form::open(['url' => '/save_comment']) !!}
                <textarea class="cleditor" id="textarea2" rows="3" name="comments" style="background-color: #ffffff"></textarea>

                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <input type="hidden" value="{{$details_blog->blog_id}}" name="blog_id">
                <input type="hidden" name="publication_status" value="0">

                <input type="submit" value="Post Comment" style="background-color: #0a0c0e; margin-top: 20px"  >

                {!! Form::close() !!}
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    @endif


        <?php
        foreach ($published_comments as $p_comments){
        ?>
        <div class="comment">
            <h2>Comments</h2>
            <div class="clearfix"> </div>
        </div>
        <div class="blo-top" style="background-color: #FFFFFF">
            <p3>Comment by : <?php echo $p_comments->name ?></p3>
            <li style="margin-top: 20px; margin-bottom: 10px">Comment : <?php echo $p_comments->comments ?> </li>
    </div>
        <?php
                }
    ?>

        <link  href="{{asset('admin_asset/css/jquery.cleditor.css')}}" rel="stylesheet">

@endsection