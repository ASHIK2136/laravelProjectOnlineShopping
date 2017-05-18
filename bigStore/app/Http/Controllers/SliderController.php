<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
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
    public function createSlider()
    {
        return view('frontEnd.slide.Slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSliderImage(Request $request)
    {
       $sliderImage = $request->file('sliderImage');
        $ImageName = $sliderImage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/sliderImage/';
        $sliderImage->move($uploadPath, $ImageName);
        $imageUrl=$uploadPath.$ImageName;
        
        $Slider= new Slider();
        $Slider->sliderImage=$imageUrl;
        $Slider->publicationStatus=$request->publicationStatus;
        $Slider->save();
        return redirect('/addSlider')->with('message','SliderImage Save Successfully');
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manageSliderImage()
    {
        $sliders= Slider::all();
        return view('frontEnd.slide.manageSlider',['sliders'=>$sliders]);
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
    public function deleteSlider($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect('/manageSlider')->with('message','SliderImage Save Successfully');
    }
}
