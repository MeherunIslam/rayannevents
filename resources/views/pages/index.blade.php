@extends('layouts.frontend-master')

@section('content')

<!-- banner-bottom -->
<div class="banner-bottom">
		<div class="container">
			<h3 class="w3layouts_head">Welcome to our <span>Events</span></h3>
			<p class="w3_para">Rayann Events is the ultimate  party planning destination for Bangladesh offering 
			completely hassle-free party experience through secure and trusted People.We provide our customers with 
			memorable Party  experience.</p>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div>
					<h4>Birthdays</h4>
					<p>Big occasions like Birthdays,these should be celebrated and made special. Celebrating all of 
					life’s moments and spending time with friends and family creating special memories is what 
					makes life AWESOME!</p>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
					</div>
					<h4>Wedding</h4>
					<p>Everyone deserves a memorable wedding ceremony - one that is truly unique and meaningful, 
                        and at an affordable price.</p>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-snowflake-o" aria-hidden="true"></i>
					</div>
					<h4>Special</h4>
					<p>Rayann Events is a renowned target oriented venture run by a group of skilled and dedicated personnel who has the 
					experience of organizing a numerous illustrious weddings and events.We are here for your all kind of events solutions.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div class="agile-ser">
		<div class="container">
			<h3 class="w3layouts_head">Our <span>Services</span></h3>
			<p class="w3_para">We make all the wedding event management customize packages as per our clients requirements and budget. So, all of our clients was happy to get memorable event within their budget.</p>
				<div class="agile-ser-tp">
				<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/loc.jpg" class="img-responsive" alt="">
						</div>
						<h4>Locations & Venues</h4>
						<p>Every single individual has this goal in mind somewhere that his / her wedding should be a great one. Also, many of us think it should be at a location/stadium that fits our mood and theme of our wedding.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/enter.jpg" class="img-responsive" alt="">
						</div>
						<h4>Entertainment & Entertainers</h4>
						<p> The best wedding planner Bangladesh will create appropriate wedding planner packages for your budget. Since we started, we providing best wedding planning Services.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/te5.jpg" class="img-responsive" alt="">
						</div>
						<h4>Photographers & Videographers</h4>
						<p>Rayann Events is the best platform for your desired directory & planning platform in Bangladesh, where you can find the best Photographers, they are very skilled , you can check our most prestigious photographers in our photography & cinematography.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/c.jpg" class="img-responsive" alt="">
						</div>
						<h4>Cakes</h4>
						<p>As you are here in best wedding planner’s in Bangladesh. Therefore, we may consider that you have upcoming wedding ceremony of you or your nearest one’s! As you are finding the best Wedding Planner in Bangladesh, we may say that yes you are in right place.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/deco.jpg" class="img-responsive" alt="">
						</div>
						<h4>Decor & Decorations</h4>
						<p>We provide premium and exclusive decoration services in Bangladesh.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/cater.jpg" class="img-responsive" alt="">
						</div>
						<h4>Catering & Food</h4>
						<p>Rayann Events is the best platform for all of your desired directory & planning platform in Bangladesh, where you can find the best & top ranked  Chef for any kind of food as well.we can assure you best quality within low price you can see our catering .</p>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //services -->
<!-- quicklinks -->
	<div class="quicklinks-agile-info">
		<div class="container">
			<h3 class="w3layouts_head">Quick <span>Links</span></h3>
			<p class="w3_para">We specialise in wedding planning for intimate, authentic and cosy gatherings that are all about love, magic and the pure joy of getting married.</p>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/2.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Birthday Specials</h4>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Birthday Specials-Adult</a></li>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Birthday Specials-Baby</a></li>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Birthday Specials-Teenage</a></li>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-right ece">
							<h4>Wedding Parties</h4>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Wedding Parties-Muslim</a></li>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Wedding Parties-Hindu</a></li>
							<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Wedding Parties-Christian</a></li>																
					</div>
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/1.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="{{asset('frontend')}}/images/10.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Specials Events</h4>
						<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Engagement Party</a></li>
						<li><a href="{{route('login')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i>Wedding Anniversary</a></li>
					</div>																																			
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //quicklinks -->

@endsection