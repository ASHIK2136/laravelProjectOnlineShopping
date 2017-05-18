<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\product;
 use App\Slider;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderPublication = Slider::where('publicationStatus',1)->get();
       $publishedProducts= product::where('publicationStatus',1)->get();
        return view('frontEnd.home.home_Content',['publishedProducts'=>$publishedProducts,'sliderPublications'=>$sliderPublication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $publishedCategory = product::where('categoryId',$id)
                ->where('publicationStatus',1)
                ->get();
        return view('frontEnd.category.category_content',['publishedCategory'=>$publishedCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function productDetails($id){
        $productById= product::find($id);
        return view('frontEnd.product.productDetails',['productById'=>$productById]);
    }
}
