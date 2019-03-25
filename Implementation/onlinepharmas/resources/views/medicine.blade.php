@extends('layouts.app')
@section('title')@stop 
@section('content')

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
               
                    <div class="single-doctor mb-4 mb-lg-0">
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

                   

                    
                </div>
              
         
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

@endsection
