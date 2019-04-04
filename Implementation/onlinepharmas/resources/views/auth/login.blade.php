@extends('layouts.app_login')

@section('content')

<style media="screen">

  .main-section
  {
    margin: 0 auto;
    margin-top: 200px;
    padding: 0;

  }
  .modal-content
  {
    background-color: white;
    opacity:10;
    padding: 0 18px;
    border-radius:10px;
  }
  .user-img{
    margin-top: -7px;
    margin-bottom: 45px;
    margin-left: 50px;
  }
  .form-group
  {
    margin-bottom: 20px;
  }
  .form-group input{
height: 42px;
border-radius: 5px;
border:0;
}
</style>


<div class="modal-dialog text-center">
  <div class="col-sm-9 main-section">
    <div class="modal-content">
           <div class="col-12 text-center">
             <h1 style="color:black;">Welcome !</h1>
             <hr>
           </div>
           <div class="col-8 user-img">
             <img src="assets/images/avatar.png" alt="" height="100px" width="100px">
           </div>
      <div class="col-12 form-input">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
          <!-- Email -->
          <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
              </div>
              <input id="email" type="text" class="form-control col-12{{ $errors->has('email') ? ' has-error' : '' }}" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
            </div>


            <!-- Password -->
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input id="password" type="password" class="form-control col-md-12" name="password" placeholder="Password" required autofocus>
                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>

<!-- login -->
          


          <div class="form-group">
                            <div class="col-md-10 col-md-offset-6" style="margin-left:35px;">
                                <button type="submit" class="btn btn-primary pl-5 pr-5">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                              
                            </div>
                            </div>
                            <div class="" >
          <label>Don't have an account?</label>
          <a href="/register">Register</a>
        </div>
        </form>

     
  
  </div>
</div>
</div>
@endsection
