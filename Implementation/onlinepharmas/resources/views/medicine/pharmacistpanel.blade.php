<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

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
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">

        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/admindash">
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
                            <a class="js-arrow" href="/pharmacistPanel">
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
                            <a href="/orderlist">
                                <i class="fas fa-map-marker-alt"></i>Order list</a>
                        </li>

                        <li class="has-sub">
                          <a class="js-arrow" href="/registereduser">
                              <i class="fas fa-registered"></i>Registered Users</a>
                      </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-question"></i>Help</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" >
            <div class="logo">
                <a href="/admindash">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="has-sub">
                          <a class="js-arrow" href="/pharmacistPanel">
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
                          <a href="/orderlist">
                              <i class="fas fa-map-marker-alt"></i>Order list</a>
                      </li>

                      <li class="has-sub">
                          <a class="js-arrow" href="/registereduser">
                              <i class="fas fa-registered"></i>Registered Users</a>
                      </li>

                      <li class="has-sub">
                          <a class="js-arrow" href="#">
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
                                            <a href="{{ route('logout')}}"
                                                     onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Logout</a></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{@csrf_field()}}
                                                 </form>
                                                    
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
                                    <h2 class="title-1">Your Profile !</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                          <div class="col-12">
                          <div class="jumbotron">
                            <div class="col-sm-10">
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


</div>
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

            <script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>

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
