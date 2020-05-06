<?php

namespace App\Http\Controllers;

use App\KeyFeatures;
use App\KnowAbout;
use App\Language;
use Illuminate\Http\Request;

class KnowAboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'link' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpe,jpeg,png|max:6064'
        ]);
        $id = KnowAbout::create($request->all())->id;
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $request->image->getClientOriginalExtension();
            $image_ext = $image_extenstion;
            $image_name = 'know-about-pic-' . $id . '.' . $image_extenstion;
            if (check_image_extension($request->image)) {
                $image->move('assets/uploads/know-about/', $image_name);
                KnowAbout::where('id',$id)->update(['image' => $image_ext]);
            }
        }
        return redirect()->back()->with(['msg' => 'New Know About Item Added...','type' => 'success']);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'link' => 'required|string|max:191',
            'description' => 'required|string',
            'image' => 'mimes:jpe,jpeg,png|max:6064'
        ]);
        KnowAbout::find($request->id)->update($request->all());
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $request->image->getClientOriginalExtension();
            $image_ext = $image_extenstion;
            $image_name = 'know-about-pic-' . $request->id . '.' . $image_extenstion;
            if (check_image_extension($request->image)) {
                $image->move('assets/uploads/know-about/', $image_name);
                KnowAbout::where('id',$request->id)->update(['image' => $image_ext]);
            }
        }
        return redirect()->back()->with(['msg' => 'Know About Item Updated...','type' => 'success']);
    }

    public function delete($id){
        $known_about = KnowAbout::find($id);
        if (file_exists('assets/uploads/know-about/know-about-pic-'.$id.'.'.$known_about->image)){
            unlink('assets/uploads/know-about/know-about-pic-'.$id.'.'.$known_about->image);
        }
        $known_about->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...','type' => 'danger']);
    }

}
