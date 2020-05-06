<?php

namespace App\Http\Controllers;

use App\Language;
use App\TeamMember;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $all_language = Language::all();
        $all_team_member = TeamMember::all()->groupBy('lang');
        return view('backend.pages.team-member')->with(['all_team_member' => $all_team_member,'all_languages' => $all_language]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'image' => 'mimes:jpg,jpeg,png',
            'icon_one' => 'nullable|string|max:191',
            'icon_two' => 'nullable|string|max:191',
            'icon_three' => 'nullable|string|max:191',
            'icon_one_url' => 'nullable|string|max:191',
            'icon_two_url' => 'nullable|string|max:191',
            'icon_three_url' => 'nullable|string|max:191'
        ]);
        $id = TeamMember::create($request->all())->id;
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'team-member-grid-'.$id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/team-member/';
                $resize_grid_image = Image::make($image)->resize(270,280);
                $resize_grid_image->save($folder_path.$image_grid);
                TeamMember::where('id',$id)->update(['image'=>$image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'New Team Member Added...', 'type' => 'success']);
    }

    public function update(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'designation' => 'required|string|max:191',
            'image' => 'mimes:jpg,jpeg,png',
            'icon_one' => 'nullable|string|max:191',
            'icon_two' => 'nullable|string|max:191',
            'icon_three' => 'nullable|string|max:191',
            'icon_one_url' => 'nullable|string|max:191',
            'icon_two_url' => 'nullable|string|max:191',
            'icon_three_url' => 'nullable|string|max:191'
        ]);
        TeamMember::find($request->id)->update($request->all());
        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'team-member-grid-'.$request->id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/team-member/';
                $resize_grid_image = Image::make($image)->resize(270,280);
                $resize_grid_image->save($folder_path.$image_grid);
                TeamMember::where('id',$request->id)->update(['image'=>$image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'Key Feature Updated...', 'type' => 'success']);
    }

    public function delete($id)
    {
       $team =  TeamMember::find($id);
       if (file_exists('assets/uploads/team-member/team-member-grid-'.$id.'.'.$team->image)){
           unlink('assets/uploads/team-member/team-member-grid-'.$id.'.'.$team->image);
       }
       $team->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...', 'type' => 'danger']);
    }
}
