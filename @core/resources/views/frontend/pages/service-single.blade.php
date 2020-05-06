@extends('frontend.frontend-page-master')
@section('og-meta')
    <meta property="og:url"  content="{{route('frontend.services.single',['id' => $service_item->id,'any' => Str::slug($service_item->title)])}}" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="{{$service_item->title}}" />
    @if(file_exists('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image))
        <meta property="og:image" content="{{asset('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)}}" />
    @endif
@endsection
@section('site-title')
    {{$service_item->title}}
 @endsection
 @section('page-title')
     {{__('Service Details')}}
@endsection
@section('content')

    <div class="page-content service-details padding-top-120 padding-bottom-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-item">
                        <div class="thumb">
                            @if(file_exists('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image))
                                <img src="{{asset('assets/uploads/services/service-large-'.$service_item->id.'.'.$service_item->image)}}" alt="{{$service_item->title}}">
                            @endif
                        </div>
                        <h2 class="main-title">{{$service_item->title}}</h2>
                       <div class="service-description">
                           {!! $service_item->description !!}
                       </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-widget">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">{{__('Services')}}</h3>
                            <ul>
                                @foreach($service_category as $data)
                                    <li @if($data->id == $service_item->category->id ) class="active" @endif><a href="{{route('frontend.services.category',['id' => $data->id, 'any' => Str::slug($data->name)])}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
