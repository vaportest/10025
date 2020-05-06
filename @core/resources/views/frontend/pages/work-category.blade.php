@extends('frontend.frontend-page-master')
@section('site-title')
    {{__('Works Category: ')}} {{$category_name}}
@endsection
@section('page-title')
    {{__('Works Category: ')}} {{$category_name}}
@endsection
@section('content')
    <div class="page-content portfolio padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-masonry-wrapper">
                        <ul class="portfolio-menu">
                            <li class="active" data-filter="*">{{__('All')}}</li>
                            @foreach($all_work_category as $data)
                                <li data-filter=".{{Str::slug($data->name)}}">{{$data->name}}</li>
                            @endforeach
                        </ul>
                        <div class="portfolio-masonry">
                            @foreach($all_work as $data)
                                <div class="col-lg-4 col-md-6 masonry-item {{get_work_category_by_id($data->id,'slug')}}">
                                    <div class="single-work-item">
                                        <div class="thumb">
                                            @if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image))
                                                <img src="{{asset('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                            @endif
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="{{route('frontend.work.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"> {{$data->title}}</a></h4>
                                            <div class="cats">
                                                @php
                                                    $all_cat_of_post = get_work_category_by_id($data->id);
                                                @endphp
                                                @foreach($all_cat_of_post as $key => $work_cat)
                                                    <a href="{{route('frontend.works.category',['id' => $key,'any'=> Str::slug($work_cat)])}}">{{$work_cat}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="post-pagination-wrapper">
                        {{$all_work->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
