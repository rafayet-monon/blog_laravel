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
            <a href="#">Add Category</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Category</h2>
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
                {!! Form::open(['url' => '/save_category']) !!}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="category_name">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="category_description"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError">Publication Status</label>
                            <div class="controls">
                                <select id="selectError" data-rel="chosen" name="publication_status">
                                    <option value="1">Publish</option>
                                    <option value="0">Unpublish</option>
                                </select>
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