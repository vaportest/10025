@extends('backend.admin-master')
@section('site-title')
    {{__('Testimonial Area')}}
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
                        <h4 class="header-title">{{__('Testimonial Area Settings')}}</h4>
                        <form action="{{route('admin.homeone.testimonial')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="img-wrapper">
                                    @if(file_exists('assets/uploads/'.get_static_option('home_01_testimonial_bg')))
                                        <img src="{{asset('assets/uploads/'.get_static_option('home_01_testimonial_bg'))}}" style="max-width: 100px" id="preview_image" alt="">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="home_01_testimonial_bg">{{__('Image')}}</label>
                                    <input type="file" class="form-control"  id="home_01_testimonial_bg"  name="home_01_testimonial_bg">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Settings')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

