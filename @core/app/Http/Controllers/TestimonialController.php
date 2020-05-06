<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Donor;
use App\Language;
use App\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $all_language = Language::all();
        $all_testimonial = Testimonial::all()->groupBy('lang');
        return view('backend.pages.testimonial')->with([
            'all_testimonial' => $all_testimonial,
            'all_languages' => $all_language,
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
           'name' => 'required|string|max:191',
           'lang' => 'required|string|max:191',
           'description' => 'required',
           'designation' => 'string|max:191',
           'image' => 'mimes:jpg,jpeg,png|max:2064',
        ]);
        $id = Testimonial::create([
            'name' => $request->name,
            'description' => $request->description,
            'lang' => $request->lang,
            'designation' => $request->designation
        ])->id;
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'testimonial-grid-'.$id.'.'.$image_extenstion;
            $image_large = 'testimonial-large-'.$id.'.'.$image_extenstion;
            $image_small = 'testimonial-small-'.$id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/testimonial/';
                $resize_grid_image = Image::make($image)->resize(80,80);
                $resize_grid_image->save($folder_path.$image_grid);
                Testimonial::where('id',$id)->update(['image'=>$image_extenstion]);
            }
        }

        return redirect()->back()->with(['msg' => 'New Testimonial Added Success','type' => 'success']);
    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'description' => 'required',
            'designation' => 'string|max:191',
            'lang' => 'string|max:191',
        ]);
         Testimonial::find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'lang' => $request->lang,
            'designation' => $request->designation
        ]);

        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'testimonial-grid-'.$request->id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/testimonial/';
                $resize_grid_image = Image::make($image)->resize(80,80);
                $resize_grid_image->save($folder_path.$image_grid);
                Testimonial::where('id',$request->id)->update(['image'=>$image_extenstion]);
            }
        }

        return redirect()->back()->with(['msg' => 'Testimonial Update Success','type' => 'success']);
    }

    public function delete(Request $request,$id){

        $testimonial = Testimonial::find($id);
        if (file_exists('assets/uploads/testimonial/testimonial-grid-'.$id.'.'.$testimonial->image)){
            unlink('assets/uploads/testimonial/testimonial-grid-'.$id.'.'.$testimonial->image);
        }
        $testimonial->delete();

        return redirect()->back()->with(['msg' => 'Testimonial Delete Success','type' => 'danger']);
    }
}
