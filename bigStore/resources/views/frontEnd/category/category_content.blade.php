@extends('frontEnd.master')
@section('title')
Category 
@endsection
@section('body')
<div class="page-head">
	<div class="container">
		<h3></h3>
	</div>
</div>
<div class="men-wear">
    <div class="container">
        <div class="col-lg-12">
            @foreach($publishedCategory as $publishedCategory)
            <div class="col-md-3 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset($publishedCategory->productImage)}}" alt="" class="pro-image-front" height="220" width="220">
                        <img src="{{asset($publishedCategory->productImage)}}" alt="" class="pro-image-back" height="220" width="220">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{($publishedCategory->productName)}}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">TK.{{($publishedCategory->productPrice)}}</span>

                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                    </div>
                </div>
                <hr>
            </div>
            @endforeach

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="pagination-grid text-right">
            <ul class="pagination paging">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
        </div>
    </div>
</div>	
@endsection