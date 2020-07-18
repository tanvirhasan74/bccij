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


    
    <!-- End All Title Box -->

    <!-- Start Committee Detail  -->
    <div class="shop-detail-box-main">
        <div class="container" id="containerAbout">
           
        <h2 class="text" >New Executive Members & Advisers of BCCIJ</h2>
        <div class="data">
        <h1 class="text">Chief Patron:</h1>
        <ul id="obj" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>Bangladesh Embassy- H.E Ambassador</li>
          </ul>
        <h1 class="text">Advisers:</h1>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/10.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. BADAL CHAKLADER</b></span>
                       
                    </div>
                    <span>President</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/6.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. SHEIKH MONJUR MORSHED</b></span>
                       
                    </div>
                    <span>Vice President</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/3.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. MOHAMMED ABDUR RAZZAK</b></span>
                       
                    </div>
                    <span>Vice President</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/9.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. AHSAN SHAMEEM (JOSEPH)</b></span>
                       
                    </div>
                    <span>Vice President</span>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/4.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. HAKIM MD. NASIRUL</b></span>
                       
                    </div>
                    <span>General Secretary</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/8.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. KAZI ENAMUL HOQUE</b></span>
                       
                    </div>
                    <span>Joint Secretary</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/2.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>THAKUR GUL MOHAMMAD (MONI)</b></span>
                       
                    </div>
                    <span>Treasurer</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/11.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. HAQUE MD. SANAUL</b></span>
                       
                    </div>
                    <span>Cultural and Publication</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/5.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. MIR REZAUL KARIM</b></span>
                       
                    </div>
                    <span>Executive Member</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/1.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. CHOWDHURY SHAHIN</b></span>
                       
                    </div>
                    <span>Executive Member</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <img src="{{asset('images/7.png')}}" style="height:144px; width:160px">
                        <span class="color_name"><b>Mr. MIZANUR RAHMAN SHAHIN</b></span>
                       
                    </div>
                    <span>Executive Member</span>
                </div>
            </div>
        </div>
        
        </div>
        </div> 
    </div>




    <!--------------------------->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
			
					<p> All rights reserved by BCCIJ</p>

			</div>
        </div>
    </footer>
    <!-- End Footer  -->

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