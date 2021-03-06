@extends('layouts.user_master')
@section('user_content')



    <div class="row-fluid sortable">

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
                {!! Form::open(['url' => '/save_user_blog','enctype'=>'multipart/form-data']) !!}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="blog_title">
                        </div>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

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

                    <input type="hidden" value="0" name="publication_status">

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Publish Blog</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
                {!! Form::close() !!}

            </div>
        </div><!--/span-->



    <link  href="{{asset('admin_asset/css/style.css')}}" rel="stylesheet">
@endsection