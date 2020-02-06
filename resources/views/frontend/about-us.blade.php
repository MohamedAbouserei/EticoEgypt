@extends('frontend.header')
@section('page')
{{__("main.ABOUT US")}}
@endsection
@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                        {{__("main.ABOUT US")}}
                                </h1>
                                <p class="text-white link-nav"><a href="index.html">{{__("main.HOME")}} </a>  <span class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>  <a href="about.html"> {{__("main.ABOUT US")}}</a></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End banner Area -->

                <!-- Start home-about Area -->
                <section class="home-about-area section-gap">
                        <img class="about-img" src="img/about-img.png" alt="">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="text-uppercase">{{__("main.OUR VISION")}}</h6>
                                <h1>
                                      <span>

                                        {{__("main.Inspiring you to prepare everyday nourished & innovative & safe plates to your beloved ones with our first harvest products...... QETAF")}}
                                    </span>

                                    </h1>
                                <a class="primary-btn squire mx-auto mt-20" href="#">{{__("main.Get Started Now")}}</a>
                            </div>


                        </div>
                    </div>
                </section>
                <!-- End home-about Area -->

                <!-- Start review Area -->
                <section class="review-area section-gap relative">
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9 pb-40 header-text text-center">
                                <h1 class="pb-10 text-white">{{__("main.Our Mission")}}</h1>
                                <p>
                                        {{__("main.At ETICO, we ensure the quality of our products to maintain credibility. ETICO adopts TQC standards for:")}}                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-review-carusel">
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Guarantee healthy food with outstanding quality to your family and beloved one through our brand.")}}                                     </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Assuring safety, hygiene, and full nutritional values.")}}                                     </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.We ensure handling your food with care from farms to your table by our skilled experts.")}}                                     </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Delivering you ready to make, affordable and of superior quality products to save your time and efforts.")}}
                                    </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Gives you a wide variety of fruits, vegetables, and French fries to meet all tastes and satisfy your wishes.")}}                                    </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Assuring highest quality in the overall process starting from raw material sources, through manufacturing to distribution.")}}                                     </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Ensuring sustained hygiene standards and guarantee of appropriate storage conditions.")}}                                     </p>
                                </div>
                                <div class="single-review item">
                                    <img src="img/r1.png" alt="">

                                    <p>
                                            {{__("main.Implementing rules of the Hazard Analysis and Critical control Points standards (HACCP).")}}
                                    </p>
                                </div>
                                <div class="single-review item">
                                        <img src="img/r1.png" alt="">

                                        <p>
                                                {{__("main.Applying the newest updates requests and instructions of Food and Agriculture organization (FAO),as well as other reputable international institutions.")}}
                                        </p>
                                    </div>
                                    <div class="single-review item">
                                            <img src="img/r1.png" alt="">

                                            <p>
                                                    {{__("main.In addition to the International Standards for Food and Drug Administration (FDA).")}}
                                            </p>
                                        </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End review Area -->


@endsection
