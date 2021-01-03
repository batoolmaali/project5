<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('theme/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">



	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}"/>


</head>
<body>
<header class="header-section  pt-0   position-relative" style="background-color:black">
		<div class="header-warp ">
			
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="{{ route('index')}}" class="site-logo">
					<img src="{{asset('asset/img/logo.png')}}" height='100em' width="100em" alt="">
				</a>
				<nav class="top-nav-area w-100">
				@if(Auth::check())
					<div class="user-panel">
					<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</div>
				@else
					<div class="user-panel">
						<a href="login">Login</a> / <a href="register">Register</a>
					</div>
				@endif
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="{{ route('index')}}">Home</a></li>
						<li><a href="{{route('allevents')}}">Events</a>
							
						</li>
						<li><a href="{{route('allcategories')}}">Categories</a></li>
						<li><a href="blog.html">Profile</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	
	
		
	<section>
		<div class="feature-photo" style="hight:200px" >
			<figure style="hight:200px" ><img src="{{asset('theme/css/images/resources/11.jfif')}}" alt=""></figure>
			
			
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src='{{asset("images/$user->image")}}' alt="">
								<button type="button" id="myBtn"> <i class="fa fa-camera-retro"></i></button>
								
			
								
								
								
								
								
								
								
								
								
								
								
								
									
								
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9" >
						<div class="timeline-info" >
							<ul>
								<li class="admin-name">
								  <h5>{{$user->name}}</h5>
							
								</li>
								<!-- <li>
									<a class="active" href="time-line.html" title="" data-ripple="">time line</a>
									<a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
									<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
									<a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
									<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
									<a class="" href="about.html" title="" data-ripple="">about</a>
									<a class="" href="#" title="" data-ripple="">more</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->
		
	<section>
		<div style="background-color:#39004d">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">Socials</h4>
											<ul class="socials">
												<li class="facebook">
													<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins></ins></a>
												</li>
												<li class="twitter">
													<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins></ins></a>
												</li>
												<li class="google">
													<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins></ins></a>
												</li>
											</ul>
										</div>
									
									
									
									<div class="widget">
										<h4 class="widget-title">Other Links</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="https://www.worldcubeassociation.org/" title="">World Cube Association</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="https://www.chess.com/article/view/how-to-set-up-a-chessboard" title="">Chess.com</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="https://steamcommunity.com/app/872990" title="">Stream Community</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="https://www.ea.com/en-gb/games/fifa/fifa-19/compete/events/community-tournament-guidelines" title="">EA Sports</a>
											</li>
											
										</ul>
									</div><!-- Shortcuts -->
									
									
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="loadMore">
									
									<div class="central-meta item" style="display: inline-block;">
										<div class="user-post">
											<div class="friend-info">
												<figure>
													<img src='{{asset("images/$user->image")}}' alt="">
												</figure>
												<div class="friend-name">
													<ins><a href="time-line.html" title="{{$user->name}}">{{$user->name}}</a></ins>
												</div>
												

												<div class="description">
														
														
															<h3>Hi I am {{$user->name}} welcome to my profile <i class="fa fa-heart" aria-hidden="true"></i>
																</h3>
															<h3>contact me <i class="fa fa-hand-o-down" aria-hidden="true"></i>
																</h3>
														<h3> email:{{$user->email}}</h3>
														<h3>phone:{{$user->phone}}</h3>
														<h3><i class="fa fa-facebook-square" aria-hidden="true"></i>
														<i class="fa fa-instagram" aria-hidden="true"></i>
														<i class="fa fa-twitter-square" aria-hidden="true"></i></h3>
														


														
													</div>
												<div class="post-meta">
													
												
													<div class="we-video-info">
														<ul>
															<li class="social-media">
																<div class="menu">
																
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																	</div>
																  </div>
																	<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																	</div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																	</div>
																  </div>

																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							<button class="btn-view btn-load-more">Load More</button></div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
											<div class="baner-top">
												<span><img src="{{asset('theme/css/images/book-icon.png')}}" alt=""></span>
												<span><img src="{{asset('theme/css/images/book-icon.png')}}" alt=""></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a href="#" title="" data-ripple="">start now!</a>
											</div>
										</div>											
									</div>
									
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				
			</div>
			<div class="footer-right-pic">
				<img src="{{asset('asset/img/footer-right-pic.png')}}" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="{{asset('asset/img/logo.png')}}" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Events</a></li>
				<li><a href="">Categories</a></li>
				<li><a href="">Profile</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Gamerz</a> 2020 @ All rights reserved</div>
		</div>
	</footer>

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
					<i><img src="{{asset('theme/css/images/credit-cards.png')}}" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div><div class="side-panel">
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1"> 
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22"> 
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33"> 
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44"> 
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55"> 
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66"> 
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77"> 
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88"> 
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99"> 
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101"> 
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111"> 
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><div class="strp-spinner-move" style="display: none;"><div class="strp-spinner" style="display: none;"><div class="strp-spinner-rotate" style="animation: 1s steps(80) 0s infinite normal none running strp-spinner-spin;"><div class="strp-spinner-frame" style="opacity: 0.01; transform: rotate(4.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.03; transform: rotate(9deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.04; transform: rotate(13.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.05; transform: rotate(18deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.06; transform: rotate(22.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.08; transform: rotate(27deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.09; transform: rotate(31.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.1; transform: rotate(36deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.11; transform: rotate(40.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.13; transform: rotate(45deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.14; transform: rotate(49.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.15; transform: rotate(54deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.16; transform: rotate(58.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.18; transform: rotate(63deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.19; transform: rotate(67.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.2; transform: rotate(72deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.21; transform: rotate(76.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.23; transform: rotate(81deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.24; transform: rotate(85.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.25; transform: rotate(90deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.26; transform: rotate(94.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.28; transform: rotate(99deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.29; transform: rotate(103.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.3; transform: rotate(108deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.31; transform: rotate(112.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.33; transform: rotate(117deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.34; transform: rotate(121.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.35; transform: rotate(126deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.36; transform: rotate(130.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.38; transform: rotate(135deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.39; transform: rotate(139.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.4; transform: rotate(144deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.41; transform: rotate(148.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.43; transform: rotate(153deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.44; transform: rotate(157.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.45; transform: rotate(162deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.46; transform: rotate(166.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.48; transform: rotate(171deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.49; transform: rotate(175.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.5; transform: rotate(180deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.51; transform: rotate(184.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.53; transform: rotate(189deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.54; transform: rotate(193.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.55; transform: rotate(198deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.56; transform: rotate(202.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.58; transform: rotate(207deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.59; transform: rotate(211.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.6; transform: rotate(216deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.61; transform: rotate(220.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.63; transform: rotate(225deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.64; transform: rotate(229.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.65; transform: rotate(234deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.66; transform: rotate(238.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.68; transform: rotate(243deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.69; transform: rotate(247.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.7; transform: rotate(252deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.71; transform: rotate(256.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.73; transform: rotate(261deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.74; transform: rotate(265.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.75; transform: rotate(270deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.76; transform: rotate(274.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.78; transform: rotate(279deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.79; transform: rotate(283.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.8; transform: rotate(288deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.81; transform: rotate(292.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.83; transform: rotate(297deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.84; transform: rotate(301.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.85; transform: rotate(306deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.86; transform: rotate(310.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.88; transform: rotate(315deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.89; transform: rotate(319.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.9; transform: rotate(324deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.91; transform: rotate(328.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.93; transform: rotate(333deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.94; transform: rotate(337.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.95; transform: rotate(342deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.96; transform: rotate(346.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.98; transform: rotate(351deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 0.99; transform: rotate(355.5deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div><div class="strp-spinner-frame" style="opacity: 1; transform: rotate(360deg);"><div class="strp-spinner-line" style="background: rgb(84, 84, 84);"></div></div></div></div></div><div class="strp-window strp-measured strp-window-skin-strip"><div class="strp-pages"></div><div class="strp-nav strp-nav-previous" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-nav strp-nav-next" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-close"><div class="strp-close-background"></div><div class="strp-close-icon"></div></div></div><div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div></div>
	<!-- side panel -->		

						<!-- The Modal -->
						<div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
		<form class="edit-phto" style="position:static" method="post" action="/updatePic/{{$user->id}}" enctype="multipart/form-data">
		
        @csrf
            <div class="mb-3">
			<label for="image"><b>image</b></label>
             <input type="file" class="form-control-file"  name="image">
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
    
      
       
      </form>
    </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
	
	<script data-cfasync="false" src="{{asset('theme/css/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="js/main.min.js"></script>
	<script src="{{asset('theme/css/js/script.js')}}"></script>

	<script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.sticky-sidebar.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>

<div id="mm-blocker" class="mm-slideout"></div>



</body></html>