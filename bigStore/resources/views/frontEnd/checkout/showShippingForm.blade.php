@extends('frontEnd.master')
@section('title')
Shipping
@endsection

@section('body')
<div class="row">
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Shipping Form Here</h3>

            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'newShipping', 'method'=>'POST', 'class'=>'form-horizontal','name'=>'newShippingForm'])!!}
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Full Name</label>
                    <div class="col-md-9">
                        <input type="text" value="{{$customerById->firstName.''.$customerById->lastName}}" name="fullName" class="form-control" required="">
                    </div>
                </div>
             
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Email Address</label>
                    <div class="col-md-9">
                        <input type="email" value="{{$customerById->emailAddress}}" name="emailAddress" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Address</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="address" required="">{{$customerById->address}}</textarea>
                    </div>
                </div>
              <div class="form-group">
                    <label class="col-md-3 control-label text-white">Phone Number</label>
                    <div class="col-md-9">
                        <input type="number" value="{{$customerById->phoneNumber}}" name="phoneNumber" class="form-control" required="">
                    </div>
                </div>
                   <div class="form-group">
                    <label class="col-md-3 control-label text-white">District Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="districtName">
                            <option>--Select District Name--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Sadarpur">Sadarpur</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class=" col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-success btn-block" value="submit">
                    </div>
                </div>
                {!!Form::close()!!}

            </div>
        </div>

    </div>
    </div>
<script>
    document.forms['newShippingForm'].elements['districtName'].value='{{$customerById->districtName}}'
</script>
@endsection