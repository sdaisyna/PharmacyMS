@extends('layouts.app')

@section('content')
 
<!--  
my design registration -->
  <body>
    <div class="card bg-light">
    <article class="card-body mx-auto" style="width: 480px; margin-top:120px;">
    	<h2 class="card-title mt-3 text-center">Your Profile</h2>

    	<form class="form-horizontal" method="POST" action="{!!url('/updateprofile', Auth::user()->id)!!}" enctype="multipart/form-data" >
        {{ csrf_field() }} 
                        {!!method_field('put')!!}
                        <!-- session create gareko Csrf le chai  -->
        <!-- fullname -->
    	<div class="form-group input-group{{ $errors->has('name') ? ' has-error' : '' }}">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input name="name" class="form-control" type="text" value="{!!(Auth::user()->name)!!}" required>
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
            <input  name="email" class="form-control" type="email" value="{!!(Auth::user()->email)!!}" required>
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
              <input name="address" class="form-control" type="text" value="{!!(Auth::user()->address)!!}" required autofocus>
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
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optMale" value="Male" @if(Auth::user()->gender == 'Male') checked="checked" @endif >
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optFemale" value="Female" @if(Auth::user()->gender == 'Female') checked="checked" @endif>
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optOthers" value="Others" @if(Auth::user()->gender == 'Others') checked="checked" @endif>
                      <label class="form-check-label" for="optOthers">Others</label>
                  </div>

                  @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                   @endif
              </div>
            </div>

          <!-- Phone number// -->
        <div class="form-group input-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>
    		<label class="custom-select" style="max-width: 120px;">+977</label>
        	<input  name="phone_no" class="form-control" type="text" value="{!!(Auth::user()->phone_no)!!}" required autofocus>
            @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                    </span>
                                @endif
        </div>


        <!-- Create account button// -->
        <div class="form-group">
            <button type="submit" name="update" class="btn btn-success btn-block">Update my profile  </button>
        </div>
    </form>

</div>

        <script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>
@endsection
