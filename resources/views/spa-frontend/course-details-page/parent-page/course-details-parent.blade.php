<div>
    {{-- The whole world belongs to you. --}}
    <!-- ============================ Page Title Start================================== -->
    <section class="min">
        <div class="ed_detail_head bg-cover" style="background:#f4f4f4 url({{asset('frontendAsset')}}/assets/img/banner-3.jpg);" data-overlay="8">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-md-7">
                        <div class="ed_detail_wrap light">
                            @foreach($course->courseCategories as $key => $courseCategory)
                                <div class="crs_cates cl_3" wire:key="{{ $courseCategory->id }}"><span>{{ $courseCategory->name ?? 'Category Name' }}</span></div>
                            @endforeach


                            <div class="ed_header_caption">
                                <h2 class="ed_title">{{ $course->title ?? 'Course Title' }}</h2>
                                <ul>
                                    <li><i class="ti-calendar"></i>{{ $course->total_class ?? 0 }} Classes</li>
                                    <li><i class="ti-alarm-clock"></i>{{ $course->total_hours ?? 0 }} Hours</li>
                                    <li><i class="ti-video-camera"></i>{{ $course->total_video ?? 0 }} Videos</li>

                                </ul>
                            </div>
                            <div class="ed_header_short">
                                {!! $course->sub_title ?? 'Sub Title here' !!}
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section class="gray pt-3">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-8 col-md-12 order-lg-first">

                    <!-- All Info Show in Tab -->
                    <div class="tab_box_info mt-4">
                        <ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="curriculum-tab" data-toggle="pill" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Routine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="instructors-tab" data-toggle="pill" href="#instructors" role="tab" aria-controls="instructors" aria-selected="false">Instructor</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Overview Detail -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <!-- Overview -->
                                <div class="edu_wraper">
                                    {!! $course->description !!}
                                </div>
                            </div>

                            <!-- Curriculum Detail -->
                            <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                <div class="edu_wraper">
                                    <h4 class="edu_title">Course Routine</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-body">
                                                <table class="table table-striped" id="file-datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Topic</th>
                                                        <th>Date</th>
                                                        <th>Day</th>
                                                        <th>Time</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(isset($course->courseRoutines))
                                                        @foreach($course->courseRoutines as $courseRoutine)
                                                            @if($courseEnrollStatus == 'true')
                                                                @if($courseRoutine->is_fack == 0)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $courseRoutine->content_name }}</td>
                                                                        <td>{{ showDate($courseRoutine->date_time) }}</td>
                                                                        <td>{{ $courseRoutine->day }}</td>
                                                                        <td>{{ showTime($courseRoutine->date_time) }}</td>
                                                                    </tr>
                                                                @endif
                                                            @else
                                                                @if($courseRoutine->is_fack == 1)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $courseRoutine->content_name }}</td>
                                                                        <td>{{ showDate($courseRoutine->date_time) }}</td>
                                                                        <td>{{ $courseRoutine->day }}</td>
                                                                        <td>{{ showTime($courseRoutine->date_time) }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Instructor Detail -->
                            <div class="tab-pane fade" id="instructors" role="tabpanel" aria-labelledby="instructors-tab">
                                @foreach($course->teachers as $teacher)
                                    <div class="single_instructor" wire:key="{{ $teacher->id }}">
                                        <div class="single_instructor_thumb">
                                            <a href="#"><img src="{{ file_exists($teacher->image) ? asset($teacher->image) : asset('frontendAsset/assets/img/user-4.jpg') }}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="single_instructor_caption">
                                            <h4><a href="#">{{ $teacher->user->name ?? $teacher->first_name.' '.$teacher->last_name }}</a></h4>
                                            <ul class="instructor_info">
                                                <li><i class="fa fa-eye"></i><span>{{ $course->total_class }} Classes</span></li>
                                                <li><i class="fa fa-video"></i><span>{{ $course->total_hours ?? 0 }} Hours</span></li>
                                                <li><i class="fa fa-video"></i><span>{{ $course->total_video ?? 0 }} Videos</span></li>
                                            </ul>
                                            <p>{!! $teacher->description ?? 'About Teacher' !!}</p>
                                            <ul class="social_info">
                                                <li><a href="{{ $teacher->facebook }}"><i class="ti-facebook"></i></a></li>
                                                <li><a href="{{ $teacher->twitter }}"><i class="ti-twitter"></i></a></li>
                                                <li><a href="{{ $teacher->linkedin }}"><i class="ti-linkedin"></i></a></li>
                                                <li><a href="{{ $teacher->github }}"><i class="ti-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12  order-lg-last">

                    <!-- Course info -->
                    <div class="ed_view_box style_3 ovrlio stick_top">

                        <div class="property_video sm">
                            <div class="thumb">
                                <img class="pro_img img-fluid w100" src="{{ file_exists($course->banner) ? asset($course->banner) : asset('frontend/logo/biddabari-card-logo-350x210.jpg') }}" alt="{{ $course->title }}">
{{--                                <div class="overlay_icon">--}}
{{--                                    <div class="bb-video-box">--}}
{{--                                        <div class="bb-video-box-inner">--}}
{{--                                            <div class="bb-video-box-innerup">--}}
{{--                                                <a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="ed_view_price pl-4">
                            <span>Admission Last Date</span>
                            <h4 class="theme-cl">{{ showDate($course->admission_last_date) }}</h4>
                        </div>

                        <div class="ed_view_price pl-4">
                            <span>Price</span>
                            @php
                                $discountPrice = ($course->discount_type == 1 ? $course->discount_amount : ($course->price * $course->discount_amount)/100) ?? 0;
                            @endphp
                            @if($course->discount_end_date > \Illuminate\Support\Carbon::today()->format('Y-m-d') && $course->discount_amount > 0)

                                <h4 class="theme-cl">BDT <del>{{ $course->price }}</del> <span>{{ $course->is_paid == 1 ? $course->price - $discountPrice : 'Free' }}</span></h4>
                            @else
                                <h4 class="theme-cl">BDT {{ $course->is_paid == 1 ? $course->price : 'Free' }}</h4>
                            @endif
                        </div>

                        <div class="ed_view_short pl-4 pr-4 pb-2">
                            <p>{!! $course->sub_title ?? 'Course Sub Title' !!}</p>
                        </div>

                        <div class="ed_view_features half_list pl-4 pr-3">
                            <span>Course Features</span>
                            <ul>
                                <li><i class="fa fa-eye"></i><span>{{ $course->total_class ?? 0 }} Classes</span></li>
                                <li><i class="fa fa-video"></i><span>{{ $course->total_hours ?? 0 }} Hours</span></li>
                                <li><i class="fa fa-video"></i><span>{{ $course->total_video ?? 0 }} Videos</span></li>
                            </ul>
                        </div>
                        <div class="ed_view_link">
                            @if($course->is_paid == 1)
                                @if($courseEnrollStatus == 'false')
                                    @if(dateTimeFormatYmdHi($course->admission_last_date) > date('Y-m-d H:i'))
                                        <div class="checkout-form d-none">
                                            <form action="" method="post" wire:submit.debounce="placeCourseOrder({{ $course->id }}, 'course', {{ $course->price - $discountPrice }}, 0, '', 0)">
                                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                <input type="hidden" name="total_amount" value="{{ $course->price - $discountPrice }}">
                                                <input type="hidden" name="used_coupon" value="0">
                                                <input type="hidden" name="coupon_code" value="">
                                                <input type="hidden" name="coupon_amount" value="">
                                                <input type="hidden" name="ordered_for" value="course">
{{--                                                <input type="hidden" name="rc" value="{{ $_GET['rc'] ?? '' }}">--}}

                                                <div class="payment-box">
                                                    <div class="payment-method">
                                                        <h3 class="f-s-26">Payment Method</h3>
                                                        <p>
                                                            <label for="paypal"><input id="paypal" type="radio" wire:model.defer="payment_method" name="payment_method" value="ssl" {{ $payment_method == 'ssl' ? 'checked' : '' }} > SSLCommerz</label>
                                                        </p>
                                                        <p>
                                                            <label for="direct-bank-transfer"><input id="direct-bank-transfer" type="radio" wire:model.defer="payment_method" value="cod" name="payment_method" {{ $payment_method == 'cod' ? 'checked' : '' }} > Manual Payment</label>
                                                        </p>
                                                    </div>
                                                    <div class="payment-des-parent-div">
                                                        <div class="payment-cod d-none">
                                                            <p class="f-s-22 py-0 mb-0">ম্যানুয়াল পেমেন্ট করলে আমাদের <span>বিকাশ মার্চেন্ট</span> নাম্বারে টাকা পাঠাতে হবে। <br><span>01896 060888 </span></p>
                                                            <p class="f-s-22 py-0 mb-0">রকেট এ পাঠাতে চাইলে <span>রকেট মার্চেন্ট</span> পাঠাতে হবে। <br><span>01963 929208</span></p>
                                                            <p class="f-s-22 py-0 mb-0">নগদ এ পাঠাতে চাইলে <span>নগদ মার্চেন্ট</span> নাম্বারে টাকা পাঠাতে হবে। <br><span>01896 060828</span></p>
                                                            <div class="row checkout-form-inputs">
                                                                <div class="col-md-6">
                                                                    <label for="paidTo" class="f-s-20">Paid To</label>
                                                                    <input type="number" id="paidTo" wire:model="paid_to" name="paid_to" class="form-control" placeholder="Paid To" />
                                                                    @error('paid_to')<span class="text-danger">{{ $errors->first('paid_to') }}</span>@enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="paidForm" class="f-s-20">Paid Form</label>
                                                                    <input type="number" id="paidForm" wire:model="paid_from" name="paid_from" class="form-control" placeholder="Paid Form" />
                                                                    @error('paid_from')<span class="text-danger">{{ $errors->first('paid_from') }}</span>@enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="transactionId" class="f-s-20">Transaction Id</label>
                                                                    <input type="text" id="transactionId" wire:model="txt_id" name="txt_id" class="form-control" placeholder="Transaction Id" />
                                                                    @error('txt_id')<span class="text-danger">{{ $errors->first('txt_id') }}</span>@enderror
                                                                </div>
                                                                <div class="col-md-6 select2-div">
                                                                    <label for="vendor" class="f-s-20">Vendor</label>
                                                                    <select name="vendor" wire:model="vendor" id="vendor" class="form-control">
                                                                        <option value="" selected disabled>Select a Vendor</option>
                                                                        <option value="bkash">Bkash</option>
                                                                        <option value="nagad">Nagad</option>
                                                                        <option value="rocket">Rocket</option>
                                                                    </select>
                                                                    @error('vendor')<span class="text-danger">{{ $errors->first('vendor') }}</span>@enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--                                <a href="cart.html" class="default-btn">--}}
                                                    {{--                                    Place to Order--}}
                                                    {{--                                </a>--}}

                                                </div>


                                                <button type="submit" class="btn theme-bg enroll-btn ">কোর্সটি কিনুন<i class="ti-angle-right"></i></button>
                                            </form>
{{--                                            <a href="" class="btn theme-bg enroll-btn ">কোর্সটি কিনুন<i class="ti-angle-right"></i></a>--}}
                                        </div>

                                        <a href="javascript:void(0)" class="btn theme-bg enroll-btn show-checkout-form" data-auth-status="{{ auth()->check() ? '1' : '0' }}" >কোর্সটি কিনুন<i class="ti-angle-right"></i></a>
                                    @else
                                        <a href="javascript:void(0)" class="btn theme-bg enroll-btn">ভর্তির সময় শেষ<i class="ti-angle-right"></i></a>
                                    @endif
                                @else
                                    <a href="javascript:void(0)" class="btn theme-bg enroll-btn">আপনার অর্ডার অপেক্ষমান আছে<i class="ti-angle-right"></i></a>
                                @endif
                            @else
                                @if($courseEnrollStatus == 'false')
                                    @if(auth()->check())
                                        <a href="#" class="btn theme-bg enroll-btn">Enroll Now<i class="ti-angle-right"></i></a>
                                        <form action="{{ route('front.place-free-course-order', ['course_id' => $course->id]) }}" method="post" id="freeCourseOrderForm">
                                            @csrf
                                            <input type="hidden" name="ordered_for" value="course">
                                        </form>
                                    @else
                                        <a href="#" class="btn theme-bg enroll-btn">Login to Enroll<i class="ti-angle-right"></i></a>
                                    @endif
                                @endif
                            @endif

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->

    <!-- ============================ Related Cources ================================== -->
{{--    <section>--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12 mb-3">--}}
{{--                    <h4>Related Courses</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12">--}}
{{--                    <div class="slide_items">--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-2.jpg" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_6"><span>Development</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">149</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Basic knowledge about hodiernal bharat in history</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>02 hr 05 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>17 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-6.jpg" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-3.jpg" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_5"><span>Finance</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">99</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Advance PHP knowledge with laravel to make smart web</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>02 hr 47 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>32 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-5.jpg" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-4.jpg" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_4"><span>Banking</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">49</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete accounting & bank financial course 2021</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>04 hr 10 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>40 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-4.jpg" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-5.png" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_3"><span>Business</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">129</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete business plan course includes 50 templates</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>06 hr 07 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>35 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-3.jpg" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-6.png" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_2"><span>Physics</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">399</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Full web designing course with 20 web template designing</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>03 hr 10 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>19 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-2.jpg" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Single Item -->--}}
{{--                        <div class="lios_item">--}}
{{--                            <div class="crs_grid shadow_none brd">--}}
{{--                                <div class="crs_grid_thumb">--}}
{{--                                    <a href="course-detail.html" class="crs_detail_link">--}}
{{--                                        <img src="{{asset('frontendAsset')}}/assets/img/cr-7.jpg" class="img-fluid rounded" alt="" />--}}
{{--                                    </a>--}}
{{--                                    <div class="crs_video_ico">--}}
{{--                                        <i class="fa fa-play"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_locked_ico">--}}
{{--                                        <i class="fa fa-lock"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_caption">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_cates cl_1"><span>Design</span></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">89</span></h2></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 & 2022)</a></h4></div>--}}
{{--                                    <div class="crs_info_detail">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="fa fa-clock text-danger"></i><span>06 hr 07 min</span></li>--}}
{{--                                            <li><i class="fa fa-video text-success"></i><span>27 Lectures</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="preview_crs_info">--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar" role="progressbar" style="width:35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="crs_grid_foot">--}}
{{--                                    <div class="crs_flex">--}}
{{--                                        <div class="crs_fl_first">--}}
{{--                                            <div class="crs_tutor">--}}
{{--                                                <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="{{asset('frontendAsset')}}/assets/img/user-1.png" class="img-fluid circle" alt="" /></a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="crs_fl_last">--}}
{{--                                            <div class="foot_list_info">--}}
{{--                                                <ul>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>--}}
{{--                                                    <li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <!-- ============================ Related Cources ================================== -->
</div>
