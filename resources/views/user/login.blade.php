<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>CityTweet</title>
    {{-- <link rel="icon" href="{{asset('/')}}/assets/images/fav.png" type="image/png" sizes="16x16">  --}}
    
    <link rel="stylesheet" href="{{asset('/')}}/assets/user/css/main.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/user/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/user/css/color.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/user/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						{{-- <h1>CityTweet</h1>
						
						<div class="friend-logo">
							<span><img src="{{asset('/')}}/assets/user/images/logo.jpg" alt=""></span>
						</div> --}}
						
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							
						<form method="post">
							<div class="form-group">	
							  <input type="email" id="input" required="required"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="button"><span>Login</span></button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							
						{{-- <form method="post">
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input" name="fname" >First Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input" name="lname" >Last Name</label><i class="mtrl-select"></i>
							</div>
							
							<div class="form-group">	
								<input type="" required="required"/>
								<label class="control-label" for="input" name="position">Position</label><i class="mtrl-select"></i>
								<select id="position" name="position">
									<option value="volvo">Teacher</option>
									<option value="saab">Student</option>
									<option value="opel">Alumni</option>
									
								  </select>
							  </div>
							
							<div class="form-group">	
							  <input type="email" required="required"/>
							  <label class="control-label" for="input" name="email">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
								<input type="password" required="required"/>
								<label class="control-label" for="input" name="password">Password</label><i class="mtrl-select"></i>
							  </div>
							
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form> --}}

						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="form-group">	
								<input type="text" required="required"/>
								<label class="control-label" for="input" name="fname" >First Name</label><i class="mtrl-select"></i>
							  </div>
							  <div class="form-group">	
								<input type="text" required="required"/>
								<label class="control-label" for="input" name="lname" >Last Name</label><i class="mtrl-select"></i>
							  </div>
							  
							  <div class="form-group">	
								  <input type="" required="required"/>
								  <label class="control-label" for="input" name="position">Position</label><i class="mtrl-select"></i>
								  <select id="position" name="position">
									  <option value="volvo">Teacher</option>
									  <option value="saab">Student</option>
									  <option value="opel">Alumni</option>
									  
									</select>
								</div>
							  
							  <div class="form-group">	
								<input type="email" required="required"/>
								<label class="control-label" for="input" name="email">Email</label><i class="mtrl-select"></i>
							  </div>
							  <div class="form-group">	
								  <input type="password" required="required"/>
								  <label class="control-label" for="input" name="password">Password</label><i class="mtrl-select"></i>
								</div>
							  
							  <a href="#" title="" class="already-have">Already have an account</a>
							  <div class="submit-btns">
								  <button class="mtr-btn signup" type="button"><span>Register</span></button>
							  </div>
				
							
							@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
								<div class="mt-4">
									<x-label for="terms">
										<div class="flex items-center">
											<x-checkbox name="terms" id="terms" required />
				
											<div class="ml-2">
												{!! __('I agree to the :terms_of_service and :privacy_policy', [
														'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
														'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
												]) !!}
											</div>
										</div>
									</x-label>
								</div>
							@endif
				
							<div class="flex items-center justify-end mt-4">
								<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
									{{ __('Already registered?') }}
								</a>
				
								<x-button class="ml-4">
									{{ __('Register') }}
								</x-button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('/')}}/assets/user/js/main.min.js"></script>
	<script src="{{asset('/')}}/assets/user/js/script.js"></script>

</body>	

</html>