<div class="header header-transparent change-logo">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand static-logo" wire:navigate href="{{route('home')}}"><img src="{{asset('frontendAsset')}}/assets/img/bbit-logo-01-1024x391.png" class="logo" alt="" /></a>
				<a class="nav-brand fixed-logo" wire:navigate href="{{route('home')}}"><img src="{{asset('frontendAsset')}}/assets/img/bbit-logo-01-1024x391.png" class="logo" alt="" /></a>
				<div class="nav-toggle"></div>
				<div class="mobile_nav">
					<ul>
						<li>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
								<span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="nav-menus-wrapper">
				<ul class="nav-menu">
					<li class="active"><a href="{{route('home')}}" wire:navigate >Home</a></li>
					<li class=""><a href="{{route('all-courses')}}" wire:navigate >Courses</a></li>
                    <li class=""><a href="" wire:navigate >Free Service</a></li>
                    <li class=""><a href="" wire:navigate >Notice</a></li>
					<!-- <li><a href="dashboard.html">Dashboard</a></li> -->
				</ul>

				<ul class="nav-menu nav-menu-social align-to-right">
                    @if(auth()->check())
                         <li><a href="javascript:void(0)">User<span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu">
							<li><a href="{{ route('student.dashboard') }}" wire:navigate >Dashboard</a></li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" class="alio_green">
                                    <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Logout</span>
                                </a>
                                <form action="{{ route('logout') }}" id="logoutForm" method="post">@csrf</form>
                            </li>
						</ul>
					</li>


                    @else
                        <li class="add-listing theme-bg">
                            <a href="{{route('login')}}" class="text-white">Login</a>
                        </li>
                    @endif
				</ul>
			</div>
		</nav>
	</div>
</div>
