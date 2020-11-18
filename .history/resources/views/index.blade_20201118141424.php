<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">


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

<body  class="fullBody">
   
    
    <!-- Start Main Top -->
    <div class="logoBlock" style="margin:auto; display:flex;">
        <div class="navbar-header" style="width:165px;">
                    
                <a class="navbar-brand" href="{{url('/')}}" ><img src="{{asset('images/logo-bccij.png')}}" style="width:110px;" class="logo"   alt=""></a>
                
        </div>  

        <div class="LogoTitle" style="margin-top: 8px;font-weight: bold;">
            <p>BCCIJ</p>
            <p id="LogoTitleLong" >Bangladesh Chamber of Commerce and Industry Japan</p>
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

    <div style="background-color: white;margin: 0 auto;" class="whole">
        <!-- Start Slider -->
    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2800">

        <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img class="slideimg" src="images/slide1.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="slideimg" src="images/t3.jpg" alt="" >
          </div>
          <div class="carousel-item">
            <img class="slideimg" src="images/JP_6.jpg" alt="" >
          </div>
          <div class="carousel-item">
            <img class="slideimg" src="images/mount_fuji.jpg" alt="" >
          </div>
          <div class="carousel-item">
            <img class="slideimg" src="images/port_chittagong.png" alt="" >
          </div>
          <div class="carousel-item">
            <img class="slideimg" src="images/JP8.jpg" alt="" >
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <!-- End Slider -->

    
   
    <div class="categories-shop" >
        <div class="container">
            <div class="row" style="background-color: white">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 style="color:sienna;"><b style="font-size: 17px">Message From Ambassador</b></h3>
                    
                    <div class="card"  >
                    <img class="card-img-top" src="{{asset('images/no_image_available.jpg')}}" alt="Card image" style="width:100%;height:200px ">
                    <div class="card-body" style="padding: 0.75rem">
                        <p class="card-text"  style="line-height:1"><small>{{substr($ambassador_message,0,50)}} </small> </p>
                        {{-- <p class="card-text"  style="line-height:1"><small>{{substr($ambassador_message,0,50)}} </small> </p> --}}
                    </div>  
                        <a href="" class="btn btn-primary">View More</a>      
                        {{-- <a href="{{url('ambassadormessage')}}" class="btn btn-primary">View More</a>       --}}

                    </div>   
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 style="color:sienna;"><b style="font-size: 17px;">Message From President</b></h3>
                    
                    <div class="card"  >
                    <img class="card-img-top" src="{{asset('images/10.png')}}" alt="Card image" style="width:100%;height:200px ">
                    <div class="card-body" style="padding: 0.75rem;max-height:84px">
                        <p class="card-text"  style="line-height:1"><small>{{substr($president_message,0,50)}} </small> </p>
                    </div>
                        <a href="{{url('presidentmessage')}}" class="btn btn-primary">View More</a>      
                    </div>   
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 style="color:sienna;"><b style="font-size: 17px;">Message From General Secretary</b></h3>
                    
                    <div class="card"  >
                    <img class="card-img-top" src="{{asset('images/general-secretary.jpg')}}" alt="Card image" style="width:100%;height:200px ">
                    <div class="card-body" style="padding: 0.75rem;max-height:84px">
                        <p class="card-text"  style="line-height:1"><small>{{substr($generalSecretary_message,0,50)}} </small> </p>
                    </div>
                        <a href="{{url('generalSecretaryMessage')}}" class="btn btn-primary">View More</a>      
                    </div>   
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h3 class="card-title" style="color: red;text-align:center"><b>Important Notice</b></h3>
                    
                    <div class="card" style="border:5px solid slategray;overflow:auto;height:295px"  >                            
                            {{-- <h6 class="card-subtitle mb-2 text-muted">*about the website release</h6> --}}
                            <p class="card-text" style="font-size: 15px; text-align:justify">{{substr($notice,0,500)}}</p>
                            {{-- <a href="#" class="card-link">view more</a> --}}
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->


    <!-- Start news events  -->
    
    <div class="container">
        <h3 ><b>News & Events</b> </h3>
        <div class="row">
            @foreach($newspack as $news )
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" style="margin-bottom:45px" >
                
                <div class="card" style="margin-bottom:5px;height:90%"  >
                <img src="{{ asset('storage/' . $news->image_url) }}" class="card-img-top" style= "border: 2px solid darkslateblue;"height="180px" width="100% ">
                    <div class="card-body" style="width: 100%; height:120px; line-height:20px;padding:0.25rem">
                        <h2 class="card-title" style="text-align:left;font-size: medium;padding-top:0px;margin-bottom:0px">{{\Illuminate\Support\Str::limit($news->title, $limit = 55, $end = '...')}}</h2>
                        <p class="card-text" style="font-size:15px; ">{{\Illuminate\Support\Str::limit($news->description, $limit = 80, $end = '...')}}</p>
                    </div>    
                </div>
                <div class="row" >
                    <div class="col-4">
                        <a  href="{{route('newsdetails',['newsid'=>$news->id])}}" class="btn btn-sm btn-danger">Read More</a>
                    </div>
                    <div class="col-8" class="pull-right">
                        <p ><small class="text-muted">{{ Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}</small></p>
                    </div>      
                </div>       
            </div>
    
            
            @endforeach
        </div>
    </div>

<!-- End Categories -->
	
	


    



    <!--------------------------->

    <!-- Start Logo Block  -->
    <!-- Start Logo Block  -->
    <div class="products-box">
        <div class="container">
            <h3 ><b>Useful Links</b> </h3>
            

            <div class="row special-list">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="http://bdembjp.mofa.gov.bd/" target="_blank">
                            <img src="{{asset('images/mofa.jpg')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="https://www.jetro.go.jp/" target="_blank">
                                <img src="{{asset('images/jetro.jpg')}}"  alt="Image" style="width:120px;height:120px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="https://www.jica.go.jp/" target="_blank">
                                <img src="{{asset('images/jica.png')}}"  alt="Image" style="width:120px;height:120px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="http://fbcci.org/" target="_blank">
                                <img src="{{asset('images/FBCCI.jpg')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="https://www.bd.emb-japan.go.jp/itprtop_en/index.html" target="_blank">
                                <img src="{{asset('images/japan_embassy.png')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="https://www.chittagongchamber.com/" target="_blank">
                                <img src="{{asset('images/CtgBccij.jpg')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="http://forms.gov.bd/" target="_blank">
                                <img src="{{asset('images/forms.jpg')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="https://www.bangladeshtradeportal.gov.bd/" target="_blank">
                                <img src="{{asset('images/bd_trade_portal.jpg')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <a href="http://bida.gov.bd/" target="_blank">
                                <img src="{{asset('images/bida.png')}}"  alt="Image" style="width:100px;height:100px;object-fit:contain">
                            </a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <a href="https://muumuu-mail.com/login" class="btn btn-secondary btn-lg " role="button" style="float: right" >Go To Web Mail</a>

    </div>
    <!-- End Logo Block  -->
    <!-- End Logo Block  -->
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