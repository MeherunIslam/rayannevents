<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rayann Event Planner</title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Rayann Events Planner" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('frontend')}}/css/flexslider.css" type="text/css" media="screen" property="" />
		<link href="{{asset('frontend')}}/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
		<!-- for bootstrap working -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<!-- //for bootstrap working -->
		<!-- js -->
		<script type="text/javascript" src="{{asset('frontend')}}/js/jquery-2.1.4.min.js"></script>
		<script src="{{asset('frontend')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
		<!-- //js -->
		<!-- font-awesome-icons -->
		<link href="{{asset('frontend')}}/css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="{{asset('frontend')}}/fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
		<link href="{{asset('frontend')}}/fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">
							Don't Wait, Login now!</h4>
					</div>
					<div class="modal-body modal-body-sub">
						<div class="row">
							<div class="col-md-8 modal_body_left modal_body_left1" style="padding-left:22em;">
								@if (Route::has('login'))
									<div class="top-right links">
										@auth
											<li class="m_nav_item" id="moble_nav_item_7"> <a href="{{ url('/home') }}" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Home">My Account</span></a></li>
											@else
											<li class="m_nav_item" id="moble_nav_item_8"> <a href="{{ route('login') }}" class="link link--kumya"><i class="fa fa-sign-in" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
											@if (Route::has('register'))
												<li class="m_nav_item" id="moble_nav_item_9"> <a href="{{ route('register') }}" class="link link--kumya"><i class="fa fa-address-book" aria-hidden="true"></i><span data-letters="Register">Register</span></a></li>
											@endif
										@endauth
									</div>
								@endif	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('#myModal88').modal('show');
		</script>
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<!-- header -->
				<div class="w3_agile_menu">
					<div class="agileits_w3layouts_nav">
						<div id="toggle_m_nav">
							<div id="m_nav_menu" class="m_nav">
								<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
								<div class="m_nav_ham" id="m_ham_2"></div>
								<div class="m_nav_ham" id="m_ham_3"></div>
							</div>
						</div>
							<div id="m_nav_container" class="m_nav wthree_bg">
								<nav class="menu menu--sebastian">
									<ul id="m_nav_list" class="m_nav menu__list">
										<li class="m_nav_item active" id="m_nav_item_1"> <a href="{{ url('/') }}" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_4"> <a href="{{ url('pages/services') }}" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="Our Services">Our Services</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_4"> <a href="{{ url('pages/about') }}" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_6"> <a href="{{ url('pages/contact') }}" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact">Contact</span></a></li>
									</ul>
								</nav>
							</div>
					</div>    
				</div>
				
				<div class="header">
					<div class="agileits_w3layouts_logo">
						<div class="w3l_login">	
							<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
						</div> 	
					</div>
				
					<div class="agileits_w3layouts_logo">
						<a class="logo-wed" href="#"><img alt="Wedding Planner Logo" src="{{ asset('frontend') }}/images/rayann.png" style="width:200px;"></a> 	
					</div>
					<div class="agileits_w3layouts_logo">
						<h1><a href="{{ url('/') }}" style="padding:10px;margin-left:180px;margin-right:50px;width:60px;">Rayann Events</a></h1>
					</div>
					<div class="agileinfo_social_icons">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>	
				<!-- //header -->
				<div class="w3ls_banner_info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Your event planner awaits.</h3>
										<p>Your personal event planner works behind the scenes <br>taking care of who, what, where and when for all your events.</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Planning a event has<br>never been easier.</h3>
										<p>Sign up now and get access to your all-in-one event planner.<br>&nbsp</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Let professionals run your event!</h3>
										<p>We'll guide you every step of the way with expert event <br>planning tips, articles, vendors, inspiration and more.</p>
									</div>
								</li>
							</ul>
						</div>
					</section>
					<!-- flexSlider -->
					<script defer src="{{asset('frontend')}}/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							$('body').removeClass('loading');
							}
						});
						});
					</script>
					<!-- //flexSlider -->
				</div>
			</div>
		</div>
		<!-- //banner -->

		@yield('content');

		<!-- footer -->
		<div class="w3l_footer">
			<div class="container">
				<h1><a href="index.html">Rayann Events</a></h1>
				<br><br>
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
							<h4>Location:</h4>
							<p>West Masdair, Narayangonj,<br> Gorosthan Road, Bangladesh</p>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<h4>Contact us:</h4>
						<p><span>Phone : </span><a href="tel:+505-222-5432">+505-222-5432</a></p>
						<p><span>Gmail : </span><a href="meherunislam72@gmail.com">meherunislam72@gmail.com</a>
						<a href="mailto:taniyaahmed942@gmail.com?subject=subject&cc=cc@gmail.com">taniyaahmed942@gmail.com</a></p>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
							<h4>Opening hours:</h4>
							<p>Working days (8am-9pm)</p>
							<p>Sundays (9am-1pm)</p>
					</div>
					<div class="clearfix"> </div>

				</div>
				<!-- footer-button-info -->
				<div class="footer-middle-agileinfo">
					<div class="footer-button">
						<div class="button-top-w3layouts">
							<div class="logo-icons-w3ls">
								<i class="fa fa-heart heart1" aria-hidden="true"></i>
								<i class="fa fa-heart-o heart2" aria-hidden="true"></i>
							</div>
						</div>
						<div class="sim-button button12"><a href="{{ url('pages/contact_us') }}">Contact Us</a></div>
						<b><h2>We’re Committed to Service Excellence.</h2></b>
					</div>
				</div>
				<!-- footer-button-info -->
			</div>
		</div>

		<div class="botttom-nav-agileits">
			<ul>
				<li class="active"><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('pages/services') }}">Our Services</a></li>
				<li><a href="{{ url('pages/about') }}">About Us</a></li>
				<li><a href="{{ url('pages/project') }}">Portfolio</a></li>
				<li><a href="{{ url('pages/contact_us') }}">Contact Us</a></li>
			</ul>
		</div>
		<div class="footer-w3layouts">
			<div class="container">
				<div class="agile-copy">
					<p>© 2021 Rayann Evants Planning. All rights reserved | Design by <a href="">Tania Akter</a></p>
				</div>
				<div class="agileits-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--/footer -->

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('frontend')}}/js/move-top.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- menu -->
		<script type="text/javascript" src="{{asset('frontend')}}/js/main.js"></script>
		<!-- //menu -->
		<!-- for bootstrap working -->
		<script src="{{asset('frontend')}}/js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/										
				$().UItoTop({ easingType: 'easeOutQuart' });										
				});
		</script>
		<!-- //here ends scrolling icon -->
	</body>
</html>

