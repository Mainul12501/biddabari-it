<section class="min">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>Get Featured <span class="theme-cl">Courses</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single Grid -->
            @foreach($featuredCourses as $featuredCourse)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" wire:key="{{ $featuredCourse->id }}">
                    <div class="crs_grid ">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details', ['id' => $featuredCourse->id, 'slug' => $featuredCourse->slug])}}" class="crs_detail_link" wire:navigate >
                                <img src="{{ file_exists($featuredCourse->banner) ? asset($featuredCourse->banner) : asset('frontend/logo/biddabari-card-logo-350x210.jpg')}}" class="img-fluid rounded" alt="" />
                            </a>
{{--                            <div class="crs_video_ico">--}}
{{--                                <i class="fa fa-play"></i>--}}
{{--                            </div>--}}
{{--                            <div class="crs_locked_ico">--}}
{{--                                <i class="fa fa-lock"></i>--}}
{{--                            </div>--}}
                        </div>
                        <div class="crs_grid_caption">
{{--                            <div class="crs_tutor_thumb overl_top"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/team-5.jpg" class="img-fluid circle" alt="" /></a></div>--}}
                            @foreach($featuredCourse->courseCategories as $courseCategory)
                                <div class="crs_cates cl_1" wire:key="{{ $courseCategory->id }}"><span>{{ $courseCategory->name }}</span></div>
                            @endforeach
                            <div class="crs_title"><h4><a href="{{route('course.details', ['id' => $featuredCourse->id, 'slug' => $featuredCourse->slug])}}" wire:navigate class="crs_title_link">{{ $featuredCourse->title ?? 'Course Title' }}</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-eye"></i><span>{{ $featuredCourse->total_class }} Classes</span></li>
                                    <li><i class="fa fa-video"></i><span>{{ $featuredCourse->total_hours ?? 0 }} Hours</span></li>
                                    <li><i class="fa fa-video"></i><span>{{ $featuredCourse->total_video ?? 0 }} Videos</span></li>
                                </ul>
                            </div>
{{--                            <div class="preview_crs_info">--}}
{{--                                <div class="progress">--}}
{{--                                    <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">BDT &nbsp;</span><span class="theme-cl">{{ $featuredCourse->price }}</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    @if(strtotime($featuredCourse->admission_last_date) > strtotime(currentDateTimeYmdHi()))
{{--                                        <div class="crs_linkview"><a href="{{route('course.details', ['id' => $featuredCourse->id, 'slug' => $featuredCourse->slug])}}" wire:navigate class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>--}}
                                        <div class="crs_linkview"><a href="{{route('spa.checkout', ['type' => 'course', 'slug' => $featuredCourse->slug])}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                    @else
                                        <div class="crs_linkview"><a href="javascript:void(0)" wire:navigate class="btn btn_view_detail theme-bg text-light">Time Expired </a></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
