@extends('frontend.master')
@section('title')
Biddabari IT || Courses
@endsection

@section('content')	
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">Courses with Full Width</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Find Courses</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->
    
    <!-- ============================ Course Detail ================================== -->
    <section class="gray">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="short_wraping">
                        <div class="row m-0 align-items-center justify-content-between">
                        
                            <div class="col-lg-4 col-md-5 col-sm-12  col-sm-6">
                                <div class="shorting_pagination_laft">
                                    <h6 class="m-0">Showing 1-25 of 72</h6>
                                </div>
                            </div>
                    
                            <div class="col-lg-8 col-md-7 col-sm-12 col-sm-6">
                                <div class="dlks_152">
                                    <div class="shorting-right mr-2">
                                        <label>Short By:</label>
                                        <div class="dropdown show">
                                            <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="selection">Most Rated</span>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lmk_485">
                                        <ul class="shorting_grid">
                                            <li class="list-inline-item"><a href="grid-layout-full.html" class="active"><span class="ti-layout-grid2"></span></a></li>
                                            <li class="list-inline-item"><a href="list-layout-with-full.html"><span class="ti-view-list"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <div class="row justify-content-center">
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-9.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-1.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-2.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
                            <div class="crs_cates cl_1"><span>Design</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 &amp; 2022)</a></h4></div>
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
                
                <!-- Single Grid -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-3.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-4.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-5.png" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
                            <div class="crs_cates cl_3"><span>Banking</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">The complete accounting &amp; bank financial course 2021</a></h4></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-6.png" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-7.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
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
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details')}}" class="crs_detail_link">
                                <img src="{{asset('frontendAsset')}}/assets/img/cr-8.jpg" class="img-fluid rounded" alt="">
                            </a>
                            <div class="crs_video_ico">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="crs_locked_ico">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="crs_grid_caption">
                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt=""></a></div>
                            <div class="crs_cates cl_1"><span>Design</span></div>
                            <div class="crs_title"><h4><a href="{{route('course.details')}}" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 &amp; 2022)</a></h4></div>
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
    
            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination p-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-arrow-left"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-arrow-right"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->

@endsection