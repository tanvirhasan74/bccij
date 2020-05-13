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
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/bccij-logo.png')}}" class="logo" alt=""></a>
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



   <!-- Start All Title Box -->
   <div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Instruction</h2>
                
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <h2 class="text" id="topTitle" style="border:4px solid black;background-color:aliceblue;">Instruction</h2>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >1.  Required documents as follows: (Should be attached with the Application form)</h1>


        <ul id="application" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;margin-bottom: 50px;">
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Bank transfer receipt of membership fees (Copy). Bank transfer charges should be bear by your self.</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Valid company registration certificate (Genzai Tohon), It should be updated for less than 90 days (Original).</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Tax return certificate of last financial year (Houjin Nouzei Shoumei Sho) by the Japanese Taxation Authority (Copy). You may erase / obliterate your personal columns other than the name of company, address, date, seal of the authority, etc.</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Certificate of Alien Registration (Copy of both side) or Valid Bangladeshi / Japanese passport (in case a Bangladeshi descendant), (Copy of First 4 pages)</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Passport size photographs: 2 pieces (size 4.5cm x 4.5cm, taken within last 6 months).</li>
            
        </ul>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >2. Membership Fee 20,000 Yen (Twenty thousand Yen), could be remitted through Bank transfer in favour of BCCIJ, details as follows:</h1>

        <ul id="application" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;margin-bottom: 50px;">
            <li><span class="fa-li"><i class="far fa-circle"></i></span> Admission Fee of General Members 10,000 Yen (Ten thousand Yen).</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Yearly Subscription Fee for General Members (Next One Year) 10,000 Yen (Ten thousand Yen).</li>
            
        </ul>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >3. Bank details for remittance:</h1>

        <ul class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;margin-bottom: 50px;">
            <li><span class="fa-li"><i class="far fa-circle"></i></span>MIZUHO BANK</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Shinbashi Chuo Branch</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Ordinary Account No.: 2091121</li>
            <li><span class="fa-li"><i class="far fa-circle"></i></span>Account holder: BCCIJ</li>

        </ul>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >4. Please send to the application by post to the following address:</h1>

        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            Bangladesh Chamber of Commerce and Industry in Japan (BCCIJ)
            <br>
            4-15-16 Meguro
            <br>
            Meguro-Ku
            <br>
            Tokyo 153-0063
        </p>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >5. Last date of Application:</h1>

        <p style="font-family:'poppins',sans-serif;font-size: 50px;margin-bottom: 15px;">
            Input data yet to recieve
        </p>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >6. Incomplete or incorrect Application does not accept.</h1>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >7. Criteria and qualifications for the General Membership:</h1>   

        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            Any company registered in Japan within the framework of Japanese company registration law and already submitted at least one year tax return to the Japanese Taxation Authority can apply for a general membership.
            <br><br>
            The President or the Managing Director or the Director of the company must be Bangladeshi by birth or the Bangladesh origin of first generation or a Bangladeshi descendant.
            <br><br>
            Have a valid company registration certificate (Genzai Tohon). The President or the Managing Director or the director whose name or names must appear in the company registration certificate (Genzai Tohon)
            <br><br>
            Have a Tax return certificate of last financial year (Houjin Nouzei Shoumei Sho) by the Japanese Taxation Authority.
            <br><br>
            Have a valid Bangladeshi passport issued by the Bangladesh Government or Japanese passport issued by the Japan Government (in case a Bangladeshi descendant). Have a Certificate of Alien Registration in Japan.
            <br><br>
            Two latest passport size photographs (size 4.5cm x 4.5cm) taken within last 6 months.
            <br><br>
            The member company will be issued one membership identity card in the name of the company and another identity card will be issued in the name of the President or the Managing Director or the Director representing the company to BCCIJ. Once general membership is approved, representative of the company can be changed at the written request of the company.
            <br><br>
            General Members will have the right of voting and contesting in the election becoming member of the sub committees and representing the chamber if authorized by BCCIJ.
            <br><br>
            Membership is not transferable.
            <br><br>
            A company will be barred from General Membership if the President or the Managing Director or the Director of the company is found to have criminal detention or conviction record by the court of law of Japan or Bangladesh.
            <br><br>
            General membership will be approved only when above said terms & conditions are be fulfilled.

        </p>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >8. The BCCIJ holds / reserved the full rights to approve or to expel a membership and can take any decision regarding the Membership as well as any other matters as per needs in future.</h1>

    </div>
</div>
<!-- End Cart -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->



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