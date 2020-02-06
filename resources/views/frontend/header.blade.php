<!DOCTYPE html>
	<html lang="zxx" class="no-js" dir="{{(App::getLocale() == 'ar')?'rtl':'ltr' }}">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href={{ URL::asset("sitelogo/ETICO.png")}}>
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('page')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
            ============================================= -->

			<link rel="stylesheet" href={{ URL::asset("css/linearicons.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/font-awesome.min.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/bootstrap.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/magnific-popup.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/nice-select.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/animate.min.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/jquery-ui.css")}}>
			<link rel="stylesheet" href={{ URL::asset("css/owl.carousel.css")}}>
            <link rel="stylesheet" href={{ URL::asset("css/main.css")}}>
            <link rel="stylesheet" href={{ URL::asset("css/mobile.css")}}>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
<style>
#foot {
    position: fixed;
    bottom: 0;
    width: 100%;
}
.nav-menu>li>a
{
    font-size: 15px;
}

#loading {
		-webkit-animation: rotation 2s infinite linear;
}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
.whole-page-overlay{
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            background: rgb(226, 227, 228 ,0.8);
            width: 100%;
            height: 100% !important;
            z-index: 1050;
        }
        .whole-page-overlay div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: inherit;
        }
        .whole-page-overlay .center-loader{
            color: white;
            margin: 20px;
        }
</style>

            @yield('styles')

		</head>
		<body>
                <div class="whole-page-overlay" id="whole_page_loader">
                        <div>
                            <h2 style="color:#d35400;">Etico Egypt</h2>
                            <img class="center-loader"  id="loading" style="height:100px;" src="http://www.vitorazevedo.net/external_files/loading_small.png"/>
                            <p style="color: #c0392b;">please Wait</p>
                        </div>
                    </div>

			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="http://www.facebook.com/Eticoegypt"><i class="fa fa-facebook"></i></a>
								<a href="http://www.twitter.com/Eticoegypt1"><i class="fa fa-twitter"></i></a>
								<a href="http://www.linkedin.com/company/Eticoegypt"><i class="fa fa-linkedin"></i></a>
							</div>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:+201002799660">+201002799660</a>
				  				<a class="btns" href="mailto:info@eticoegypt.com
                                  ">info@eticoegypt.com
                                    </a>
				  				<a class="icons" href="tel:+953 012 3654 896">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:support@colorlib.com">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>
                              </div>

                          </div>

		  			</div>
				</div>
			    <div class="container main-menu">
                        <div class="row align-items-center justify-content-between d-flex">
                                <a href="/"><img class="zoom" src={{ URL::asset("sitelogo/ETICO.png")}} alt="" title="" id="logo" /></a>
                                <nav id="nav-menu-container">
                                        <ul class="nav-menu" >
                                                <li class="nav-item <?php if(strpos(url()->current(), "home") !== false)echo "active";?>"><a class="nav-link" href="/home">{{__("main.HOME")}}</a></li>
                                                    <li class="nav-item <?php if(strpos(url()->current(), "about-us") !== false)echo "active";?>"><a class="nav-link" href="/about-us">{{__("main.ABOUT US")}}</a></li>
                                                    <li class="nav-item <?php if(strpos(url()->current(), "recipe") !== false)echo "active";?>" ><a class="nav-link" href="/recipe">{{__("main.RECIPES")}}</a></li>
                                                    <li class="nav-item <?php if(strpos(url()->current(), "group_child") !== false)echo "active";?>"><a class="nav-link" href="/group_child">{{__("main.PRODUCTS")}}</a></li>
                                                    <li class="nav-item <?php if(strpos(url()->current(), "healthfacts") !== false)echo "active";?>"><a class="nav-link" href="/healthfacts">{{__("main.HEALTH FACTS")}}</a></li>
                                                    <li class="nav-item <?php if(strpos(url()->current(), "contact") !== false)echo "active";?>"><a class="nav-link" href="/contact">{{__("main.CONTACTS")}}</a></li>
                            <a class="nav-link dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-globe"> </span> </a>
                              <div class="dropdown-menu" aria-labelledby="dropdown09" id="lang" >
                                    <a class="dropdown-item" href="{{ url('setlocale/en') }} "><span class="flag-icon flag-icon-us"> </span>  English</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/fr') }} "><span class="flag-icon flag-icon-fr"> </span>  French</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/it') }} "><span class="flag-icon flag-icon-it"> </span>  Italian</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/ru') }} "><span class="flag-icon flag-icon-ru"> </span>  Russian</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/ar') }} "><span class="flag-icon flag-icon-sa"> </span>  Arabic</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/zh') }} "><span class="flag-icon flag-icon-cn"> </span>  Chinese</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/es') }} "><span class="flag-icon flag-icon-es"> </span>  Spanish</a>
                                  <a class="dropdown-item" href="{{ url('setlocale/pt') }} "><span class="flag-icon flag-icon-pt"> </span>  Portuguese</a>
                                    <a class="dropdown-item" href="{{ url('setlocale/tr') }} "><span class="flag-icon flag-icon-tr"> </span>  Turkish</a>
                              </div>
                            </ul>

                            </nav><!-- #nav-menu-container -->

                            </div>
			    </div>
			  </header><!-- #header -->

        <!--================End Header Menu Area =================-->
        <div class="row">
                <div class="col-sm-12">
@yield('content')

                </div>
        </div>
        <marquee behavior="scroll" id="foot" style="background-color:sandybrown;">

                @foreach($news as $one)
                 <font color="white"> {{$one->updated_at}}:
               {{$one->news}}
               &nbsp
             </font>
             @endforeach
              </marquee>
        <!--================Footer Area =================-->
			<footer class="footer-area section-gap">

  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                  <!-- Links -->
                  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Link 1</a>
                    </li>
                    <li>
                      <a href="#!">Link 2</a>
                    </li>
                    <li>
                      <a href="#!">Link 3</a>
                    </li>
                    <li>
                      <a href="#!">Link 4</a>
                    </li>
                  </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                  <!-- Links -->
                  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Link 1</a>
                    </li>
                    <li>
                      <a href="#!">Link 2</a>
                    </li>
                    <li>
                      <a href="#!">Link 3</a>
                    </li>
                    <li>
                      <a href="#!">Link 4</a>
                    </li>
                  </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                  <!-- Links -->
                  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Link 1</a>
                    </li>
                    <li>
                      <a href="#!">Link 2</a>
                    </li>
                    <li>
                      <a href="#!">Link 3</a>
                    </li>
                    <li>
                      <a href="#!">Link 4</a>
                    </li>
                  </ul>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <hr>

            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
              <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
              </li>
              <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
              </li>
            </ul>
            <!-- Call to action -->

            <hr>

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                  <i class="fa fa-facebook"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                  <i class="fa fa-twitter"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                  <i class="fa fa-linkedin"> </i>
                </a>
              </li>
            </ul>
            <!-- Social buttons -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href="https://mdbootstrap.com/education/bootstrap/"> <p class="footer-text"> <a href="/"><img class="zoom" src={{ URL::asset("sitelogo/ETICO.png")}} alt="" title="" id="logo" /></a>
                All rights reserved.ETICO EGYPT</p></a>
            </div>
            <!-- Copyright -->
            <div class="row">
                <div class="col-lg-9">
                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                </div>
            </div>
                </footer>
                <!-- End footer Area -->

                <script src={{ URL::asset("js/vendor/jquery-2.2.4.min.js")}}></script>
                <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src={{ URL::asset("js/vendor/bootstrap.min.js")}}></script>
                  <script src={{ URL::asset("js/easing.min.js")}}></script>
                <script src={{ URL::asset("js/hoverIntent.js")}}></script>
                <script src={{ URL::asset("js/superfish.min.js")}}></script>
                <script src={{ URL::asset("js/jquery.ajaxchimp.min.js")}}></script>
                <script src={{ URL::asset("js/jquery.magnific-popup.min.js")}}></script>
                 <script src={{ URL::asset("js/jquery-ui.js")}}></script>
                <script src={{ URL::asset("js/owl.carousel.min.js")}}></script>
                <script src={{ URL::asset("js/jquery.nice-select.min.js")}}></script>
                <script src={{ URL::asset("js/mail-script.js")}}></script>
                <script src={{ URL::asset("js/main.js")}}></script>
                <script>setTimeout(function(){
                        $('.whole-page-overlay').fadeOut();
                    }, 1000);
        </script>
@yield('scripts')
            </body>
        </html>
