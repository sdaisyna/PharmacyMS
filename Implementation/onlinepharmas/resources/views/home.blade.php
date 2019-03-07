
@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:200px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <a href="/editprofile">Edit Profile</a>
<a href="{{ route('logout')}}"
 onclick="event.preventDefault();
document.getElementById('logout-form').submit();">LogoUT</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 {{@csrf_field()}}
 </form>
            </div>
        </div>
    </div>
</div>


@endsection
