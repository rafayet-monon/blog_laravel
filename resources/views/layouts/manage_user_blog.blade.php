@extends('layouts.user_master')
@section('user_content')



    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-content">
                <h3 style="color: green">
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                </h3>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Blog Name</th>
                        <th>Blog Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($all_blog_info as $v_blog){
                    ?>
                    <tr>

                        <td class="center"><?php echo $v_blog->blog_title ?></td>
                        <td class="center"><img src="<?php echo URL::to($v_blog->blog_image) ?>" width="50" height="50"></td>

                        <?php
                        if($v_blog->publication_status==1){
                        ?>
                        <td class="center">
                            <span class="label label-success">Published</span>
                        </td>
                        <?php
                        }
                        else{
                        ?>

                        <td class="center">
                            <span class="label label-important">Unpublished</span>
                        </td>
                        <?php
                        }
                        ?>

                        <td class="center">

                            <a class="btn btn-info" href="{{URL::to('/edit_user_blog/'.$v_blog->blog_id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/delete_user_blog_by_user/'.$v_blog->blog_id)}}" onclick="return check_delete();">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <link  href="{{asset('admin_asset/css/style.css')}}" rel="stylesheet">

@endsection