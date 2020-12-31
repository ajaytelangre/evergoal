<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

</head>

<body style="background-image:url('img/back3.jpg'); background-repeat: no-repeat;background-size:cover;">

<!-- Main Content -->
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    
		<div class="col-md-6">
		  <form action="{{ route('login') }}" method="post" class="mt-5">
              <div class="card mt-5" style="">
			  
                 <div class="card-body loginpage">
						<!-- <div class="card-header">{{ __('Login') }}</div>-->
					<h2 class="card-title">Evergoal India pvt.ltd.</h2>
                
                  
                    @csrf
                      <div class="form-group">
						<!--	 <LABEL FOR="EMAIL" CLASS="COL-MD-4 COL-FORM-LABELTEXT-MD-RIGHT">{{__('e-mAIL aDDRESS') }}</LABEL> -->
                                 <div class="input-group mb-2">
                                     <div class="input-group-prepend">
                                         <div class="input-group-text"><i class="fa fa-user fa-2x" aria-hidden="true"></i></div>
                                      </div>
                                      <input id="mobile" type="number" for="mobile" name="mobile" value="{{ old('mobile') }}" class="form-control form-control-lg @error('mobile') is-invalid @enderror"  placeholder="mobile" required autocomplete="mobile" autofocus>

									 @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
                                </div>
                      </div> 
                      
                      <div class="form-group">
                                 <div class="input-group mb-2">
                                     <div class="input-group-prepend">
                                         <div class="input-group-text"><i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i></div>
                                      </div>
                                      <input type="password" for="pass" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="password"  required autocomplete="current-password">

									         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									         @enderror
                                </div>
                      </div> 

					  
				
					  
                        <div class="row ">
                          <div class="col-md-4">
                             <button type="submit" class="btn btn-lg btn-block btn-outline-dark mt-3"> {{ __('Login') }}</button>
                          </div>
						  <div class="col-md-8">
                             <a href="" class="btn btn-link float-right mt-3"> {{ __('Enquire Here') }}</a>
                          </div>
                       </div>
					   
					   
						  <div class="">
											  @if (Route::has('password.request'))
										<a class="btn btn-link float-right" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
										@endif
								<!-- <a href="#"  class="float-right">Forgot Password? Click Here</a>-->

						  </div>
                      </div>
            </div>
			</form>
        </div>
    </div>
  </div>

@endsection


<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>