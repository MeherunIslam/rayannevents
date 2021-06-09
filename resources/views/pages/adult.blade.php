@extends('layouts.userfont-master')

@section('user_content')
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s" >
				<li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true">Home </span></a></li>
				<li class="active"><span> -> Birthday Specials </span></li>
				<li class="active"><span> -> Adult </span></li>
				
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--- adult --->
	<div class="products">
		<!-- Hero Section Begin -->
		<section class="hero">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						@include('pages.inc.category')
					</div>
					<div class="col-lg-9">
						<div class="hero__search">
							<div class="hero__search__form">
								<form action="{{ route('search') }}" method="GET">
                                	<input type="text" class="form-control" name="search" placeholder="What do yo u need?">
									<button type="submit" class="site-btn">SEARCH</button>
								</form>
							</div>
							<div class="hero__search__phone">
								<div class="hero__search__phone__icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="hero__search__phone__text">
									<h5> +65 11.188.888</h5>
									<span>support 24/7 time</span>
								</div>
							</div>
						</div>
						<div class="hero__item set-bg" data-setbg="{{asset('userfont')}}/img/hero/banner.jpg">
							<div class="hero__text">
								<span>Bithday Special</span>
								<h2>Designs </h2>
								<p></p>
								<a class="primary-btn">CHOOSE NOW</a>
								<br><br><br><br>
								<span>
									<div class="sys_jw_player_mp3">
										<style type="text/css">
											.sys_jw_player_mp3{padding:5px;background-color:#e0e0d1;}
											.sys_jw_player_mp3 p{margin:0;padding:5px 0;text-align:center;}
											.sys_jw_player_mp3 audio{ width: 100%; }
										</style>
										<audio controls="" preload="none" autoplay="true">
											<source src="{{asset('userfont')}}/Song.Birthday.mp3" type="audio/mpeg">

											<object width="100%" height="24" flashvars="file={{asset('userfont')}}/Song.Birthday.mp3&amp;duration=&amp;autostart=true" wmode="opaque" allowscriptaccess="always" allowfullscreen="true" quality="high" bgcolor="#ffffff" name="ply" id="ply" data="classes/components/JWPlayerMP3/resources/player.swf?1001096" type="application/x-shockwave-flash"></object>
										</audio>
										<p id="sys_jw_player_mp3_file_name_I1603">Song . Birthday.mp3</p>
										<p></p>
									</div>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero Section End -->

		<!-- Categories Section Begin -->
		<section class="categories">
			<div class="container">
				<div class="row">
					<div class="categories__slider owl-carousel">
						@foreach ( $categories as $cat)
							@php
								$products = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->latest()->get();
							@endphp
							@foreach ($products as $product)
								<div class="col-lg-3">
									<div class="categories__item set-bg" data-setbg="{{ asset($product->image_one) }}">
										<h5><a href="{{ url('proudct/details/'.$product->id) }}">{{ $product->product_name}}</a></h5>
									</div>
								</div>
							@endforeach
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- Categories Section End -->

		<!-- Featured Section Begin -->
		<section class="featured spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Featured Item</h2>
						</div>
						<div class="featured__controls">
							<ul>
								<li class="active" data-filter="*">All</li>									
								@foreach ( $subcategories as $subcat)
									<li data-filter=".filter{{ $subcat->id }}">{{ $subcat->subcategory_name }}</li>
								@endforeach										
							</ul>
						</div>
					</div>
				</div>
				<div class="row featured__filter">						
					@foreach ( $subcategories as $subcat)
						@php
							$products = App\Product::where('subcategory_id',$subcat->id)->where('category_id','=',39)->latest()->get();
						@endphp
						@foreach ( $products as $product )
							<div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $subcat->id}}">
								<div class="featured__item">
									<div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_one) }}">
										<ul class="featured__item__pic__hover">
											<li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
											<form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
												@csrf
												<input type="hidden" name="price" value="{{ $product->price }}">
												<li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
											</form>
										</ul>
									</div>
									<div class="featured__item__text">
										<h6><a href="{{ url('proudct/details/'.$product->id) }}">{{ $product->product_name}}</a></h6>
										<h5>${{ $product->price}}</h5>
										<h5>
											@if($product->status == 1)
												<span class="badge badge-success">Available</span>
												@else 
												<span class="badge badge-danger">Not Available</span>
											@endif
										</h5>
									</div>
								</div>
							</div>
						@endforeach
					@endforeach						
				</div>
			</div>
		</section>
		<!-- Featured Section End -->

		<!-- Banner Begin -->
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="banner__pic">
							<img src="{{ asset('userfont') }}/img/banner/banner-1.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="banner__pic">
							<img src="{{ asset('userfont') }}/img/banner/banner-2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- Latest Product Section Begin -->
		<section class="latest-product spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="latest-product__text">
							<h4>Latest Designs</h4>
							<div class="latest-product__slider owl-carousel">
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_one) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach	
									@endforeach	
								</div>
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_one) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="latest-product__text">
							<h4>Latest Designs</h4>
							<div class="latest-product__slider owl-carousel">
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_two) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach
									@endforeach	
								</div>
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_two) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach
									@endforeach		
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="latest-product__text">
							<h4>Latest Designs</h4>
							<div class="latest-product__slider owl-carousel">
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_three) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach
									@endforeach		
								</div>
								<div class="latest-prdouct__slider__item">
									@foreach ( $categories as $cat)
										@php
											$lts_p = App\Product::where('category_id',$cat->id)->where('category_id','=',39)->limit(3)->latest()->get();
										@endphp
										@foreach ( $lts_p as $product )
											<a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
												<div class="latest-product__item__pic">
													<img src="{{ asset($product->image_three) }}" style="height:180px; width:180px;" alt="">
												</div>
												<div class="latest-product__item__text">
													<h6>{{ $product->product_name}}</h6>
													<span>${{ $product->price }}</span>
												</div>
											</a>
										@endforeach
									@endforeach		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest Product Section End -->
		<div class="clearfix"> </div>
	</div>
	<!--- adult --->
@endsection