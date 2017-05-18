@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                {{!!Form::open(['url'=>'storeProduct','method'=>'PSOT','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}}
                <div class="form-group">
                    <label class="control-label col-md-3 text-white text-uppercase">Product Name</label>
                    <div class="col-md-9">
                        <input type="text" name="productName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-white text-uppercase">Category Name</label>
                    <div class="col-md-9">
                         
                        <select class="form-control" name="categoryId">
                            <option>--Select Category Name--</option>
                            @foreach($publishedCategories as $publishedCategory)
                            <option  value="{{$publishedCategory->id}}">{{$publishedCategory->categoryName}}</option>
                            @endforeach
                        </select>
                          
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-white text-uppercase">Manufacture Name</label>
                    <div class="col-md-9">
                       
                        <select class="form-control" name="manufactureId">
                            <option>--Select Manufacture Name--</option>
                             @foreach($publishedManufacturer as $publishedManufacture)
                            <option  value="{{$publishedManufacture->id}}">{{$publishedManufacture->manufactureName}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-white text-uppercase">Product Price</label>
                    <div class="col-md-9">
                        <input type="number" name="productPrice" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-white text-uppercase">Product Quantity</label>
                    <div class="col-md-9">
                        <input type="number" name="productQuantity" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label text-white">Product Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="productDescription" required=""></textarea>
                    </div>
                </div>
                      <div class="form-group">
                    <label class="col-md-3 control-label text-white">Product Image</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="productImage" >
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
                        <input type="submit" class="btn btn-success btn-block" value="Save Product Info">
                    </div>
                </div>
                {{!!Form::close()!!}}
            </div>

        </div>

    </div>

</div>
@endsection