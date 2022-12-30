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
                                        <li>Login</li>
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
                                    <h2>Customer Login</h2>
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
                                    <h3>Registered Customers</h3>
                                    @if (Route::is('login'))
                                        @if (session('status'))
                                            {{ session('status') }}
                                        @endif
                                    @endif
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <p>If you have an account, sign in with your email address.</p>
                                        <div class="bigBajar-form-group form-group">
                                            <label for="email" value="">{{ __('Email') }} <sup>*</sup></label>
                                            <input type="email" name="email" class="control-form" value="{{ old('email') }} " placeholder="Enter email">
                                        </div>
                                        <div class="bigBajar-form-group form-group">
                                            <label>Password <sup>*</sup></label>
                                            <input type="password" name="password" class="control-form" placeholder="Enter password">
                                        </div>										
                                        <div >
                                            <label for="remember_me">Remember me</label>
                                            <input id="remember_me" style="width: 15%; height:0%" type="checkbox" name="remember" class="">
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
                            <div class="col-12 col-md-6">
                                <div class="customer-area contact-us-area">	
                                    <h3>New Customers</h3>
                                    <form action="#">
                                        <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>									
                                        <div class="primary-btn default-button">
                                            <a href="{{ route('register') }}">Create an Account</a>
                                        </div>
                                    </form>							
                                </div>
                            </div>            		
                        </div>
                    </div>
                </section>			
                <!-- End Maincontent  -->
    @endsection