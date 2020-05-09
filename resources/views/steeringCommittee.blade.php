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
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-hover" data-toggle="dropdown">The BCCIJ</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/About')}}">About BCCIJ</a></li>
								<li><a href="{{url('/SteeringCommittee')}}">Steering Committee</a></li>
                                <li><a href="my-account.html">The Constitution</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
								<li><a href="checkout.html">Instruction</a></li>
								<li><a href="wishlist.html">Membership Application</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Press & Notice</a></li>
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



    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Steering Committee</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Committee Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
           
        <h2 class="text" style="border:4px solid black;background-color: aliceblue;">New Executive Members & Advisers of BCCIJ</h2>
        <div class="data">
        <h1 class="text">Chief Patron:</h1>
        <ul id="obj" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>Bangladesh Embassy- H.E Ambassador</li>
          </ul>
        <h1 class="text">Advisers:</h1>
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. BADAL CHAKLADER <br>  (President)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> Mr. SHEIKH MONJUR MORSHED <br>(Vice President)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> Mr. MOHAMMED ABDUR RAZZAK <br>(Vice President)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. AHSAN SHAMEEM (JOSEPH)<br>(Vice President)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> Mr. HAKIM MD. NASIRUL <br>(General Secretary)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. KAZI ENAMUL HOQUE <br>(Joint Secretary)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> Mr. THAKUR GUL MOHAMMAD (MONI) <br>(Treasurer)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. HAQUE MD. SANAUL <br>(Cultural & Publication)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. MIR REZAUL KARIM <br>(Executive Member)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. CHOWDHURYSHAHIN <br>(Executive Member)</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Mr. MIZANUR RAHMAN SHAHIN <br>(Executive Member) </li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>RUNA AHMED <br>(AUDITOR)</li>
        </ul>
        </div>
        </div> 
    </div>




    <!--------------------------->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

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