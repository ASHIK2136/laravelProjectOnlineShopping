@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>

            </div>
            <div class="panel-body">
                {{!!Form::open(['url'=>'storeManufacture', 'method'=>'POST', 'class'=>'form-horizontal'])!!}}
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Manufacture Name</label>
                    <div class="col-md-9">
                        <input type="text" name="manufactureName" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Manufacture Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="manufactureDescription" required=""></textarea>
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
                {{!!Form::close()!!}}

            </div>
        </div>

    </div>

</div>
@endsection