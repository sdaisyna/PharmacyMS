@extends('layouts.app')
@section('title')@stop 
@section('content')
<script>
      var msg = '{{Session::get('loginFirst')}}';
      var exist = '{{Session::has('loginFirst')}}';
      if(exist)
      {
        alert(msg);
      }
</script>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Medicine</h1>
                <a href="/">Home</a> <span>|</span> <a href="/medicine">Medicine</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<div>
    @if (count($errors) > 0)
    <div class="alert alert-danger container-fluid">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif @if(Session::has('message'))
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
    </div>
    @endif
</div>



<section class="specialist-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Our medicine</h2>
                </div>
            </div>
            

            <div class="col-sm-8 offset-md-2">
                <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search medicine" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </div>

                    <p style="margin-left:20px;margin-right: 20px;">OR</p>
                    <button class="btn btn-outline-primary pl-4 pr-4"><i class="fa fa-sign-in 3x"></i>Upload Prescription Report</button>
                </form>

                    </div>
            </div>
        </div>
    </div>     

        <br> 
        <br>
        <br> 


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class=" mb-4 mb-lg-0">
                    <h3 class="text-center" style="color: grey;">Categories</h3>
                    <div class="doctor-img">
                        @foreach($medicinetype as $medicinetypes)
                    </div>
                <div class="content-area">
                    <div class="doctor-name text-center">
                        <a href="medicine.php"><h3>{!! $medicinetypes->medicine_type_name!!}</h3></a>
                    </div>
                        @endforeach
                </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12 mt-5"> 
                <div class="container">
                    <div class="row">
                        @foreach($medicine as $medicines)
                            <div class="col-md-6"  > 
                            <div class="text-center shadow bg-white" style=" padding:2rem; margin:2rem 2rem">
                                <img src="{!! $medicines->image!!}" height="120px;">
                                    <h3>{!! $medicines->medicine_name!!}</h3>
                                    <p class="pt-3"> Rs.{!! $medicines->rate!!}</p>
                                    <form action="{{url('/cart',$medicines->medicine_id)}}" method="post">
                                    {{csrf_field()}}
                                    @auth
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                                    @endauth
                                    <button class="btn btn-md btn-primary">Add to Cart</button> <br>
                                    </form>
                                    
<!-- Button trigger modal -->
        <small><a  href="" data-toggle="modal" data-target="#g{!! $medicines->medicine_id !!}">
        <u>View-Info</u>
        </a>
        </small>

<!-- Modal -->
<div class="modal fade" id="g{!! $medicines->medicine_id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-info" id="exampleModalLabel">Product Detail</h3>
      </div>
    <div class="modal-body">
        <div class="text-left"> 
            <h6>
                <b class="text-dark">Medicine category:</b>
                <label style="font-weight:400;">{!!$medicinetypes->medicine_type_name !!}</label>   
            </h6>
            <h6>
                <b class="text-dark">Description: </b>
                <label style="font-weight:400;">{!!$medicines->description !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Manufactured date: </b>
                <label style="font-weight:400;">{!!$medicines->manufacture_date !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Expiry date: </b>
                <label style="font-weight:400;">{!!$medicines->expiry_date !!}</label>
            </h6>
            <h6>
                <b class="text-dark">Quantity: </b>
                <label style="font-weight:400;">{!!$medicines->quantity !!}</label>
            </h6>
        </div>
    </div> 
    </div>
  </div>
</div>



                            </div>
                            </div>
                        @endforeach

</div>
</div>
        </div>
        </div>
        </div>
        </div>
</section>


    <!-- Specialist Area Starts -->

@endsection
