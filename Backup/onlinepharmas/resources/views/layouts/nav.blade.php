<!-- Header Area Starts -->
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-md-flex">
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 4385316</h6>
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medinocare@gmail.com</h6>
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-dollar"></i></span> Cash on delivery</h6>
                </div>
            <div class="col-lg-3">
                <div class="social-links">
                    <ul>
                        <li><a href="{{url('https://www.facebook.com/')}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{url('https://np.linkedin.com/')}}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{url('https://twitter.com/')}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{url('https://www.instagram.com/')}}"><i class="fa fa-instagram"></i></a></li>

                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>


    <div id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="assets/images/logo/logo.png" alt="logo.png"  /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>
                    <li><a href="/medicine">Medicine</a></li>
                    <li><a href="/cart">Cart</a></li>
                    <li><a href="/contact">Contact</a></li>

                    @guest
                    <li><a href="/login"><span><i></i>Login</span></a></li>
                    <li><abbr title="help" ><a href="/help"><span><i class="fa fa-question"></i></span></a></abbr></li>
                    @else
                    <li>
                
                    </li>
                    <li class="menu-has-children"><a href="{{url('/')}}" style> {{ Auth::user()->name }}</i></a>
                        <ul>
                            <li><a href="/editprofile">Your profile</a></li>
                            <li>
                            <a href="{{ route('logout')}}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout
                            </a>
                            </li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{@csrf_field()}}
                    </form>            
                    @endguest
                </ul>
            </nav>
            <!-- #nav-menu-container -->
            </div>
        </div>
    </div>


</header>
<!-- Header Area End -->
