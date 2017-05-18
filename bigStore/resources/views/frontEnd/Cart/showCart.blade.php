@extends('frontEnd.master')
@section('title')
Show Cart
@endsection
@section('body')
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Item Total</th>

                    </tr>
                </thead>
                <?php $total = 0; ?>
                @foreach($cartProduct as $cartProduct)
                <tr class="rem1">
                    <td class="invert-closeb">
                        <a href="{{url('/cartDelete/'.$cartProduct->rowId)}}" class="btn btn-danger" title="Remove">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>

                    </td>
                    <td class="invert-image">
                        {{$cartProduct->name}}
                    </td>

                    <td class="invert">
                        TK.{{$cartProduct->price}}
                    </td>
                    <td class="invert">
                        <form action="" method="POST">
                            <div class="input-group">
                                <input type="number" min="1" class="form-control" value="{{$cartProduct->qty}}" name="qty">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary" name="btn">
                                        <span class="glyphicon glyphicon-upload"></span>
                                    </button> 
                                </span>

                            </div>
                        </form>
                    </td>
                    <td class="invert">TK.{{$itemTotal=$cartProduct->price*$cartProduct->qty}}</td>

                </tr>
                <?php $total = $total + $itemTotal; ?>
                @endforeach

                <!--quantity-->

                <!--quantity-->
            </table>
        </div>
        <div class="checkout-left">	

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{url('')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Total Price</h4>
                <ul>
                    <li>Total <i>-</i> <span>TK.{{$total}} </span></li>
                    <?php Session::put('orderTotal',$total);?>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <hr>
        <?php
        $customerId = Session::get('customerId');
        $shippingId = Session::get('shippingId');

        if ($customerId != null && $shippingId!=null) { ?>
            <a href=" {{url('/paymentInfo')}}" class="btn btn-primary pull-right">Checkout</a>
            <?}php else if($customerId != null){?>
            <a href=" {{url('/shippingInfo')}}" class="btn btn-primary pull-right">Checkout</a>
        <?php } else { ?>
             <a href=" {{url('/checkout/index')}}" class="btn btn-primary pull-right">Checkout</a>
        <?php } ?>
    </div>
</div>	
@endsection
