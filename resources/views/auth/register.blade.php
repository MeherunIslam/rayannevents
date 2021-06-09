@extends('layouts.frontend-master')

@section('content')
    <div class="quicklinks-agile-info">
		<div class="container">
			<div class="quicklinks-agile-info-top" style="background-color:#cc99ff;">
				<div class="col-md-4 agile-info-top-left">
                    <div class="tittle-agileinfo">
				        <h3></h3>
			        </div> <br><br><br><br><br>
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="{{asset('frontend')}}/images/login.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-8 agile-info-top-right">
					<h4 style="text-align:center;">User Registration</h4><br><br>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#000000;">{{ __('Name') }}</label>

                                            <div class="col-md-8">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#000000;">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:#000000;">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-8">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary" style="background-color:#004d99;">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12 offset-md-12">
                                            <h3 style="color:#000000;">Already have an account?<a href="{{route('login')}}" style="color:#ffffff;">Login</a></h5>   
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
