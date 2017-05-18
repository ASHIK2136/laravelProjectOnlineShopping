<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manufacture;

class ManufactureController extends Controller
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
    public function createManufacture()
    {
       return view('admin.manufacture.addManufacture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeManufacture(Request $request)
    {
        $manufacture = new manufacture();
        $manufacture->manufactureName=$request->manufactureName;
        $manufacture->manufactureDescription=$request->manufactureDescription;
        $manufacture->publicationStatus=$request->publicationStatus;
        $manufacture->save();
        return redirect('/addManufacture')->with('message','Manufacture Information Save Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showManufacture()
    {
         $manufactures = manufacture::all();
        return view('admin.manufacture.showManufacture',['manufactures'=>$manufactures]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editManufacture($id)
    {
        $Manufacture = manufacture::where('id',$id)->first();
        return view('admin.manufacture.editManufacture',['Manufacture'=>$Manufacture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateManufacture(Request $request)
    {
        $manufacture = manufacture::find($request->manufactureId);
        $manufacture->manufactureName=$request->manufactureName;
        $manufacture->manufactureDescription=$request->manufactureDescription;
        $manufacture->publicationStatus=$request->publicationStatus;
        $manufacture->save();
        return redirect('/manageManufacture')->with('message','Manufacture Information Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteManufacture($id)
    {
         $manufacture = manufacture::find($id);
         $manufacture->delete();
         return redirect('/manageManufacture')->with('message','Manufacture Information Update Successfully');
    }
}
