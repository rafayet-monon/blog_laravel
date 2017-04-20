@extends('app')
@section('side_bar')


<div class="b-search">
    <form>
        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
        <input type="submit" value="">
    </form>
</div>

<?php
    $recent_blog =DB::table('tbl_blog')
                ->orderBy('blog_id','desc')
                ->where('publication_status',1)
                ->take(4)
                ->get();
?>


<h3>Recent Posts</h3>
<div class="blo-top">
    @foreach($recent_blog as $r_blog)
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href="{{ URL::to('/blog_details/'.$r_blog->blog_id) }}"><img src="{{URL::to($r_blog->blog_image)}}" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="{{URL::to('/blog_details/'.$r_blog->blog_id)}}">{{$r_blog->blog_title}}</a></h4>

        </div>
        <div class="clearfix"> </div>
    </div>
        @endforeach
</div>
<h3>Categories</h3>

<div class="blo-top">
    <?php
    foreach ($all_published_category as $v_category){
    ?>

    <li><a href="#"><?php echo $v_category->category_name ?></a></li>

    <?php
        }
        ?>
</div>

<h3>Newsletter</h3>

<div class="blo-top">
    <div class="name">
        <form>
            <input type="text" placeholder="email" required="">
        </form>
    </div>
    <div class="button">
        <form>
            <input type="submit" value="Subscribe">
        </form>
    </div>
    <div class="clearfix"> </div>
</div>


    @endsection