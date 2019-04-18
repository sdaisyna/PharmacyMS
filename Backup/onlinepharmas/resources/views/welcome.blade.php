@extends('layouts.app')
@section('title')@stop 
@section('content')

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Caring for better life</h4>
                    <h1>We are the team of excellence</h1>
                    <p>Medicine is a science of uncertainty and an art of Probability.</p>
                    <a href="contact.php" class="template-btn mt-3">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/pharmacy.jpg" alt="pharmacy.jpg">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>Welcome to our pharmacy</h2>
                        <p class="pt-3">Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were.</p>
                        <p>Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were the boring.</p>
                        <a href="#" class="template-btn mt-3">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Categories Area Starts -->
    <section class="specialist-area section-padding">
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
                                <a href="/medicine"><h3>Prescriptions</h3></a>
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
                                <a href="/medicine"><h3>Personal care</h3></a>
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
                              <a href="/medicine">  <h3>First aid kit</h3></a>
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
                                <a href="/medicine">  <h3>Self medication</h3></a>
                                <h6>be first doctor of your health</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

    <!-- Hotline Area Starts -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 4385 316 </span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->


    <!-- Department Area Starts -->
    <section class="department-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Top Selling Products</h2>
                        <p> These are the most common products that customer buys in their daily life. It will help to provide relief from your pain.
                          Get relief and get healthy.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/dolopar.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>DOLOPAR 650MG TABLET</h3>
                                <p class="text-justify">DOLOPAR 650MG TABLET, classified as a mild analgesic,
                                   is used to treat fever and is the most commonly used pain reliever.
                                    It is used to relieve pain in case of a backache, a headache, arthritis and a toothache.
                                 </p>

                                 <h5><b>Rs.75 for 10 tablets</b> </h5>
                                <a><button class="btn btn-primary rounded" type="button" name="button" value="Add to Cart">Add to Cart</button></a>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/honitus.png" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Dabur Honitus Cough Syrup</h3>
                                <p class="text-justify ">Dabur Honitus provides effective relief from cough, without side-effects.
                                   It is an ayurvedic syrup for cough  which  provides
                                    fast relief against acute cough and throat irritation.</p>
                                    <h5><b>Rs.145 for 70ml bottle</b> </h5>
                                <a><button class="btn btn-primary rounded" type="button" name="button" value="Add to Cart">Add to Cart</button></a>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/pudinhara.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Dabur Pudin Hara</h3>
                                <p>It is an ayurvedic medicine for Indigestion, Gas and Acidity which contains
                                   Pudina Satva as the main ingredient and is known to give quick relief from stomach ailments
                                 like stomach ache, gas and indigestion. trusted and fast-action remedy</p>
                                 <h5><b>Rs.25 for 10 tablets</b> </h5>
                                <a><button class="btn btn-primary rounded" type="button" name="button" value="Add to Cart">Add to Cart</button></a>
                            </div>
                        </div>

                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/sinex.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Sinex Regular Spray</h3>
                                <p>It is used for temporary relief of congestion in the nose caused by various conditions
                                   including the common cold, sinusitis, hay fever, and allergies.</p>
                                   <h5><b>Rs.215 for 15ml</b> </h5>
                                <a><button class="btn btn-primary rounded" type="button" name="button" value="Add to Cart">Add to Cart</button></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area Starts -->

    
    <script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>

    @endsection



</body>
</html>
