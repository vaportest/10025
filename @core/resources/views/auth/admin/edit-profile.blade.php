@extends('backend.admin-master')
@section('site-title')
    {{__('Edit Profile')}}
@endsection
@section('content')
    <div class="main-content-inner margin-top-30">
        <div class="row">
            <div class="col-lg-12">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('admin.profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="username">{{__('Username')}}</label>
                                <input type="text" class="form-control" readonly value="{{auth()->user()->username}} ">
                            </div>
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{auth()->user()->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{__('Email')}}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{auth()->user()->email}} ">
                            </div>
                            <div class="img-wrap">
                                @if (file_exists('assets/uploads/admins/admin-pic-'.auth()->user()->id.'.'.auth()->user()->image))
                                    <img style="max-width: 80px;border: 1px solid #e2e2e2;margin-bottom: 10px;"
                                         src="{{asset('assets/uploads/admins/admin-pic-'.auth()->user()->id.'.'.auth()->user()->image)}}"
                                         alt="{{auth()->user()->name}}">
                                @endif
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">{{__('Image')}}</label>
                                <small
                                    class="text text-danger">{{__('Only Accept: jpg,png.jpeg. Size less than 2MB')}}</small>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{__('Save changes')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
