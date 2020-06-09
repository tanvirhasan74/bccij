<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BCCIJ</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    
    <!-- Start Main Top -->
    <div class="logoBlock" style="margin:auto;">
        <div class="navbar-header">
                    
                <a class="navbar-brand" href="{{url('/')}}" style="font-size:30px;font-weight:bold;font-style:italic;margin:0 75px;"><img src="{{asset('images/logo-bccij.png')}}" style="width:50%;" class="logo"   alt="">BCCIJ </a>
                
                </div>        

    </div>
    <header class="main-header" >
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
                
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-hover" data-toggle="dropdown">The BCCIJ</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/About')}}">About BCCIJ</a></li>
								<li><a href="{{url('/SteeringCommittee')}}">Executive Members</a></li>
                                <li><a href="{{url('/Constitution')}}">The Constitution</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
								<li><a href="{{url('/MembershipInstruction')}}">Instruction</a></li>
								<li><a href="{{url('/register')}}">Membership Application</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/News&Events')}}">News & Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contactUs')}}">Contact Us</a></li>
                        <li >
								
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                <li class="nav-item" ><i class="glyphicon glyphicon-user"></i><a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                @endauth
                            </div>
                            @endif
                       
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                
              
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    
    <!-- End Main Top -->
    <!-------------------------------------------->

    <!-- Start All Title Box -->
    
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="shop-box-inner">
        <div class="container" id="containerAbout">
            
            <div class="about-bccij" style="text-align: justify;">
                The Bangladesh Chamber of Commerce and Industry in Japan was first established in the year 2007 under the name of Bangladesh Merchants Association. Eventually it triggered the creation of the current Bangladesh Chamber of Commerce and Industry in Japan, BCCIJ.
                <br><br>
                Bangladesh Chamber of Commerce and Industry in Japan (BCCIJ) is a free and independent organization. It is a platform for enhancing interaction and information exchange for business promotion and development of its members.
                <br><br>
                The Chamber has so far operated as a business networking hub for the local community and Japanese companies with interest of business in Bangladesh. Since its inception, it has successfully organized several trade and investment meetings, discussion forums with Ministers from Japan and Bangladesh, and also business and investment seminars.
                <br><br>
                The Chamber endeavors to help foster better trade and investment between the two countries for the greater benefit creating new employment opportunities and prosperity in both countries through bilateral trade and exchange.
                <br><br>
                The main objectives can be summarized as:
                <br><br>

                <ul id="obj" class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-square"></i></span>To promote, protect and strengthen bi-lateral trade and commerce between Bangladesh and Japan.</li>
                    <li><span class="fa-li"><i class="far fa-square"></i></span>To promote investment, joint ventures, research and development in both countries.</li>
                    <li><span class="fa-li"><i class="far fa-square"></i></span>To maintain close ties with traders, both in the Japan and Bangladesh, including the Federation of Bangladesh Chambers of Commerce and Industry (FBCCI) and relevant government organizations.</li>
                  </ul>
            </div>     
            
        </div>
    </div>
    <!-- End About Page -->

    <!-------------------------------------------->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/inewsticker.js')}}"></script>
    <script src="{{asset('js/bootsnav.js')}}"></script>

    <script src="'{{asset('js/isotope.min.js')}}'"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>