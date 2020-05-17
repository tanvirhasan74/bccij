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
    <header class="main-header" >
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo-bccij.png')}}" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item "><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-hover" data-toggle="dropdown">The BCCIJ</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/About')}}">About BCCIJ</a></li>
								<li><a href="{{url('/SteeringCommittee')}}">Steering Committee</a></li>
                                <li><a href="{{url('/Constitution')}}">The Constitution</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
								<li><a href="{{url('/MembershipInstruction')}}">Instruction</a></li>
								<li><a href="wishlist.html">Membership Application</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/News&Events')}}">News & Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
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

    

    <div class="container">
        <h2>Contact Us</h2>
        <p  style="margin :0 auto">
            Bangladesh Chamber of Commerce and Industry in Japan (BCCIJ)
            <br>
            New Kanda Bldg 302, 3-3Kanda Kaji-cho,Chiyoda-Ku,Tokyo 101-0045<br>
            Tel: +81-3-3527-1655 Fax: +81-3-3527-1699<br>
            URL: http://www.bccij.com<br>
            e-mail : info@bccij.com
        </p>
    </div>
   

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