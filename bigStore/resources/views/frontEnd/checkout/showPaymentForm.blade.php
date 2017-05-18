@extends('frontEnd.master')
@section('title')
Payment
@endsection

@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Payment Info form</h3>

            </div>
            <div class="panel-body">
                {!!Form::open(['url'=>'newOrder', 'method'=>'POST', 'class'=>'form-horizontal'])!!}
                {{csrf_field()}}
                <div class="form-group">
                    <div class=" col-md-offset-3 col-md-9">
                        <label><input type="radio" name="paymentType" value="cashOnDelivery">cashOnDelivery</label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <label><input type="radio" name="paymentType" value="cashOnDelivery">Paypal</label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-2">
                        <label><input type="radio" name="paymentType" value="cashOnDelivery">Bkash</label> 
                    </div>
                </div>





                <div class="form-group">
                    <div class=" col-md-offset-3 col-md-3">
                        <input type="submit" class="btn btn-success btn-block" value="Confirm Order">
                    </div>
                </div>
                {!!Form::close()!!}

            </div>
        </div>

    </div>
</div>
@endsection