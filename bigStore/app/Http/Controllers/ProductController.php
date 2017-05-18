<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\manufacture;
use App\product;
use DB;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct() {
        $publishedCategories = category::where('publicationStatus', 1)->get();
        $publishedManufacturer = manufacture::where('publicationStatus', 1)->get();
        return view('admin.product.addProduct', ['publishedCategories' => $publishedCategories, 'publishedManufacturer' => $publishedManufacturer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request) {
        $productImage = $request->file('productImage');
        $imageName = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath,$imageName);
        $imageUrl =$uploadPath.$imageName;

        $Products = new product();
        $Products->productName = $request->productName;
        $Products->categoryId = $request->categoryId;
        $Products->manufactureId = $request->manufactureId;
        $Products->productPrice = $request->productPrice;
        $Products->productQuantity = $request->productQuantity;
        $Products->productDescription = $request->productDescription;
        $Products->productImage = $imageUrl;
        $Products->publicationStatus = $request->publicationStatus;
        $Products->save();
        return redirect('/addProduct')->with('message', 'Product information Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manageProduct() {

        $productsInfo = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.categoryId')
                ->join('manufactures', 'manufactures.id', '=', 'products.manufactureId')
                ->select('products.*', 'categories.categoryName', 'manufactures.manufactureName')
                ->get();
        return view('admin.product.manageProduct', ['productsInfo' => $productsInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct($id) {
        $products = product::find($id);
        $products->delete();
        return redirect('/manageProduct')->with('message', 'Product information Save Successfully');
    }
    public function viewProduct($id){
        $productsById = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.categoryId')
                ->join('manufactures', 'manufactures.id', '=', 'products.manufactureId')
                ->where('products.id',$id)
                ->select('products.*', 'categories.categoryName', 'manufactures.manufactureName')
                
                ->first();
//        echo '<pre>';
//        print_r($productsById);
//        exit();
        return view('admin.product.viewProduct',['productsById'=>$productsById]);
    }

}
