@extends('frontend.master')
@section('title')
Biddabari IT || Home
@endsection

@section('content')		
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero_banner image-cover" style="background:#23a16f url({{asset('frontendAsset')}}/assets/img/banner-3.jpg) no-repeat;" data-overlay="5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-1"2>
                    <div class="simple-search-wrap text-left">
                        <div class="hero_search-2">
                            <div class="elsio_tag">LISTEN TO OUR NEW ANTHEM</div>
                            <h1 class="banner_title mb-4">Find the most exciting online cources</h1>
                            <p class="font-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="input-group simple_search">
                                <i class="fa fa-search ico"></i>
                                <input type="text" class="form-control" placeholder="Search Your Cources">
                                <div class="input-group-append">
                                    <button class="btn theme-bg" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->
			
    <!-- ============================ Our Awards Start ================================== -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="crp_box sm ovr_top">
                        <div class="row align-items-center m-0">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                                <div class="crt_169">
                                    <div class="crt_overt"><h4>4.7</h4></div>
                                    <div class="crt_stion">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="crt_io90"><h6>3,272 Rating</h6></div>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                                <div class="part_rcp">
                                    <ul>
                                        <li><div class="crp_img"><img src="{{asset('frontendAsset')}}/assets/img/lg-1.png" class="img-fluid" alt="" /></div></li>
                                        <li><div class="crp_img"><img src="{{asset('frontendAsset')}}/assets/img/lg-5.png" class="img-fluid" alt="" /></div></li>
                                        <li><div class="crp_img"><img src="{{asset('frontendAsset')}}/assets/img/lg-6.png" class="img-fluid" alt="" /></div></li>
                                        <li><div class="crp_img"><img src="{{asset('frontendAsset')}}/assets/img/lg-7.png" class="img-fluid" alt="" /></div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Our Awards End ================================== -->
    
    <!-- ============================ Top Categories Start ================================== -->
    <section class="min">
        <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Explore Top <span class="theme-cl">Categories</span></h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-1">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/content.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Development</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>23 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-2">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/briefcase.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Business</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>58 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-3">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/career.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Accounting</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>74 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-4">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/python.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">IT & Software</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>65 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-10">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/designer.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Art & Design</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-6">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/speaker.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Marketing</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>82 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-7">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/photo.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Photography</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>25 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-8">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/yoga.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Health & Fitness</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="edu_cat_2 cat-9">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{asset('frontendAsset')}}/assets/img/health.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">Lifestyle</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>38 Classes</li>
                            </ul>
                        </div>
                    </div>							
                </div>
            </div>
            
        </div>
    </section>
    <!-- ============================ Top Categories End ================================== -->

        
    <!-- ============================ Latest Cources Start ================================== -->
    <section class="min">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Get Featured <span class="theme-cl">Cources</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
            
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-3.jpg" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_1"><span>Design</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">UI/UX Design pattern for succesfull software Applications</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">199</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-4.jpg" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_2"><span>Development</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">Advance PHP knowledge with laravel to make smart web</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">139</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-5.png" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_3"><span>Banking</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">The complete accounting & bank financial course 2021</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">79</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-6.png" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_4"><span>Business</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">The complete business plan course includes 50 templates</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">129</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-7.jpg" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_5"><span>Software</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">Full web designing course with 20 web template designing</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">99</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-8.jpg" class="img-fluid rounded" alt="" />
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>
                            <div class="crs_cates cl_1"><span>Design</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 & 2022)</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                    <li><i class="fa fa-user"></i><span>10k User</span></li>
                                    <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                </ul>
                            </div>
                            <div class="preview_crs_info">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">149</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details')}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- ============================ Latest Cources End ================================== -->
    
    <!-- ============================ How It Works Start ================================== -->
    <section class="min gray">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>আমাদের <span class="theme-cl">কথা </span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center mt-5">
                
                <!-- Single Location -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                        <iframe class="ourTalk_video" width="560" height="315" src="https://www.youtube.com/embed/NjqjVdVJX1g?si=tTlVUhw_Wgk8b1J6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                
                <!-- Single Location -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ourTalk_contect">
                        <p>"বহুল প্রত্যাশিত ১৮তম শিক্ষক নিবন্ধন সার্কুলার ইতোমধ্যে প্রকাশিত হয়েছে "
                                পরীক্ষা হতে পারে মার্চ বা এপ্রিল মাসেই
                                গত বছর ৪র্থ গনবিজ্ঞপ্তিতে ৬৮০০০+ পদ ফাঁকা ছিল। তার মধ্যে মাত্র ২৭০০০ জন যোগ্য প্রার্থী পাওয়া গেছে। এবারও আনুমানিক ৫০০০০+ পদ খালি সাপেক্ষে পরীক্ষা নেওয়া হবে।

                                যারা 𝐍𝐓𝐑𝐂𝐀 শিক্ষক নিবন্ধন পরীক্ষা দিয়ে বেসরকারি স্কুলের সহকারী শিক্ষক বা বেসরকারি কলেজের লেকচারার হিসেবে শিক্ষকতার মহান পেশায় নিজ নিজ এলাকায় ক্যারিয়ার গড়তে চাচ্ছেন তাদের জন্য এই সার্কুলারটি হতে পারে একটি সুবর্ণ সুযোগ!!

                                যেখানে আবেদন করতে পারবেন সকল স্নাতক পাশ প্রার্থীগণ আর সর্বোচ্চ বয়সসীমা থাকছে ৩৫ বছর পর্যন্ত।
                                👉গত বছর আমাদের ভর্তিকৃত শিক্ষার্থীদের সাফল্যের হার প্রায় ৯৫% এরও বেশি।
                                গতবছরের ব্যাপক সাফল্যের প্রেক্ষিতে এবারও সম্পূর্ণ নতুন আঙ্গিকে সাজানো হয়েছে 𝐄𝐱𝐜𝐥𝐮𝐬𝐢𝐯𝐞 ব্যাচ- “𝟏𝟖𝐭𝐡 𝐍𝐓𝐑𝐂𝐀 𝐄𝐗𝐓𝐑𝐀 𝐂𝐀𝐑𝐄 𝐋𝐈𝐕𝐄 𝐁𝐀𝐓𝐂𝐇-3” (এই ব্যাচের সকল কার্যক্রম হবে লাইভ) সকাল ও বিকালের ব্যাচে ভর্তি চলছে…

                                আপনি যতই দূর্বল শিক্ষার্থী হোন না কেনো আমাদের Master Plan অনুযায়ী বিশেষ এই কোর্সের মাধ্যমে আপনাকে শূন্য থেকে গড়ে তোলা হবে। একটু ভালোভাবে গুছিয়ে প্রস্তুতি নিতে পারলে সম্মানজনক এই চাকরিটা পাওয়া অনেক সহজ। এজন্য দিতে হবে মোট ২২০ নম্বরের পরীক্ষা।
                                ✅যার মধ্যে থাকছে...
                                ✍প্রিলিমিনারি পরীক্ষা -১০০ নম্বর;
                                ✍বিষয়ভিত্তিক পরীক্ষা -১০০ নম্বর;
                                ✍ভাইভা পরীক্ষা - ২০ নম্বর;

                                কোর্সটিতে যা থাকছে...​
                                💥(১) ৫৫টি মেগা লাইভ ক্লাস (প্রতিটি Live Class দেড়-দুই ঘন্টার)। [এই ক্লাসগুলো Live শেষে আপনার ভর্তিকৃত ব্যাচে Record করে দেওয়া হবে, আপনি যখন খুশি টেনে টেনে বারবার দেখতে পারবেন।]
                                👉(i) গনিত- ১৫ টি মেগা LIVE Class;
                                👉(ii) ইংরেজি -১২ টি মেগা LIVE Class;
                                👉(iii) বাংলা-১২ টি মেগা LIVE Class;
                                👉(iv) সাধারণ জ্ঞান -১৬টি মেগা LIVE Class;

                                (২) মোট পরীক্ষা- ৮০টি; যার মধ্যে-
                                👉(i) ক্লাস টেস্ট- ৫৫টি;
                                👉(ii) বিষয়ভিত্তিক পরীক্ষা - ৪ টি
                                👉(iii) সাপ্তাহিক হোম এসাইনমেন্ট - ১২ টি
                                👉(iv) এসাইনমেন্ট টেস্ট - ১২ টি
                                👉(v) পূর্ণাঙ্গ সিলেবাসের মডেল টেস্ট - ৫ টি
                                👉(vi) গ্র্যান্ড ফাইনাল মডেল টেস্ট - ১টি
                                👉(vii) মান্থলি টেস্ট- ৩টি সর্বাধিক কমন উপযোগী ১৩০০ পৃষ্ঠার লেকচার শিট PDF, (হার্ডকপির ক্ষেত্রে শর্ত প্রযোজ্য) [এসব লেকচার শিট শুধু ভর্তিকৃত শিক্ষার্থীদের জন্য, বাইরে বিক্রি হয় না। এই শীটগুলো থেকে ৯০% এর বেশি প্রশ্ন Common থাকে।]

                                কোর্সটি কতদিন চলবে
                                👌আগামী ৪ মাস পর্যন্ত চলবে...
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ How It Works End ================================== -->

    			<!-- ============================ Our Servic Start ================================== -->

    <div class="py-5">
    <div class="container">
    <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>আমাদের <span class="theme-cl">সেবা সমূহ  </span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
        <div class="row facility">
            <div class="col-12 col-m-6">
                <div class="card mb-4 border-0 content-shadow">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('frontendAsset')}}/assets/img/live-exam.jpeg"
                                class="img-fluid rounded-start  py-2" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-end">
                                <h2 class="card-title mb-2">Live Exam</h2>
                                <p class="card-text text-muted">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores velit ut obcaecati, fugit dicta quibusdam harum. Et optio beatae sed molestiae, quas ad amet labore libero! Exercitationem veritatis officia iure vero tenetur. Soluta, facere saepe praesentium officiis quod rem quia ex obcaecati vel sed? Illo consectetur tenetur voluptate quod tempore.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-m-6">
                <div class="card mb-3 border-0 content-shadow">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body text-start">
                                <h2 class="card-title mb-2">PDF Provide</h2>
                                <p class="card-text text-muted">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, ea labore praesentium repellendus id delectus perferendis magni esse vitae, recusandae cumque eaque, voluptatum beatae. Impedit perspiciatis quod numquam quos facere eos enim modi, at fugit? Eveniet enim expedita blanditiis voluptatem! Magnam repellendus ipsa quod dicta molestias! Porro quis culpa necessitatibus? 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 text-end">
                            <img src="{{asset('frontendAsset')}}/assets/img/pdf.jpeg"
                                class="img-fluid rounded-start py-2" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

			<!-- ============================ Our Servic End ================================== -->

			<!-- ============================ Our Instructor Start ================================== -->
			<section class="min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center mb-4">
								<h2>শ্রদ্ধেয় <span class="theme-cl">শিক্ষকবৃন্দ</span></h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="tutor-slide">
							
								<!-- Single Item -->
								<div class="lios_item">	
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-1.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>Hindi Teacher</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">Rodney T. Doyon</a></h4></div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="lios_item">
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-2.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>Sanskrit Teacher</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">Luella J. Robles</a></h4></div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="lios_item">
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-3.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>Math Teacher</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">David E. Lampkin</a></h4></div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="lios_item">
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-4.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>History Teacher</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">Michael B. Maxwell</a></h4></div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="lios_item">
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-5.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>PHP Developer</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">Linda R. Gibson</a></h4></div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="lios_item">
									<div class="crs_trt_grid shadow_none brd">
										<div class="crs_trt_thumb">
											<a href="instructor-detail.html" class="crs_trt_thum_link"><img src="{{asset('frontendAsset')}}/assets/img/t-6.png" class="img-fluid" alt="" /></a>
										</div>
										<div class="crs_trt_caption large">
											<div class="instructor_tag"><span>Chemistry Expert</span></div>
											<div class="instructor_title"><h4><a href="instructor-detail.html">Douglas M. Mikel</a></h4></div>
											
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Our Instructor End ================================== -->

    <!-- ============================ Students Reviews ================================== -->
    <section class="gray">
        <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>শিক্ষার্থীদের  <span class="theme-cl">মতামত</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                    
                    <div class="reviews-slide space">
                        
                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/user-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Susan D. Murphy</h5>
                                            <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/c-1.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/user-2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Maxine E. Gagliardi</h5>
                                            <div class="_ovr_posts"><span>Apple CEO</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.5</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/c-2.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/user-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Roy M. Cardona</h5>
                                            <div class="_ovr_posts"><span>Google Founder</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.9</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/c-3.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/user-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Dorothy K. Shipton</h5>
                                            <div class="_ovr_posts"><span>Linkedin Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/c-4.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="single_items lios_item">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/user-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Robert P. McKissack</h5>
                                            <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{asset('frontendAsset')}}/assets/img/c-5.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Students Reviews End ================================== -->
	
@endsection