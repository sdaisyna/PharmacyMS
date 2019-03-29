<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">


    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{('css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Pharmacist Panel</a>

                        </li>
                        <li>
                            <a href="medicine.html">
                                <i class="fas fa-pills"></i>Medicine</a>
                        </li>
                        <li>
                            <a href="category.html">
                                <i class="fas fa-calendar-alt"></i>Categories</a>
                        </li>
                        <li>
                            <a href="order.html">
                                <i class="fas fa-map-marker-alt"></i>Order list</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="stock.html">
                                <i class="fas fa-desktop"></i>Stock</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="help.html">
                                <i class="fas fa-question"></i>Help</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block bg-light">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="has-sub">
                          <a class="js-arrow" href="admin.html">
                              <i class="fas fa-user"></i>Pharmacist Panel</a>

                      </li>
                      <li>
                          <a href="/addmedicine">
                              <i class="fas fa-pills"></i>Medicine</a>
                      </li>
                      <li>
                          <a href="/addmedicinetype">
                              <i class="fas fa-calendar-alt"></i>Categories</a>
                      </li>
                      <li>
                          <a href="order.html">
                              <i class="fas fa-map-marker-alt"></i>Order list</a>
                      </li>

                      <li class="has-sub">
                          <a class="js-arrow" href="stock.html">
                              <i class="fas fa-desktop"></i>Stock</a>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="help.html">
                              <i class="fas fa-question"></i>Help</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search medicine" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                          <span> <i class="fas fa-user"></i>Admin </span>
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">

                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Welcome to medicine Dashboard! </h2>

                    </div>
                </div>
                </div>



    <div class="row m-t-25">
        <div class="col-12">
            <div class="jumbotron">
                <div class="col-sm-8">

   <form method="POST" action="{{url('insertmedicine',$medicine->medicine_id)}}" enctype="multipart/form-data">
   {{ csrf_field() }} 
   {{method_field('put')}}
     <input type="hidden" name="size" value="1000000">
<div class="form-group">
         <label for="medicine name"><i class="fa fa-pills"></i> Medicine name :</label>
     <input class="form-control" name="medicine_name" value="{!!$medicine->medicine_name!!}"">
</div>



<div class="form-group">
  <label for="medicine_category"><i class="fa fa-pills"></i> Medicine category :</label>
  <br>
  <select class="col-sm-12" name="medicine_type_name" required>
@foreach($medicinetype as $medicinetypes)
    <option value="{{$medicinetypes->medicine_type_id}}">{{$medicinetypes->medicine_type_name}}</option>
@endforeach
  </select>
</div>  


<div class="form-group">
    <label for="desciption"><i class="fa fa-sticky-note"></i>Description :</label>
    <textarea class="form-control" name="description" rows="4" >
       {!!$medicine->description!!}
    </textarea>
</div>

<div class="form-group">
     <label for=" price"><i class="fa fa-dollar"></i>  Price :</label>
     <input type="form-control" name="rate" class="form-control" value="{!!$medicine->rate!!}" >
     </div>

<!-- image -->
<div class="form-group">
    <label for="image"><i class="fa fa-file-image-o"></i> Image :</label>
    <input type="file" accept=".png, .jpg, .jpeg"  id="uploadImage" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required>
        @if ($errors->has('image'))
            <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('image') }}</strong>
            </span>
     <img id="uploadPreview" src="/{{$medicine->image}}" style="height: 150px;width: 150px;" class="img-fluid img-thumbnail" style="max-width: 100%;" >
        @endif   

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

<div class="form-group">
    <img src=" /{{$medicine->image}} "  height="150px" width="150px"  class="img-fluid img-thumbnail" style="max-width:100%">
</div>
 

<div class="form-group">
     <label for=" manufacture date"><i class="fa fa-calendar"></i>  Manufactured date :</label>
     <input type="date" name="manufacture_date" class="form-control" value="{!!$medicine->manufacture_date!!}">
</div>

<div class="form-group">
     <label for=" expiry date"><i class="fa fa-calendar"></i>  Expiry date :</label>
     <input type="date" name="expiry_date" class="form-control" value="{!!$medicine->expiry_date!!}"> 
</div>

<div class="form-group">
     <label for=" qty"><i class="fa fa-sorts-numeric-asc"></i>  Quantity :</label>
     <input type="form-control" name="qty" class="form-control" value="{!!$medicine->quantity!!}" >
</div>




<div class="row">
   <div class="col-md-6">
     <input type="submit" name="update" class="btn btn-info form-control" value="UPDATE">
   </div>
</div>
</form>
 
</div>
</div>
</div>



                        </div>


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
