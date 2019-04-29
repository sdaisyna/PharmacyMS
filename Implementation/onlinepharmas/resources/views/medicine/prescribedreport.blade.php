@extends('layouts.app')
@section('title')@stop 
@section('content')


<body>
    <div class="card bg-light">
    <article class="card-body mx-auto" style="width: 480px; margin-top:120px;">
    	<h2 class="card-title mt-3 text-center">Upload Prescribed Report</h2>
    	<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} 

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
        <p>Prescribed Report </p>
        <div class="form-group input-group">
        <input type="file" accept=".png, .jpg, .jpeg"  id="uploadImage" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required onchange="PreviewImage()">
            @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        <img id="uploadPreview" style="width:150px; height:150px; "/>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block"> Upload  </button>
        </div>

    </form>
    </article>
    </div>



              

<script type="text/javascript">

                function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                    oFReader.onload = function (oFREvent) {
                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                    }; 
                };

            </script>





@endsection