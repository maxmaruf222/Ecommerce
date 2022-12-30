@extends('public.layouts.app')

@section('Main')
			<!-- Start Breadcrumb  -->
            <div class="breadcrump-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="bigBajar-breadcrump">
								<ul>
									<li><a href="index.html" title="Go to Home Page">Home</a></li>
									<li>Register</li>
								</ul>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
			<!-- Start Breadcrumb  --> 
			<!-- Start Maincontent  -->
            <section class="main-content-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
							<div class="section-title section-title-style1">
								<h2>Customer Register</h2>
							</div> 
                            <div>
								@if ($errors->any())
                                <div class="m-4">
                                    <ul class="alert alert-danger alert-dismissible fade show">
                                        <h4 class="alert-heading"><i class="bi-exclamation-octagon-fill"></i> Oops! Something went wrong.</h4>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
								@endif
							</div>         				
            			</div>
            		</div>

            		<div class="row">
            			<div class="col-12 col-md-6">
		                    <div class="customer-area contact-us-area">	
								<h3>Registere Now</h3>
								<form method="POST" action="{{ route('register') }}">
									@csrf
									<p>If you Don't have an account, Register first.</p>
									<div class="bigBajar-form-group form-group">
										<label for="name">{{ __("Name") }} <sup>*</sup></label>
										<input type="text" id="name" name="name" value="{{ old('name') }}" class="control-form" autofocus placeholder="Enter Name">
									</div>
									<div class="bigBajar-form-group form-group">
										<label for="email">{{ __('Email') }} <sup>*</sup></label>
										<input id="email" type="email" name="email" value="{{ old('email') }}" class="control-form" placeholder="Enter Email">
									</div>									
									<div class="bigBajar-form-group form-group">
										<label for="phone">{{ __('Phone') }} <sup>*</sup></label>
										<input type="integer" name="phone" value="{{ old('phone') }}" class="control-form" placeholder="Enter Phone">
									</div>
									<div class="bigBajar-form-group form-group">
										<label for="password">{{ __('Password') }} <sup>*</sup></label>
										<input type="password" name="password" value="{{ old('password') }}" class="control-form" placeholder="Enter Password">
									</div>										
									<div class="bigBajar-form-group form-group">
										<label for="password_confirmation">{{ __('Re-Password') }} <sup>*</sup></label>
										<input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="new-password" class="control-form" placeholder="Repeat-password">
									</div>
																	
									<div class="bigBajar-form-group form-group submit-button">
										<input type="submit" class="control-form" value="Register">
									</div>
								</form>							
							</div>
            			</div>    
            			<div class="col-12 col-md-6">
		                    <div class="customer-area contact-us-area">	
								<h3>Have Account ?</h3>
								<form method="POST" action="{{ route('login') }}">
                                    @csrf
									<p>If you have an account, sign in with your email address.</p>
									<div class="bigBajar-form-group form-group">
										<label for="email" value="">{{ __('Email') }} <sup>*</sup></label>
										<input type="email" name="email" class="control-form" placeholder="Email">
									</div>
									<div class="bigBajar-form-group form-group">
										<label>Password <sup>*</sup></label>
										<input type="password" name="password" class="control-form" placeholder="Password">
									</div>										
									<div class="">
										<label for="remember_me">Remember me</label>
										<input id="remember_me" style="width: 15%; height:0%" type="checkbox" name="remember" placeholder="Remembar password">
									</div>										
									<div class="bigBajar-form-group form-group submit-button">
										@if (Route::has('password.request'))
											<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
												{{ __('Forgot your password?') }}
											</a>
										@endif
										<input type="submit" class="control-form" value="Login">
									</div>
								</form>								
							</div>
            			</div>            		
            		</div>
            	</div>
            </section>			
			<!-- End Maincontent  -->
@endsection