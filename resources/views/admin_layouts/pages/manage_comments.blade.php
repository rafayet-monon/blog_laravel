@extends('admin_layouts.admin_master')
@section('admin_content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Manage Category</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
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
                        <th>Comment ID</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($all_comment_info as $v_comment){
                    ?>
                    <tr>
                        <td><?php echo $v_comment->comment_id ?></td>
                        <td class="center"><?php echo $v_comment->comments ?></td>

                        <?php
                        if($v_comment->publication_status==1){
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
                            <?php
                            if($v_comment->publication_status==1){
                            ?>
                            <a class="btn btn-danger" href="{{URL::to('/unpublish_comment/'.$v_comment->comment_id)}}">
                                <i class="halflings-icon white thumbs-down"></i>
                            </a>
                            <?php } ?>

                            <?php
                            if($v_comment->publication_status==0){
                            ?>
                            <a class="btn btn-success" href="{{URL::to('/publish_comment/'.$v_comment->comment_id)}}">
                                <i class="halflings-icon white thumbs-up"></i>
                            </a>
                            <?php } ?>
                            <a class="btn btn-danger" href="{{URL::to('/delete_comment/'.$v_comment->comment_id)}}" onclick="return check_delete();">
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

@endsection