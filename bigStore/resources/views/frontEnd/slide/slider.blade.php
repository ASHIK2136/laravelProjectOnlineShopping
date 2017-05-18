@extends('admin.master')
@section('title')
Slider
@endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class=" panel panel-default">
            <h1 class="text-center text-white">Slider Image</h1>
            <div class="panel-heading">
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'storeSlider', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])!!}
                <div class="form-group">
                    <label class="col-md-3 control-label">Slider Image</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" name="sliderImage">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="publicationStatus">
                            <option>--Select Publication Status--</option>
                            <option value="1">Published</option>
                            <option value="2">UnPublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-success btn-block" value="Submit">
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
</div>
@endsection