@extends('admin_layouts.admin_master')
@section('admin_content')


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Add Blog</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Blog</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
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
            <div class="box-content">
                {!! Form::open(['url' => '/save_blog','enctype'=>'multipart/form-data']) !!}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="blog_title">
                        </div>
                    </div>

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
                        <label class="control-label" >Upload Image</label>
                        <div class="controls">
                            <input type="file" name="blog_image">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="blog_short_description"></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="blog_long_description"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="publication_status" id="optionsRadios1" value="1" checked="">
                                Publish
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="publication_status" id="optionsRadios2" value="0">
                                Unpublish
                            </label>
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


@endsection