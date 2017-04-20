@extends('app')
@section('side_bar')


<div class="b-search">
    <form>
        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
        <input type="submit" value="">
    </form>
</div>
<h3>Recent Posts</h3>
<div class="blo-top">
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href="single.html"><img src="{{asset('images/1b.jpg')}}" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href="single.html"><img src="{{asset('images/2b.jpg')}}" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href=""><img src="{{asset('images/3b.jpg')}}" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
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