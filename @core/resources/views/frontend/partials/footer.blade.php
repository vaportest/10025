@php $static_page_list = ['About','Service','Faq','Team','Work'] @endphp

<footer class="footer-area">
    <div class="footer-top padding-top-100 padding-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="{{url('/')}}" class="footer-logo">
                                @if(file_exists('assets/uploads/'.get_static_option('about_widget_logo')))
                                    <img src="{{asset('assets/uploads/'.get_static_option('about_widget_logo'))}}" alt="">
                                @endif
                            </a>
                            <p>{{get_static_option('about_widget_'.get_user_lang().'_description')}}</p>
                            <ul class="social-icons">
                                @if(!empty(get_static_option('about_widget_social_icon_one')) && !empty(get_static_option('about_widget_social_icon_one_url')))
                                    <li><a href="{{get_static_option('about_widget_social_icon_one_url')}}"><i class="{{get_static_option('about_widget_social_icon_one')}}"></i></a></li>
                                @endif
                                @if(!empty(get_static_option('about_widget_social_icon_two')) && !empty(get_static_option('about_widget_social_icon_two_url')))
                                    <li><a href="{{get_static_option('about_widget_social_icon_two_url')}}"><i class="{{get_static_option('about_widget_social_icon_two')}}"></i></a></li>
                                @endif
                                @if(!empty(get_static_option('about_widget_social_icon_three')) && !empty(get_static_option('about_widget_social_icon_three_url')))
                                    <li><a href="{{get_static_option('about_widget_social_icon_three_url')}}"><i class="{{get_static_option('about_widget_social_icon_three')}}"></i></a></li>
                                @endif
                                @if(!empty(get_static_option('about_widget_social_icon_four')) && !empty(get_static_option('about_widget_social_icon_four_url')))
                                    <li><a href="{{get_static_option('about_widget_social_icon_four_url')}}"><i class="{{get_static_option('about_widget_social_icon_four')}}"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h2 class="widget-title">{{get_static_option('useful_link_'.get_user_lang().'_widget_title')}}</h2>
                        <ul>
                            @php $useful_links_arr = json_decode($all_usefull_links->content); @endphp
                            @foreach($useful_links_arr as $data)
                                @php $link = (in_array($data->menuTitle,$static_page_list)) ? url('/').'/'.get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_slug') :  str_replace('[url]',url('/'),$data->menuUrl) @endphp
                                <li><a href="{{$link}}"> @if(in_array($data->menuTitle,$static_page_list)) {{get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_name')}} @else {{__($data->menuTitle)}} @endif</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h2 class="widget-title">{{get_static_option('important_link_'.get_user_lang().'_widget_title')}}</h2>
                        <ul>
                            @php
                                $useful_links_arr = json_decode($all_important_links->content);
                            @endphp
                            @foreach($useful_links_arr as $data)
                                @php $link = (in_array($data->menuTitle,$static_page_list)) ? url('/').'/'.get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_slug') :  str_replace('[url]',url('/'),$data->menuUrl) @endphp
                                <li><a href="{{$link}}"> @if(in_array($data->menuTitle,$static_page_list)) {{get_static_option(strtolower($data->menuTitle).'_page_'.get_user_lang().'_name')}} @else {{__($data->menuTitle)}} @endif</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_recent_posts">
                        <h4 class="widget-title">{{get_static_option('recent_post_'.get_user_lang().'_widget_title')}}</h4>
                        <ul class="recent_post_item">
                            @foreach($all_recent_post as $data)
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        @if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image))
                                            <img src="{{asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)}}" alt="{{$data->title}}">
                                        @endif
                                    </div>
                                    <div class="content">
                                        <span class="time"><i class="fa fa-calendar"></i> {{date_format($data->created_at,'d M Y')}}</span>
                                        <h4 class="title"><a href="{{route('frontend.blog.single',['id' => $data->id, 'any' => Str::slug($data->title,'-')])}}">{{$data->title}}</a></h4>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        @php
                            $footer_text = get_static_option('site_footer_copyright');
                            $footer_text = str_replace('{copy}','&copy;',$footer_text);
                            $footer_text = str_replace('{year}',date('Y'),$footer_text);
                        @endphp
                        {!! $footer_text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>
</div>

<div class="back-to-top">
    <i class="fas fa-angle-up"></i>
</div>

<!-- jquery -->
<script src="{{asset('assets/frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-migrate-3.1.0.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script>
    (function($){
        "use strict";
        $(document).ready(function(){
            $(document).on('change','#langchange',function(e){
                $.ajax({
                    url : "{{route('frontend.langchange')}}",
                    type: "GET",
                    data:{
                        'lang' : $(this).val()
                    },
                    success:function (data) {
                        location.reload();
                    }
                })
            });
        });
    }(jQuery));
</script>
@yield('scripts')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src="https://embed.tawk.to/{{get_static_option('tawk_api_key')}}/default";
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>