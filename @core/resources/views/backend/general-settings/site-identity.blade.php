@extends('backend.admin-master')
@section('site-title')
    {{__('Site Identity')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Site Identity Settings")}}</h4>
                        <form action="{{route('admin.general.site.identity')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="img-wrapper" style="margin: 20px;">
                                @if(file_exists('assets/uploads/'.get_static_option('site_logo')))
                                    <img src="{{asset('assets/uploads/'.get_static_option('site_logo'))}}" alt="site logo">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="site_logo"><strong>{{__('Site Logo')}}</strong></label>
                                <input type="file" name="site_logo"  class="form-control" id="site_logo">
                                <small class="form-text text-muted">{{__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 160x50')}}</small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                @if(file_exists('assets/uploads/'.get_static_option('site_white_logo')))
                                    <img src="{{asset('assets/uploads/'.get_static_option('site_white_logo'))}}" alt="site logo">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="site_white_logo"><strong>{{__('White Site Logo')}}</strong></label>
                                <input type="file" name="site_white_logo"  class="form-control" id="site_white_logo">
                                <small class="form-text text-muted">{{__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 160x50')}}</small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                @if(file_exists('assets/uploads/'.get_static_option('site_favicon')))
                                    <img src="{{asset('assets/uploads/'.get_static_option('site_favicon'))}}" alt="site logo">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="site_favicon">{{__('Favicon')}}</label>
                                <input type="file" name="site_favicon" class="form-control" id="site_favicon">
                                <small class="form-text text-muted">{{__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 40x40')}}</small>
                            </div>
                            <div class="img-wrapper" style="margin: 20px;">
                                @if(file_exists('assets/uploads/'.get_static_option('site_breadcrumb_bg')))
                                    <img  style="max-width: 300px;" src="{{asset('assets/uploads/'.get_static_option('site_breadcrumb_bg'))}}" alt="breadcrumb image">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="site_favicon">{{__('Breadcrumb Image')}}</label>
                                <input type="file" name="site_breadcrumb_bg" class="form-control" id="site_breadcrumb_bg">
                                <small class="form-text text-muted">{{__('allowed image format: jpg,jpeg,png. max image size 2MB, Recommended image size 1920x600')}}</small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
