@extends('layouts.frontend-master')

@section('content')
<!-- about -->
<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head">Why Choose <span>Us</span></h3>
				<p class="w3_para">A directory of complete wedding , birthday  &  event to HELP plan your perfect wedding ,birthday & event day .</p>
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3>Our development department gives new concepts and designs</h3>
					<p><i>Your one stop shop for designer weddings. Uniqueness to your wedding event. Strong network to offer you various specialties from different cities of Bangladesh.
					Designer touch to enhance the ambiance. Highly cost effective. We help you to figure out the best service providers of your town.High professionalism and dedication.
					Covering every aspect of wedding and giving a symmetric touch to it. Hassle free Wedding</i></p>
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
					<div class="skillbar" data-percent="78">
					  <span class="skillbar-title" style="background: #f1703a;">Birthdays</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="54">
					  <span class="skillbar-title" style="background: #2980b9;">Wedding</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="76">
					  <span class="skillbar-title" style="background: #a0d034;">Special</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="80">
					  <span class="skillbar-title" style="background: #e7cc2c;">Parties</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- skills -->
	<script src="{{asset('frontend')}}/js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});
	</script>
<!-- //skills -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3><span>Rayann Events</span> specialises in large-scale events for individual and public clients.</h3>
			<div class="agileits_w3layouts_learn_more agileits_learn_more hvr-radial-out">
				<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Rayann Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="{{asset('frontend')}}/images/5.jpg" alt=" " class="img-responsive" />
						<p>
							<i>We begin by listening to your goals and ideas. Then we give our imagination free reign to 
								develop an innovative guiding concept. We illustrate the overall design with detailed 
								sketches. Our in-house team of designers and architects creates environments that combine advanced technology with refined craftsmanship.
							</i>
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- team -->
	<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head">Our Amazing <span>Team</span></h3>
				<p class="w3_para">Our Event  Management & Wedding  Planning  offers you a user-friendly  environment  for  facility  scheduling  and  event  management.</p>
			<div class="w3ls_news_grids w3_agileits_team_grids"> 
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('frontend')}}/images/tani.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Nishi Ahmed</h4>
					<p>Decorator</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('frontend')}}/images/tithy.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Tehmeed Rayann</h4>
					<p>Designer</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('frontend')}}/images/nishi.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="https://www.facebook.com/nishiahamed.nishi.7" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Tania Akter</h4>
					<p>Co-Founder</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('frontend')}}/images/mehul.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Khadiza Islam Meherun</h4>
					<p>Founder</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
@endsection