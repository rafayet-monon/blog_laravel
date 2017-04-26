@extends('layouts.user_master')
@section('user_content')



    <div class="row-fluid sortable">
        <div class="box span12">

            <h3 style="color: green">
                <?php
                $message=Session::get('message');
                if($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
            </h3>
            <div class="box-content">
                {!! Form::open(['url' => '/update_user_profile','enctype'=>'multipart/form-data']) !!}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Profession</label>
                        <div class="controls">
                            <input value="<?php echo $user_info->profession?>" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="profession">
                            <input value="<?php echo $user_info->id?>" type="hidden" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="id">
                            <input value="<?php echo $user_info->username?>" type="hidden" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="username">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" >Change Image</label>

                        <img src="<?php echo URL::to($user_info->profile_picture)  ?>"  width="100" height="100">

                        <div class="controls">
                            <input type="file" name="profile_picture" >
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" ">About Me</label>
                        <div class="controls">
                            <textarea   rows="3" name="about_me"><?php echo $user_info->about_me?></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Biography</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="biography"><?php echo $user_info->biography?></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
                {!! Form::close() !!}

            </div>
        </div><!--/span-->

    </div>

    <link  href="{{asset('admin_asset/css/style.css')}}" rel="stylesheet">
@endsection