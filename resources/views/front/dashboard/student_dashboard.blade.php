@extends('frontend.master')
@section('title')
Biddabari IT || Dashboard
@endsection

@section('content')	
			
			<!-- ============================ Dashboard: Dashboard Start ================================== -->
	<section class="gray min">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="dashboard-navbar">
						<div class="d-user-avater">
							<img src="{{asset('frontendAsset')}}/assets/img/user-3.jpg" class="img-fluid avater" alt="">
							<h4>Adam Harshvardhan</h4>
							<span>Senior Designer</span>
							<div class="elso_syu89">
								<ul>
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div>
							<!-- <div class="elso_syu77">
								<div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>Ratings</span></div>
								<div class="one_third"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>Courses</span></div>
								<div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>Enrolled User</span></div>
							</div> -->
						</div>
						
						<div class="d-navigation">
							<ul id="side-menu">
								<li class="active"><a href="{{route('student.dashboard')}}"><i class="fas fa-th"></i>Dashboard</a></li>
								<li class=""><a href=""><i class="fas fa-shopping-basket"></i>Web Development</a></li>
								<li class=""><a href=""><i class="fas fa-shopping-basket"></i>Web Design</a></li>
								<li class=""><a href=""><i class="fas fa-shopping-basket"></i>Digital Marketing</a></li>
								<li class=""><a href=""><i class="fas fa-shopping-basket"></i>SEO Marketing</a></li>
								<li class=""><a href=""><i class="fas fa-shopping-basket"></i>Youtube Marketing</a></li>
								<li class=""><a href=""><i class="fas fa-gem"></i>Enrollment Courses</a></li>
					
						
								<li><a href="{{route('student.profile')}}"><i class="fas fa-address-card"></i>My Profile</a></li>
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
							<div class="dashboard_stats_wrap">
								<a href="{{route('dashboard.video')}}" class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-video"></i></div></a>
								<div class="dashboard_stats_wrap_content"><h5>Videos</h5></div>
							</div>	
						</div>

						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="dashboard_stats_wrap">
								<a href="{{route('dashboard.pdf')}}" class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div></a>
								<div class="dashboard_stats_wrap_content"><h5>PDF</h5></div>
							</div>	
						</div>
						
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="dashboard_stats_wrap">
								<a href="{{route('dashboard.note')}}" class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></a>
								<div class="dashboard_stats_wrap_content"><h5>Notes</h5></div>
							</div>	
						</div>

						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
							<div class="dashboard_stats_wrap">
								<a href="{{route('dashboard.assignment')}}" class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div></a>
								<div class="dashboard_stats_wrap_content"><h5>Assignment</h5></div>
							</div>	
						</div>
					</div>
					
					@yield('dashboard_content')

				</div>
			</div>
		</div>
	</section>
			<!-- ============================ Dashboard: Dashboard End ================================== -->
			
@endsection