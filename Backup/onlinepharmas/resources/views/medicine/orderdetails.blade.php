@extends('layouts.app')
@section('title')@stop 
@section('content')

<section>

<body>
    <div class="">
    <article class="card-body mx-auto" style="width: 480px; margin-top:120px;">
    	<h2 class="card-title mt-3 text-center">Delivery info</h2>
    	
    	
    	
    	<form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }} 
                        <!-- session create gareko Csrf le chai  -->
        <!-- fullname -->
    	<div class="form-group input-group{{ $errors->has('name') ? ' has-error' : '' }}">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input id="name" name="name" class="form-control" placeholder="Full name" type="text" value="" required autofocus>
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
              <input id="address" name="address" class="form-control" placeholder="Address to deliver" type="text" value="{{ old('address') }}" required autofocus>
              @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
          </div>


          <!-- Phone number// -->
        <div class="form-group input-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>
    		<label class="custom-select" style="max-width: 120px;">+977</label>
        	<input id="phone_no" name="phone_no" class="form-control" placeholder="Phone number" type="text" value="{{ old('phone_no') }}" required autofocus>
            @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                    </span>
                                @endif
        </div>


        <!-- Create account button// -->
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Check out </button>
        </div> 
    </form>
    </article>
    </div>
</div>
</div>
</section>

@endsection