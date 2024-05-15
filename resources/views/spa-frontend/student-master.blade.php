<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biddabari IT || {{ $title ?? '' }}</title>
    <!-- Custom CSS -->
    <link href="{{asset('frontendAsset')}}/assets/css/styles.css" rel="stylesheet" />
    <style>
        {{--@media (min-width: 993px) {--}}
        {{--    .header.header-transparent .nav-brand, .header.header-transparent .nav-brand:focus, .header.header-transparent .nav-brand:hover, .header.header-transparent .nav-menu>li>a {--}}
        {{--        {{ url()->current() == url('/') ? 'color: #ffffff;' : 'color: #0b0b0b;' }}--}}
        {{--    }--}}
        {{--}--}}
    </style>
    <style>
        .pagination>li>button, .pagination>li>button, .pagination>li>span {
            position: relative;
            float: left;
            padding: 0;
            margin: 5px;
            color: #5a6f7c;
            text-decoration: none;
            background-color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border: 1px solid #eaeff5;
        }
        .page-item { cursor: pointer }
        .
    </style>
    @livewireStyles
</head>

<body>
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    @include('front.include.header')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
{{--    @yield('content')--}}

    {{-- In work, do what you enjoy. --}}
    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray min">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">
                        <div class="d-user-avater">
                            <img src="{{asset(file_exists(auth()->user()->profile_photo_path) ? auth()->user()->profile_photo_path : 'frontendAsset/assets/img/user-3.jpg')}}" class="img-fluid avater" alt="">
                            <h4>{{ auth()->user()->name ?? 'Student Name' }}</h4>
                            <span>Student</span>

                            <!-- <div class="elso_syu77">
                                <div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>Ratings</span></div>
                                <div class="one_third"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>Courses</span></div>
                                <div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>Enrolled User</span></div>
                            </div> -->
                        </div>

                        <div class="d-navigation">
                            <ul id="side-menu">
                                <li class="active"><a href="{{route('student.dashboard')}}" wire:navigate ><i class="fas fa-th"></i>Dashboard</a></li>

{{--                                 @yield('my_all_course') --}}

                                <li><a href="{{route('student.profile')}}" wire:navigate ><i class="fas fa-address-card"></i>My Profile</a></li>
                                <li><a href=""><i class="fas fa-cog"></i>Settings</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->
                    <!-- <a href="#" class="btn theme-bg enroll-btn">Enroll Now<i class="ti-angle-right"></i></a> -->

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <a href="{{route('student.get-enrolled-courses', ['type' => 'videos'])}}" wire:navigate >
                                <div class="dashboard_stats_wrap">
                                    <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2">
                                        <div class="position-absolute text-white h5 mb-0">
                                            <i class="fas fa-video"></i>
                                        </div>
                                    </div>
                                    <div class="dashboard_stats_wrap_content"><h5>Videos</h5></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <a href="{{route('student.get-enrolled-courses', ['type' => 'pdfs'])}}" wire:navigate >
                                <div class="dashboard_stats_wrap">
                                    <div  class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div></div>
                                    <div class="dashboard_stats_wrap_content"><h5>PDF</h5></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <a href="{{route('student.get-enrolled-courses', ['type' => 'notes'])}}" wire:navigate >
                                <div class="dashboard_stats_wrap">
                                    <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
                                    <div class="dashboard_stats_wrap_content"><h5>Notes</h5></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <a href="{{route('student.get-enrolled-courses', ['type' => 'assignments'])}}" wire:navigate >
                                <div class="dashboard_stats_wrap">
                                    <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div></div>
                                    <div class="dashboard_stats_wrap_content"><h5>Assignment</h5></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    @yield('dashboard_content')
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Dashboard: Dashboard End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <!-- ============================ Call To Action ================================== -->
    @include('front.include.footer')
    <!-- ============================ Footer End ================================== -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('frontendAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/popper.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/bootstrap.min.js"></script>
{{--<script src="{{asset('frontendAsset')}}/assets/js/select2.min.js"></script>--}}
<script src="{{asset('frontendAsset')}}/assets/js/slick.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/moment.min.js"></script>
{{--<script src="{{asset('frontendAsset')}}/assets/js/daterangepicker.js"></script>--}}
{{--<script src="{{asset('frontendAsset')}}/assets/js/summernote.min.js"></script>--}}
<script src="{{asset('frontendAsset')}}/assets/js/metisMenu.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

@livewireScripts


</body>
</html>
