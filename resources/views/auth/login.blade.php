@extends('layouts.frontend-master')

@section('content')
    <div class="quicklinks-agile-info">
		<div class="container">
			<div class="quicklinks-agile-info-top" style="background-color: #cc99ff;">
				<div class="col-md-4 agile-info-top-left">
                    <div class="tittle-agileinfo">
				        <h3></h3>
			        </div> <br><br><br>
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="{{asset('frontend')}}/images/login.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-8 agile-info-top-right">
					<h4 style="text-align:center;">User Login</h4><br><br>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#000000;">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#000000;">{{ __('Password') }}</label>

                                            <div class="col-md-8">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember" style="color:#000000;">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-8">
                                                <button type="submit" class="btn btn-primary" style="background-color: #004d99;">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #ffffff;">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="col-md-12 offset-md-12">
                                            <h3 style="color:#000000;font:5px;">Don't have an account?<span><a href="{{route('register')}}" style="color: #ffffff;">Register</a></span></h5>   
                                        </div> <br><br><hr>

                                        <h3 style="color:#00001a;"><span>OR You Can</span></h3><br>

                                        <div class="block social-login-wrap col-mgt mgt-5">
                                            <div class="block-content">
                                                <div class="col-md-20 offset-md-20"> 
                                                    <h3><a type="submit" href="{{ route('login.facebook') }}" class="btn btn-primary" style="background-color:#1a0dab;"> 
                                                        <span class="fa fa-facebook"></span> 
                                                        Sign in with Facebook 
                                                    </a>
                                                    <a type="submit" href="{{ route('login.google') }}" class="btn btn-primary"  style="background-color:#3399ff;"> 
                                                        <span class="fa fa-google"></span> 
                                                        Sign in with Google 
                                                    </a></h3><br>
                                                </div><br>
                                                <div class="col-md-20 offset-md-20"> 
                                                    <h3><a type="submit" href="{{ route('login.github') }}" class="btn btn-primary" style="background-color:#000033;"> 
                                                        <span class="fa fa-github"></span> 
                                                        Sign in with Github 
                                                    </a></h3>
                                                </div>
                                            </div>
                                        </div>              
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection
