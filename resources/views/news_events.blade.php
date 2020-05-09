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
    <header class="main-header" style="background-color:royalblue;">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand" href=""><img src="{{asset('')}}" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">The BCCIJ</a>
                            <ul class="dropdown-menu">
								<li><a href="{{url('/About')}}">About BCCIJ</a></li>
								<li><a href="shop-detail.html">Steering Committee</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/News&Events') }}">News & Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu">
								
								@if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                                    @else
                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                        

                                        @if (Route::has('register'))
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                                    @endif
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
           
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-------------------------------------------->

    <div class="container">
        <div class="row">
            @foreach($newspack as $news )
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card" style="margin-bottom:20px"  >
                    <img src="{{ asset('storage/' . $news->image_url) }}" class="card-img-top" height="200px" width="100% ">
                        <div class="card-body">
                            <h4 class="card-title">{{$news->title}}</h4>
                            <p class="card-text">{{ substr($news->description,0,50) }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-sm btn-secondary">Read More</a>
                            <p class="pull-right">{{ Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}</p>
                         </div>
                </div>
            </div>
    
            
            @endforeach
        </div>
    </div>

    <!-------------------------------------------->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>