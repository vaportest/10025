<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $all_brand = Brand::all();
        return view('backend.pages.brand')->with(['all_brand' => $all_brand]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required|string|max:191',
            'image' => 'required|mimes:jpg,jpeg,png|max:2064',
        ]);

        $id = Brand::create($request->all())->id;
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'brand-image-'.$id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/brands/', $image_name);
                Brand::find($id)->update(['image' => $image_extenstion]);
            }
        }

        return redirect()->back()->with(['msg' => 'New Brand Added...','type' => 'success']);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title' => 'required|string|max:191',
            'image' => 'mimes:jpg,jpeg,png|max:2064',
        ]);

        Brand::find($request->id)->update(['title' => $request->title]);
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_name = 'brand-image-'.$request->id.'.' . $image_extenstion;
            if (check_image_extension($image)) {
                $image->move('assets/uploads/brands/', $image_name);
                Brand::find($request->id)->update(['image' => $image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'Brands Updated...','type' => 'success']);
    }

    public function delete($id){
        $brand = Brand::find($id);
        if (file_exists('assets/uploads/brands/brand-image-'.$id.'.'.$brand->image)){
            unlink('assets/uploads/brands/brand-image-'.$id.'.'.$brand->image);
        }
        $brand->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...','type' => 'danger']);
    }
}
