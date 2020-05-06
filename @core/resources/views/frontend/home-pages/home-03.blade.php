@if(!empty(get_static_option('home_page_support_bar_section_status')))
<div class="info-bar-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-bar-inner">
                    <div class="left-content">
                        <ul class="info-items-two">
                            @foreach($all_support_item as $data)
                                <li>
                                    <div class="single-info-item">
                                        <div class="icon">
                                            <i class="{{$data->icon}}"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{$data->title}}: <span class="details">{{$data->details}}</span></h5>

                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="right-content">
                        <ul class="social-icon">

                            <li class="title">{{__('Follow:')}}</li>
                            @foreach($all_social_item as $data)
                                <li><a href="{{$data->url}}"><i class="{{$data->icon}}"></i></a></li>
                            @endforeach
                        </ul>
                        <select id="langchange">
                            @foreach($all_language as $lang)
                                <option @if(session()->get('lang') == $lang->slug) selected @endif value="{{$lang->slug}}">{{$lang->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="header-top-style-03">
    <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
        <div class="container nav-container">
            <div class="navbar-brand">
                <a href="{{url('/')}}" class="logo">
                    @if(file_exists('assets/uploads/'.get_static_option('site_white_logo')))
                        <img src="{{asset('assets/uploads/'.get_static_option('site_white_logo'))}}" alt="site logo">
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    @if(!empty($primary_menu->content))
                        @php
                            $cc = 0;
                            $parent_item_count = 0;
                           $menu_content = json_decode($primary_menu->content);
                           $static_page_list = ['About','Service','Faq','Team','Work']
                        @endphp
                        @foreach($menu_content as $data)
                            @php
                                if ($cc > 0 && $cc == $parent_item_count){ print '</ul>'; $cc = 0; }
                               if (!empty($data->parent_id) && $data->depth > 0){
                                    if  ($cc == 0){
                                        print '<ul class="sub-menu">';
                                        $parent_item_count = get_child_menu_count($menu_content,$data->parent_id);
                                    }else{  print '</li>'; }
                                }else{ print '</li>'; }
                            @endphp
                            <li class="@if(request()->path() == substr($data->menuUrl,6)) current-menu-item @endif">
                                @php $link = (in_array($data->menuTitle,$static_page_list)) ? url('/').'/'.get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_slug') :  str_replace('[url]',url('/'),$data->menuUrl) @endphp
                                <a href="{{$link}}">@if(in_array($data->menuTitle,$static_page_list)) {{get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_name')}} @else {{__($data->menuTitle)}} @endif</a>
                            @php if (!empty($data->parent_id) && $data->depth > 0){ $cc++;} @endphp
                        @endforeach
                    @else
                        <li class="@if(request()->path() == '/') current-menu-item @endif">
                            <a  href="{{url('/')}}">{{__('Home')}}</a>
                        </li>
                    @endif
                </ul>
            </div>
            @if(!empty(get_static_option('navbar_button')))
            <div class="nav-right-content">
                <a href="{{route('frontend.request.quote')}}" class="get-quote">{{get_static_option('navbar_'.get_user_lang().'_button_text')}}</a>
            </div>
            @endif
        </div>
    </nav>
</div>

<header class="header-area-wrapper header-carousel-two">
    @foreach($all_header_slider as $data)
        <div class="header-area style-03 header-bg"
             @if(file_exists('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image))
             style="background-image: url({{ asset('assets/uploads/header-sliders/header-slider-image-'.$data->id.'.'.$data->image)}})"
             @endif>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-inner">
                            <h1 class="title">{{$data->title}}</h1>
                            <p>{{$data->description}}</p>
                            <div class="btn-wrapper  desktop-left padding-top-20">
                                @if(!empty($data->btn_01_status))
                                    <a href="{{$data->btn_01_url}}" class="boxed-btn btn-rounded white">{{$data->btn_01_text}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</header>
@if(!empty(get_static_option('home_page_key_feature_section_status')))
<div class="header-bottom-area-three section-bg-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="header-bottom-list">
                    @foreach($all_key_features as $data)
                        <li>
                            <div class="single-header-bottom-list-item">
                                <span class="bg-icon"><i class="{{$data->icon}}"></i></span>
                                <div class="icon">
                                    <i class="{{$data->icon}}"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{$data->title}}</h4>
                                    <p>{{$data->description}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
@if(!empty(get_static_option('home_page_about_us_section_status')))
<section class="aboutus-area padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="aboutus-content-block style-02">
                    <h3 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_about_us_title')}}</h3>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_about_us_description')}}</p>
                    @if(get_static_option('home_page_01_'.get_user_lang().'_about_us_button_status'))
                        <div class="btn-wrapper desktop-left">
                            <a href="{{get_static_option('home_page_01_'.get_user_lang().'_about_us_button_url')}}" class="boxed-btn btn-rounded">{{get_static_option('home_page_01_'.get_user_lang().'_about_us_button_title')}}</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-block-width-counterup">
                    @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_background_image')))
                        <img  src="{{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_background_image'))}}" alt="">
                    @endif
                    <div class="hover">
                        <div class="count-wrap"><span class="count-num">{{get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_year')}}</span>+</div>
                        <p>{{get_static_option('home_page_01_'.get_user_lang().'_about_us_experience_title')}}</p>
                    </div>
                </div>
                <div class="content-block-with-sign margin-top-30">
                    <h4 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_about_us_quote_box_title')}}</h4>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_about_us_quote_box_description')}}</p>
                    <div class="sign">
                        @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image')))
                            <img src="{{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_image'))}}" alt="">
                        @endif
                    </div>
                    <span class="designation">{{get_static_option('home_page_01_'.get_user_lang().'_about_us_signature_text')}}</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-block margin-left-20">
                    @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_right_image')))
                        <img src="{{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_about_us_right_image'))}}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_service_section_status')))
<section class="our-cover-area padding-top-110 padding-bottom-90 bg-image"
@if(file_exists('assets/uploads/'.get_static_option('home_page_01_service_area_background_image')))
         style="background-image: url({{asset('assets/uploads/'.get_static_option('home_page_01_service_area_background_image'))}})"
@endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-50">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_service_area_title')}}</h2>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_service_area_description')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($all_service as $data)
            <div class="col-lg-4 col-md-6">
                <div class="icon-box-two margin-bottom-30">
                    <div class="icon">
                        <i class="{{$data->icon}}"></i>
                    </div>
                    <div class="content">
                        <a href="{{route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])}}"><h4 class="title">{{$data->title}}</h4></a>
                        <p>{{$data->excerpt}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_call_to_action_section_status')))
<section class="cta-area-one cta-bg-one padding-top-95 padding-bottom-100"
         @if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_cta_background_image')))
         style="background-image: url({{asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_cta_background_image'))}})"
        @endif
>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="left-content-area">
                    <h3 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_cta_area_title')}}</h3>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_cta_area_description')}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-content-area">
                    <div class="btn-wrapper">
                        <a href="{{get_static_option('home_page_01_'.get_user_lang().'_cta_area_button_url')}}" class="boxed-btn btn-rounded white">{{get_static_option('home_page_01_'.get_user_lang().'_cta_area_button_title')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_recent_work_section_status')))
<section class="our-work-area padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_recent_work_title')}}</h2>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_recent_work_description')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="our-work-carousel">
                    @foreach($all_work as $data)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_testimonial_section_status')))
<div class="testimonial-two-area bg-image padding-120"
     style="background-image: url({{asset('assets/frontend/img/bg/testimonial-bg-3.jpg')}})"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-two">
                    @foreach($all_testimonial as $data)
                        <div class="single-testimonial-item-02">
                            <div class="description">
                                <div class="icon">
                                    <i class="flaticon-left-quote"></i>
                                </div>
                                <div class="content">
                                    <p>{{$data->description}} </p>
                                    <h4 class="name">{{$data->name}}</h4>
                                    <span class="designation">{{$data->designation}}</span>
                                </div>
                            </div>
                            <div class="thumb">
                                @if(file_exists('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/testimonial/testimonial-grid-'.$data->id.'.'.$data->image)}}" alt="{{__($data->name)}}">
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(!empty(get_static_option('home_page_counterup_section_status')))
<div class="counterup-area counterup-bg padding-top-115 padding-bottom-115"
     @if(file_exists('assets/uploads/'.get_static_option('home_01_counterup_bg_image')))
     style="background-image: url({{asset('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))}});"
        @endif
>
    <div class="container">
        <div class="row">
            @foreach($all_counterup as $data)
                <div class="col-lg-3 col-md-6">
                    <div class="singler-counterup-item-01 white">
                        <div class="icon">
                            <i class="{{$data->icon}}" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">{{$data->number}}</span>{{$data->extra_text}}</div>
                            <h4 class="title">{{$data->title}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(!empty(get_static_option('home_page_price_plan_section_status')))
<section class="price-plan-area  padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_price_plan_section_title')}}</h2>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_price_plan_section_description')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="price-carousel">
                    @foreach($all_price_plan as $data)
                        <div class="pricing-table-15">
                            <div class="price-header">
                                <div class="icon"><i class="{{$data->icon}}"></i></div>
                                <h3 class="title">{{$data->title}}</h3>
                            </div>

                            <div class="price">
                                <span class="dollar"></span>{{$data->price}}<span class="month">{{$data->type}}</span>
                            </div>
                            <div class="price-body">
                                <ul>
                                    @php
                                        $features = explode(';',$data->features);
                                    @endphp
                                    @foreach($features as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="price-footer">
                                @if(!empty($data->url_status))
                                    <a class="order-btn" href="{{route('frontend.plan.order',$data->id)}}">{{$data->btn_text}}</a>
                                @else
                                    <a class="order-btn" href="{{$data->btn_url}}">{{$data->btn_text}}</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_faq_section_status')))
<section class="faq-area bg-image padding-120"
@if(file_exists('assets/uploads/'.get_static_option('home_page_01_faq_area_background_image')))
style="background-image: url({{asset('assets/uploads/'.get_static_option('home_page_01_faq_area_background_image'))}})"
@endif

>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content-area">
                    <div class="section-title desktop-left tablet-center mobile-center margin-bottom-55">
                        <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_faq_area_title')}}</h2>
                        <p>{{get_static_option('home_page_01_'.get_user_lang().'_faq_area_description')}}</p>
                    </div>
                        <div class="accordion-wrapper">
                            @php $rand_number = rand(9999,99999999); @endphp
                            <div id="accordion_{{$rand_number}}">
                                @foreach($all_faq as $key => $data)
                                    @php
                                        $aria_expanded = 'false';
                                        if($data->is_open == 'on'){ $aria_expanded = 'true'; }
                                    @endphp
                                    <div class="card">
                                        <div class="card-header" id="headingOne_{{$key}}">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-target="#collapseOne_{{$key}}" role="button"
                                                   aria-expanded="{{$aria_expanded}}" aria-controls="collapseOne_{{$key}}">
                                                    {{$data->title}}
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne_{{$key}}" class="collapse @if($data->is_open == 'on') show @endif "
                                             aria-labelledby="headingOne_{{$key}}" data-parent="#accordion_{{$rand_number}}">
                                            <div class="card-body">
                                                {{$data->description}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <div class="request-call">
                        <h4 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_faq_area_form_title')}}</h4>
                        <p>{{get_static_option('home_page_01_'.get_user_lang().'_faq_area_form_description')}}</p>
                        @include('backend.partials.message')
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{route('frontend.call.back.message')}}" class="request-call-form margin-top-60" enctype="multipart/form-data" method="post">
                            @csrf
                            @php
                                $form_fields = json_decode(get_static_option('call_back_page_form_fields'));
                                $select_index = 0;
                                $options = [];
                            @endphp
                            @foreach($form_fields->field_type as $key => $value)
                                @if(!empty($value))
                                    @if($value == 'select') @php $options = explode(';',$form_fields->select_options[$select_index]);@endphp @endif
                                    @php $required = isset($form_fields->field_required->$key) ? $form_fields->field_required->$key : '' @endphp
                                    @php $mimes = isset($form_fields->mimes_type->$key) ? $form_fields->mimes_type->$key : '' @endphp
                                    {!! get_field_by_type($value,$form_fields->field_name[$key],$form_fields->field_placeholder[$key],$options,$required,$mimes) !!}
                                    @if($value == 'select') @php $select_index++@endphp @endif
                                @endif
                            @endforeach
                            <button type="submit" class="submit-btn white">{{__('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_latest_news_section_status')))
<section class="latest-news padding-top-110 padding-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title desktop-center margin-bottom-55">
                    <h2 class="title">{{get_static_option('home_page_01_'.get_user_lang().'_latest_news_title')}}</h2>
                    <p>{{get_static_option('home_page_01_'.get_user_lang().'_latest_news_description')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="latest-news-carousel">
                    @foreach($all_blog as $data)
                        <div class="single-blog-grid-01">
                            <div class="thumb">
                                @if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                @endif
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])}}">{{$data->title}}</a></h4>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="fa fa-calendar"></i> {{date_format($data->created_at,'d M y')}}</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> {{$data->user->username}}</a></li>
                                    <li><div class="cats"><i class="fa fa-calendar"></i><a href="#"> Business</a></div></li>
                                </ul>
                                <p>{{$data->excerpt}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty(get_static_option('home_page_brand_logo_section_status')))
    <div class="brand-logo-area section-bg-1 padding-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-carousel">
                        @foreach($all_brand_logo as $data)
                            <div class="single-carousel">
                                @if(file_exists('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image))
                                    <img src="{{asset('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if(!empty(get_static_option('home_page_newsletter_section_status')))
@include('frontend.partials.newsletter')
@endif