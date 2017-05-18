<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory()
    {
        return view('admin.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $Category = new Category();
        $Category->categoryName=$request->categoryName;
        $Category->categoryDescription=$request->categoryDescription;
        $Category->publicationStatus=$request->publicationStatus;
        $Category->save();
        return redirect('/addCategory')->with('message','Category Information Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory()
    {
       $categories = category::all();
       return view('admin.category.manageCategory',['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory($id)
    {
        $category =category::where('id',$id)->first();
        return view('admin.category.editCategory',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request)
    {
       $Category = category::find($request->categoryId);
       $Category->categoryName=$request->categoryName;
        $Category->categoryDescription=$request->categoryDescription;
        $Category->publicationStatus=$request->publicationStatus;
        $Category->save();
        return redirect('/manageCategory')->with('message','Category Information Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCategory($id)
    {
        $Category = category::find($id);
        $Category->delete();
         return redirect('/manageCategory')->with('message','Category Information delete Successfully');
    }
}
