<div class="row">
    <div class="col-12">
        <div class="row justify-content-center">

            <!-- Single Grid -->
            @foreach($courses as $course)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" wire:key="{{ $course->id }}">
                    <div class="crs_grid shadow_none brd">
                        <div class="crs_grid_thumb">
                            <a href="{{route('course.details', ['id' => $course->id, 'slug' => $course->slug])}}" class="crs_detail_link" wire:navigate >
                                <img src="{{ file_exists($course->banner) ? asset($course->banner) : asset('frontend/logo/biddabari-card-logo-350x210.jpg')}}" class="img-fluid rounded" alt="" />
                            </a>
                        </div>
                        <div class="crs_grid_caption">
                            @foreach($course->courseCategories as $courseCategory)
                                <div class="crs_cates cl_1" wire:key="{{ $courseCategory->id }}"><span>{{ $courseCategory->name }}</span></div>
                            @endforeach
                            <div class="crs_title"><h4><a href="{{route('course.details', ['id' => $course->id, 'slug' => $course->slug])}}" wire:navigate class="crs_title_link">{{ $course->title ?? 'Course Title' }}</a></h4></div>
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-eye"></i><span>{{ $course->total_class }} Classes</span></li>
                                    <li><i class="fa fa-video"></i><span>{{ $course->total_hours ?? 0 }} Hours</span></li>
                                    <li><i class="fa fa-video"></i><span>{{ $course->total_video ?? 0 }} Videos</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price"><h2><span class="currency">BDT &nbsp;</span><span class="theme-cl">{{ $course->price }}</span></h2></div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="{{route('course.details', ['id' => $course->id, 'slug' => $course->slug])}}" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->

{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                <ul class="pagination p-center">--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                            <span class="ti-arrow-left"></span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item active"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">18</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                            <span class="ti-arrow-right"></span>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
        {!! $courses->links(data: ['scrollTo' => false]) !!}

    </div>
</div>



