@extends('layouts.userfont-master')

@section('user_content')

    <!-- @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif -->
    
    <!-- Parlor Section Begin -->
    <section class="blog spad">
        <form>
            @csrf
            <div class="row">
                <div class="col-lg-12 text-center">
                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true">
                    <button type="submit" class="site-btn">Apply Now</button></span></a>
                </div>
            </a>            
            </div>
        </form><br><br>
        
        <h4 style="text-align:center;color: #0000e6;"><b>Personalized Service for Bride & Bridemaids.<b></h4><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="text-align:center;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                <div class="blog__item__text">
                                    <p>Our wedding planners are well aware of the latest styles of mehendi, dresses, 
                                        makeup and on the stage activities etc. We depute a dedicated, reliable, 
                                        knowledgeable, and efficient wedding professional to support the bride and 
                                        groom to have the best look as well as to enjoy every moment of each ceremony and 
                                        activity being free from all the worries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 p-2">
								<div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <a href="#">
                                         <img class="img-fluid" src="{{asset('userfont')}}/img/2.jpg" alt="img">
                                    </a>
                                </div>
                                
                            </div>
                                   
                                </div>
                                <div class="col-md-6 p-2">
                                    	<div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <a href="#">
                                         <img class="img-fluid" src="{{asset('userfont')}}/img/1.jpg" alt="img">
                                    </a>
                                </div>
                                
                            </div>
                                </div>
                            </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__text">
                                    <p>Rayann Events provides professional bridal makeup and personal home service. On the big day, give yourself one less thing to worry about:Fiestro Events offers salon-quality applications in the comfort of your own home. We have over a decade of experience providing the look and the service you need on your very important day. Let us take care of it, we guarantee you'll be thrilled with the results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__text">
                                    <p>We pride ourselves in providing a very personal service, using our team of fully qualified, skilled freelance wedding hair, make-up artist and draping artists. Every bride is unique and wants to achieve a natural effortless beauty on her wedding day. She wants to be radiant, feminine and feel the confidence that comes from within...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__text">
                                    <p>Our team uses this unique experience to explore a wide range of possibilities allowing you to choose a style and image which makes you feel elegant and sophisticated. We embrace the experience of working with the whole wedding party and take pleasure in including your family members on this special day.. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__text">
                                    <p>We will assist in creating a calm enjoyable experience, keeping your wedding day stress free and ensuring you and your family look your very best on the most memorable day of your life..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="blog__item">
                                <div class="blog__item__text">
                                    <h4>Our Address</h4>
                                    <p>West Masdair, Pakapul, Narayangonj..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <!-- Parlor Section End -->

    <!-- Parlor Slider Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/3.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/4.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/5.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/6.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/7.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/8.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/9.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/10.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/11.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/12.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/13.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/14.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('userfont')}}/img/15.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Parlor Slider Section End -->

    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="pointer-events: auto;background-color: whitesmoke;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #273c75;text-align:center;
                        background-color: #fff;
                        font-size: 28px;
                        text-shadow: none;
                        line-height: 33px;
                        height: 33px;
                        width: 33px;
                        opacity: 1;
                        border-radius: 50%;
                        box-shadow: 0 0 3px #555;
                        position: absolute;
                        left: auto;
                        right: -10px;
                        top: -12px;
                        z-index: 1;
                        transition: all 0.3s;">
                        &times;
                    </button>
                    <h2 class="modal-title" id="myModalLabel" style="color:#333; font-weight:700; text-align:center;">
                        Quick Contact!
                    </h2>
                </div>
                <div class="modal-body modal-body-sub" style="text-align:center;">
                    <p style="color:#e41616;">Contact us today, and get reply with in 24 hours!</p>
                    <div class="row">
                        <div class="col-md-12 modal_body_left modal_body_left1">
                            <form action="{{ route('store.parlor') }}" method="POST" id="footer-form">
                                @csrf
                   
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="appoint_first_name" id="appoint_first_name" placeholder="First Name *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="quantity" id="quantity" placeholder="How many of you will come?" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="appoint_email" id="email" placeholder="Your Email *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="appoint_phone" placeholder="Phone *" id="phone" required="">
                                    <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="appoint_date" id="appoint_date" placeholder="Your Appointment Date *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="appoint_time" placeholder="Your Appointment Time *" id="appoint_time" required="">
                                    <br>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-danger" value="Submit" style="width:200px;">
                            </form>                            	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		$('#myModal88').modal('show');
	</script>
   
@endsection