@extends('backend.admin-master')
@section('site-title')
    {{__('Page Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Page Settings")}}</h4>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                             @endforeach
                        @endif
                        <form action="{{route('admin.general.page.settings')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($all_languages as $key => $lang)
                                        <a class="nav-item nav-link @if($key == 0) active @endif" id="nav-home-tab" data-toggle="tab" href="#nav-home-{{$lang->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$lang->name}}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                @foreach($all_languages as $key => $lang)
                                    <div class="tab-pane fade @if($key == 0) show active @endif" id="nav-home-{{$lang->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                       <div class="accordion-wrapper">
                                           <div id="accordion-{{$lang->slug}}">
                                               <div class="card">
                                                   <div class="card-header" id="about_page_{{$lang->slug}}">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#about_page_content_{{$lang->slug}}" aria-expanded="true" >
                                                               <span class="page-title">@if(!empty(get_static_option('about_page_'.$lang->slug.'_name'))) {{get_static_option('about_page_'.$lang->slug.'_name')}} @else {{__('About')}}  @endif</span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="about_page_content_{{$lang->slug}}" class="collapse show"  data-parent="#accordion-{{$lang->slug}}">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="about_page_{{$lang->slug}}_name">{{__('Name')}}</label>
                                                               <input type="text" class="form-control page-name" id="about_page_{{$lang->slug}}_name" value="{{get_static_option('about_page_'.$lang->slug.'_name')}}" name="about_page_{{$lang->slug}}_name" placeholder="{{__('Name')}}" >
                                                           </div>
                                                            <div class="from-group">
                                                                <label for="about_page_{{$lang->slug}}_slug">{{__('Slug')}}</label>
                                                                <input type="text" class="form-control" name="about_page_{{$lang->slug}}_slug" id="about_page_{{$lang->slug}}_slug" value="{{get_static_option('about_page_'.$lang->slug.'_slug')}}"  placeholder="{{__('Slug')}}" >
                                                                <small>{{__('slug example: about-page')}}</small>
                                                            </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="service_page_{{$lang->slug}}">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#service_page_content_{{$lang->slug}}" aria-expanded="false" >
                                                               <span class="page-title">@if(!empty(get_static_option('service_page_'.$lang->slug.'_name'))) {{get_static_option('service_page_'.$lang->slug.'_name')}} @else {{__('Service')}}  @endif</span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="service_page_content_{{$lang->slug}}" class="collapse"  data-parent="#accordion-{{$lang->slug}}">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="service_page_{{$lang->slug}}_name">{{__('Name')}}</label>
                                                               <input type="text" class="form-control page-name" id="service_page_{{$lang->slug}}_name" value="{{get_static_option('service_page_'.$lang->slug.'_name')}}" name="service_page_{{$lang->slug}}_name" placeholder="{{__('Name')}}" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="service_page_{{$lang->slug}}_slug">{{__('Slug')}}</label>
                                                               <input type="text" class="form-control" name="service_page_{{$lang->slug}}_slug" id="service_page_{{$lang->slug}}_slug" value="{{get_static_option('service_page_'.$lang->slug.'_slug')}}"  placeholder="{{__('Slug')}}" >
                                                               <small>{{__('slug example: service-page')}}</small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="work_page_{{$lang->slug}}">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#work_page_content_{{$lang->slug}}" aria-expanded="false" >
                                                               <span class="page-title">@if(!empty(get_static_option('work_page_'.$lang->slug.'_name'))) {{get_static_option('work_page_'.$lang->slug.'_name')}} @else {{__('Work')}}  @endif</span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="work_page_content_{{$lang->slug}}" class="collapse"  data-parent="#accordion-{{$lang->slug}}">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="work_page_{{$lang->slug}}_name">{{__('Name')}}</label>
                                                               <input type="text" class="form-control page-name" id="work_page_{{$lang->slug}}_name" value="{{get_static_option('work_page_'.$lang->slug.'_name')}}" name="work_page_{{$lang->slug}}_name" placeholder="{{__('Name')}}" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="work_page_{{$lang->slug}}_slug">{{__('Slug')}}</label>
                                                               <input type="text" class="form-control" name="work_page_{{$lang->slug}}_slug" id="work_page_{{$lang->slug}}_slug" value="{{get_static_option('work_page_'.$lang->slug.'_slug')}}"  placeholder="{{__('Slug')}}" >
                                                               <small>{{__('slug example: work-page')}}</small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="team_page_{{$lang->slug}}">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#team_page_content_{{$lang->slug}}" aria-expanded="false" >
                                                               <span class="page-title">@if(!empty(get_static_option('team_page_'.$lang->slug.'_name'))) {{get_static_option('team_page_'.$lang->slug.'_name')}} @else {{__('Team')}}  @endif</span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="team_page_content_{{$lang->slug}}" class="collapse"  data-parent="#accordion-{{$lang->slug}}">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="team_page_{{$lang->slug}}_name">{{__('Name')}}</label>
                                                               <input type="text" class="form-control page-name" id="team_page_{{$lang->slug}}_name" value="{{get_static_option('team_page_'.$lang->slug.'_name')}}" name="team_page_{{$lang->slug}}_name" placeholder="{{__('Name')}}" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="team_page_{{$lang->slug}}_slug">{{__('Slug')}}</label>
                                                               <input type="text" class="form-control" name="team_page_{{$lang->slug}}_slug" id="team_page_{{$lang->slug}}_slug" value="{{get_static_option('team_page_'.$lang->slug.'_slug')}}"  placeholder="{{__('Slug')}}" >
                                                               <small>{{__('slug example: team-page')}}</small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="card">
                                                   <div class="card-header" id="faq_page_{{$lang->slug}}">
                                                       <h5 class="mb-0">
                                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq_page_content_{{$lang->slug}}" aria-expanded="false" >
                                                               <span class="page-title">@if(!empty(get_static_option('faq_page_'.$lang->slug.'_name'))) {{get_static_option('faq_page_'.$lang->slug.'_name')}} @else {{__('Faq')}}  @endif</span>
                                                           </button>
                                                       </h5>
                                                   </div>
                                                   <div id="faq_page_content_{{$lang->slug}}" class="collapse"  data-parent="#accordion-{{$lang->slug}}">
                                                       <div class="card-body">
                                                           <div class="from-group">
                                                               <label for="faq_page_{{$lang->slug}}_name">{{__('Name')}}</label>
                                                               <input type="text" class="form-control page-name" id="faq_page_{{$lang->slug}}_name" value="{{get_static_option('faq_page_'.$lang->slug.'_name')}}" name="faq_page_{{$lang->slug}}_name" placeholder="{{__('Name')}}" >
                                                           </div>
                                                           <div class="from-group">
                                                               <label for="faq_page_{{$lang->slug}}_slug">{{__('Slug')}}</label>
                                                               <input type="text" class="form-control" name="faq_page_{{$lang->slug}}_slug" id="faq_page_{{$lang->slug}}_slug" value="{{get_static_option('faq_page_'.$lang->slug.'_slug')}}"  placeholder="{{__('Slug')}}" >
                                                               <small>{{__('slug example: faq-page')}}</small>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function (e) {
            $('.page-name').bind('change paste keyup',function (e) {
                $(this).parent().parent().parent().prev().find('.page-title').text($(this).val());
            })
        })
    </script>
@endsection