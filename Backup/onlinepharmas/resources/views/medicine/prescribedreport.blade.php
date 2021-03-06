@extends('layouts.app')
@section('title')@stop 
@section('content')


<body>

<div style="margin-top:12%;">
    <h2 class="text-center">Upload your prescribed report</h2>
</div>

    <div class="card">
    <article class="card-body" style="width: 480px; margin-top:2%;margin-left:18%;">
        <br>
        <br>
    	<form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }} 
                        <!-- session create gareko Csrf le chai  -->
        <!-- fullname -->
    	<div class="form-group input-group">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input id="name" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full name" type="text" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>


<!--      Email -->

        <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    		 </div>
            <input id="email" name="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Email address" type="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>


<!-- Address -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
           </div>
              <input id="address" name="address" class="form-control {{ $errors->has('address') ? ' has-error' : '' }}" placeholder="Address" type="text" value="{{ old('address') }}" required autofocus>
              @if ($errors->has('address'))
                <span class="invalid-feedback">
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
                <span class="invalid-feedback">
                <strong>{{ $errors->first('phone_no') }}</strong>
                </span>
            @endif
        </div>
        

        <!-- Create account button// -->
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block"> Create Account  </button>
        </div> 

    </form>
    </article>

    <div class="row">
    <div class="form-group">

              <input type="file" accept=".png, .jpg, .jpeg"  id="uploadImage" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required onchange="PreviewImage()">
              @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                @endif
                                <img id="uploadPreview" style="width:150px; height:150px; "/>

                                <script type="text/javascript">

                function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                    oFReader.onload = function (oFREvent) {
                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                    }; 
                };

            </script>

         
        
            </div> 


    </div>
    </div>











@endsection