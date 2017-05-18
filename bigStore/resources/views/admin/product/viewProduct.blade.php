@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center text-white">{{Session::get('message')}}</h1>
            </div>
            <div class="panel-body">
                <table width='100%' class="table-bordered table-striped table-hover">
                    <tr>
                        <th>Product Id</th>
                        <td>{{$productsById->id}}</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{$productsById->productName}}</td>
                    </tr>
                    <tr>
                        <th>Category Name</th>
                        <td>{{$productsById->categoryName}}</td>
                    </tr>
                    <tr>
                        <th>Manufacture Name</th>
                        <td>{{$productsById->manufactureName}}</td>
                    </tr>
                    <tr>
                        <th>Product Price</th>
                        <td>TK.{{$productsById->productPrice}}</td>
                    </tr>
                    <tr>
                        <th>Product Quantity</th>
                        <td>{{$productsById->productQuantity}}</td>
                    </tr>
                    <tr>
                        <th>Product Description</th>
                        <td>{{$productsById->productDescription}}</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td><img src="{{asset($productsById->productImage)}}"></td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{$productsById->publicationStatus}}</td>
                    </tr>
                </table>
            </div>
        </div> 
    </div>
    
</div>
@endsection