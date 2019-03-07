@extends('layouts.app')
@section('title')@stop 
@section('content')

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Medicine</h1>
                <a href="index.php">Home</a> <span>|</span> <a href="medicine.php">Medicine</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->


<section class="row">

</section>


<section class="specialist-area section-padding">
<form action="">
<input type="text" name="search" id="" placeholder="Search">
</form>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/pills.jpg" alt="Prescription" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <a href="medicine.php"><h3>Prescriptions</h3></a>
                                <h6>Cure your disease</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/personal care.jpg" alt="personal care" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <a href="medicine.php"><h3>Personal care</h3></a>
                                <h6>Be healthy and wealthy</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img id="photo" src="assets/images/firstaidkit.jpg" alt="first aid kit" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                              <a href="medicine.php">  <h3>First aid kit</h3></a>
                                <h6>we believe in keeping you safe</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/selfmed1.jpg" alt="" class="img-fluid" >
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>self medication</h3>
                                <h6>be first doctor of your health</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->
@endsection
