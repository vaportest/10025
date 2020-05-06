<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBuilderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function quote_form_index(){
        return view('backend.form-builder.quote-form');
    }
    public function update_quote_form(Request $request){
         unset($request['_token']);
        $json_encoded_data = json_encode($request->all());
        update_static_option('quote_page_form_fields',$json_encoded_data);
        return redirect()->back()->with(['msg' => 'Form Updated...','type' => 'success']);
    }

    public function order_form_index(){
        return view('backend.form-builder.order-form');
    }
    public function update_order_form(Request $request){
        unset($request['_token']);
        $json_encoded_data = json_encode($request->all());
        update_static_option('order_page_form_fields',$json_encoded_data);
        return redirect()->back()->with(['msg' => 'Form Updated...','type' => 'success']);
    }
    public function contact_form_index(){
        return view('backend.form-builder.contact-form');
    }
    public function update_contact_form(Request $request){
        unset($request['_token']);
        $json_encoded_data = json_encode($request->all());
        update_static_option('contact_page_form_fields',$json_encoded_data);
        return redirect()->back()->with(['msg' => 'Form Updated...','type' => 'success']);
    }

    public function call_back_form_index(){
        return view('backend.form-builder.call-back-form');
    }
    public function update_call_back_form(Request $request){
        unset($request['_token']);
        $json_encoded_data = json_encode($request->all());
        update_static_option('call_back_page_form_fields',$json_encoded_data);
        return redirect()->back()->with(['msg' => 'Form Updated...','type' => 'success']);
    }
}
