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
                {!! Form::open(['url' => '/update_user_blog','enctype'=>'multipart/form-data']) !!}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input value="<?php echo $blog_info->blog_title?>" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="blog_title">
                            <input value="<?php echo $blog_info->blog_id?>" type="hidden" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="blog_id">
                        </div>
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">

                    <div class="control-group">
                        <label class="control-label" for="selectError">Category</label>
                        <div class="controls">
                            <select id="selectError" data-rel="chosen" name="category_id">
                                @foreach($all_category_info as $c_info)
                                    <option value="{{$c_info->category_id}}">{{$c_info->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Change Image</label>

                        <img src="<?php echo URL::to($blog_info->blog_image)  ?>"  width="100" height="100">

                        <div class="controls">
                            <input type="file" name="blog_image" >
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="blog_short_description"><?php echo $blog_info->blog_short_description?></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="blog_long_description"><?php echo $blog_info->blog_long_description?></textarea>
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