<?php

namespace App\Http\Controllers;

use App\HeaderSlider;
use App\Language;
use Illuminate\Http\Request;

class HeaderSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $all_header_slider = HeaderSlider::all()->groupBy('lang');
        $all_language = Language::all();
        return view('backend.pages.home.header')->with(['all_header_slider' => $all_header_slider,'all_languages' => $all_language]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'btn_01_text' => 'nullable|string|max:191',
            'btn_01_url' => 'nullable|string|max:191',
            'btn_01_status' => 'nullable|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpg,jpeg,png|max:5064',
            'lang' => 'required|string|max:191'
        ]);

        $id = HeaderSlider::create($request->all())->id;
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'header-slider-image-'.$id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/header-sliders/', $image_name);
                HeaderSlider::find($id)->update(['image' => $image_extenstion]);
            }
        }

        return redirect()->back()->with(['msg' => 'New Header Slider Added...','type' => 'success']);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title' => 'required|string|max:191',
            'btn_01_text' => 'nullable|string|max:191',
            'btn_01_url' => 'nullable|string|max:191',
            'btn_01_status' => 'nullable|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpg,jpeg,png|max:5064',
            'lang' => 'required|string|max:191'
        ]);

        HeaderSlider::find($request->id)->update($request->all());
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'header-slider-image-'.$request->id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/header-sliders/', $image_name);
                HeaderSlider::find($request->id)->update(['image' => $image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'Header Slider Updated...','type' => 'success']);
    }

    public function delete($id){
        $brand = HeaderSlider::find($id);
        if (file_exists('assets/uploads/header-sliders/header-slider-image-'.$id.'.'.$brand->image)){
            unlink('assets/uploads/header-sliders/header-slider-image-'.$id.'.'.$brand->image);
        }
        $brand->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...','type' => 'danger']);
    }
}
