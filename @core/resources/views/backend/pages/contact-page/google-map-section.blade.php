@extends('backend.admin-master')
@section('site-title')
    {{__('Google Mp Section')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Google Map Section Settings')}}</h4>
                        <p class="margin-bottom-30">{{__('Don\'t forget to put your google map api key in general setting > Third Party Scripts')}}</p>
                        <form action="{{route('admin.contact.page.map')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="contact_page_map_section_latitude">{{__('Latitude')}}</label>
                                <input type="text" name="contact_page_map_section_latitude" value="{{get_static_option('contact_page_map_section_latitude')}}" class="form-control" id="contact_page_map_section_latitude">
                            </div>
                            <div class="form-group">
                                <label for="contact_page_map_section_longitude">{{__('Longitude')}}</label>
                                <input type="text" name="contact_page_map_section_longitude" value="{{get_static_option('contact_page_map_section_longitude')}}" class="form-control" id="contact_page_map_section_longitude">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Settings')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
