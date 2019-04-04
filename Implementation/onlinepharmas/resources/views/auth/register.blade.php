@extends('layouts.app')

@section('content')

<!-- 
my design registration -->
  <body>
    <div class="card bg-light">
    <article class="card-body mx-auto" style="width: 480px; margin-top:120px;">
    	<h2 class="card-title mt-3 text-center">Create Account</h2>
    	<p class="text-center">Get started with your free account</p>
    	<p>
    		<a href="{{url ('https://twitter.com/')}}" class="btn btn-block btn-primary btn-twitter"> <i class="fa fa-twitter"></i>   Login via Twitter</a>
    		<a href="{{url('https://www.facebook.com/')}}" class="btn btn-block btn-primary btn-facebook"> <i class="fa fa-facebook-f"></i>   Login via facebook</a>
    	</p>
    	<p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
    	<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} 
                        <!-- session create gareko Csrf le chai  -->
        <!-- fullname -->
    	<div class="form-group input-group{{ $errors->has('name') ? ' has-error' : '' }}">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input id="name" name="name" class="form-control" placeholder="Full name" type="text" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </div>


<!--      Email -->

        <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    		 </div>
            <input id="email" name="email" class="form-control" placeholder="Email address" type="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>


<!-- Address -->
        <div class="form-group input-group{{ $errors->has('address') ? ' has-error' : '' }}">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
           </div>
              <input id="address" name="address" class="form-control" placeholder="Address" type="text" value="{{ old('address') }}" required autofocus>
              @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
          </div>


          <!-- Gender -->

<div class="form-group row">
              <label class="col-sm-3 font-weight-bold text-secondary">Gender: </label>
              <div class="col-sm-8">
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optMale" value="Male" checked>
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optFemale" value="Female">
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optOthers" value="Others">
                      <label class="form-check-label" for="optOthers">Others</label>
                  </div>

                  @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>

          <!-- Date of birth -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
             </div>
                <input name="dateofbirth" class="form-control" placeholder="Date of birth" type="date" required autofocus>
            </div>

          <!-- Phone number// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>
    		<label class="custom-select" style="max-width: 120px;">+977</label>
        	<input id="phone_no" name="phone_no" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" placeholder="Phone number" type="text" value="{{ old('phone_no') }}" required autofocus>
            @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                    </span>
            @endif
        </div>

         <!-- Password// -->
         <div class="form-group input-group">
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Create password" type="password" required autofocus>
            
        </div> 
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>



        <!--Confirm password// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input id="password-confirm" class="form-control" placeholder="Confirm password" type="password" name="password_confirmation" required>
        </div> 

        <!-- Create account button// -->
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block"> Create Account  </button>
        </div> 

        
        <!-- Have an account?// -->
        <p class="text-center">Have an account? <a href="/login">Log In</a> </p>
    </form>
    </article>
    </div>

<!-- my design ends -->

@endsection
