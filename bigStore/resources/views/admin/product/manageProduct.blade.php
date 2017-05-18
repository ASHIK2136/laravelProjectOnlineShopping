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
                    <thead class="text-white">
                    <th>SL No</th>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Manufacture Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $i=0;?>
                        @foreach($productsInfo as $product)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$product->productName}}</td>
                            <td>{{$product->categoryName}}</td>
                            <td>{{$product->manufactureName}}</td>
                            <td>{{$product->productPrice}}</td>
                            <td>{{$product->productQuantity}}</td>
                            <td>{{$product->productDescription}}</td>
                            <td>{{$product->productImage}}</td>
                            <td>{{$product->publicationStatus==1? 'Published':'Unpublished'}}</td>
                            <td>
                                <a href="{{url('/editProduct/'.$product->id)}}" class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span> 
                                </a>
                                <a href="{{url('/deleteProduct/'.$product->id)}}" class="btn btn-danger" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span> 
                                </a>
                                <a href="{{url('/viewProduct/').$product->id}}" class="btn btn-primary" title="Edit">
                                    <span class="glyphicon glyphicon-search"></span> 
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    
</div>
@endsection