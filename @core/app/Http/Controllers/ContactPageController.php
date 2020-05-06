<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function contact_page_form_area(){
        $all_language = Language::all();
        return view('backend.pages.contact-page.form-section')->with(['all_languages' => $all_language]);
    }
    public function contact_page_update_form_area(Request $request){
        $all_language = Language::all();

        foreach ($all_language as $lang){
            $this->validate($request,[
                'contact_page_'.$lang->slug.'_form_section_title' => 'nullable|string',
                'contact_page_'.$lang->slug.'_form_section_description' => 'nullable|string'
            ]);
            $field = 'contact_page_'.$lang->slug.'_form_section_title';
            $field_two = 'contact_page_'.$lang->slug.'_form_section_description';

            update_static_option('contact_page_'.$lang->slug.'_form_section_title',$request->$field);
            update_static_option('contact_page_'.$lang->slug.'_form_section_description',$request->$field_two);
        }

        return redirect()->back()->with(['msg' => 'Settings Updated..','type' => 'success']);
    }
    public function contact_page_map_area(){
        return view('backend.pages.contact-page.google-map-section');
    }
    public function contact_page_update_map_area(Request $request){
        $this->validate($request,[
            'contact_page_map_section_latitude' => 'required|string',
            'contact_page_map_section_longitude' => 'required|string'
        ]);
        update_static_option('contact_page_map_section_longitude',$request->contact_page_map_section_longitude);
        update_static_option('contact_page_map_section_latitude',$request->contact_page_map_section_latitude);
        return redirect()->back()->with(['msg' => 'Settings Updated..','type' => 'success']);
    }
}
