@extends('layouts.userfont-master')

@section('user_content')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p><a href="tel:+505-222-5432">+505-222-5432</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>60-49 Road 11378 Narayangonj</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 9:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p><a href="mailto:meherunislam72@gmail.com">meherunislam72@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2><br>
                        <p class="big">If you have any query, send us a message and we will reach out to you.<br> You can also 
                        come to our office to meet and discuss about your event with us.</p>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('store.contact') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5> Your Name<br></h5>
                            <span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="user_name" placeholder="Enter your name">
                            </span> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5> Your Contact<br></h5>
                            <span class="wpcf7-form-control-wrap your-email">
                            <input type="text" name="user_contact" placeholder="Enter your Contact">
                            </span> 
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <h5> Your Email<br></h5>
                            <span class="wpcf7-form-control-wrap your-email">
                            <input type="text" name="user_email" placeholder="Enter your Email">
                            </span> 
                    </div>
                    <div class="col-lg-12 text-center">
                        <h5>Enter your Message here<br></h5>
                        <textarea name="user_message" placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->


    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0781594453506!2d90.49504871445302!3d23.60152970036508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1b754392299%3A0xc1661f4335fc4d72!2sRanada%20Prasad%20Saha%20University!5e0!3m2!1sen!2sbd!4v1616332490834!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Narayanganj Govt. Girls' High School</h4>
                <ul>
                    <li>Phone:<a href="tel:+505-222-5432">+505-222-5432</a></li>
                    <li>Add: 16 . Narayangonj, Dhaka</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    
@endsection