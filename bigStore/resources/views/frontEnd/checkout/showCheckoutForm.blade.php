@extends('frontEnd.master')
@section('title')
checkout
@endsection

@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="well lead text-center text-success">
            You have to login to complete your valuable order.If you are not registered please register first.
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Login Form Here</h3>

            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'newCategory', 'method'=>'POST', 'class'=>'form-horizontal'])!!}
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Email Address</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control" required="">
                    </div>
                </div>
             
        
                <div class="form-group">
                    <div class=" col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-success btn-block" value="Login">
                    </div>
                </div>
                {!!Form::close()!!}

            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Registation Form Here</h3>

            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'newCustomer', 'method'=>'POST', 'class'=>'form-horizontal'])!!}
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">First Name</label>
                    <div class="col-md-9">
                        <input type="text" name="firstName" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" name="lastName" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Email Address</label>
                    <div class="col-md-9">
                        <input type="email" name="emailAddress" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Address</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="address" required=""></textarea>
                    </div>
                </div>
              <div class="form-group">
                    <label class="col-md-3 control-label text-white">Phone Number</label>
                    <div class="col-md-9">
                        <input type="number" name="phoneNumber" class="form-control" required="">
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
                        <input type="submit" class="btn btn-success btn-block" value="Registation">
                    </div>
                </div>
                {!!Form::close()!!}

            </div>
        </div>

    </div>


</div>
<div class="row">
    
</div>
@endsection

