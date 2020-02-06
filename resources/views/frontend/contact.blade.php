@extends('frontend.header')
@section('page')
{{__("main.CONTACTS")}}
@endsection
@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                        {{__("main.CONTACTS")}}                                </h1>
                                <p class="text-white link-nav"><a href="index.html">{{__("main.HOME")}} </a>  <span class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>  <a href="contact.html"> {{__("main.CONTACTS")}}</a></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End banner Area -->

                <!-- Start contact-page Area -->
                <section class="contact-page-area section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 d-flex flex-column address-wrap">
                                <div class="single-contact-address d-flex flex-row">
                                    <div class="icon">
                                        <span class="lnr lnr-home"></span>
                                    </div>
                                    <div class="contact-details">

                                        <h5>{{__("main.Cairo,Egypt")}} </h5>
                                        <h5>
                                               {{__("main.10th of Ramadan City")}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-contact-address d-flex flex-row">
                                    <div class="icon">
                                        <span class="lnr lnr-phone-handset"></span>
                                    </div>
                                    <div class="contact-details">
                                        <h5><span dir="{{(App::getLocale() == 'ar')?'rtl':'ltr' }}">+201099078393 </span></h5>
                                        <h5><span dir="{{(App::getLocale() == 'ar')?'rtl':'ltr' }}">+201002799660</span></h5>
                                        <h5><span dir="{{(App::getLocale() == 'ar')?'rtl':'ltr' }}">+20554355854</span></h5>
                                        <h5>{{__("main.Sun to Thu 9 am to 6 pm")}}</h5>
                                    </div>
                                </div>
                                <div class="single-contact-address d-flex flex-row">
                                    <div class="icon">
                                        <span class="lnr lnr-envelope"></span>
                                    </div>
                                    <div class="contact-details">
                                        <h5>info@eticoegypt.com</h5>
                                        <h5>export@eticoegypt.com</h5>
                                        <h5>{{__("main.Send us your query anytime!")}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form class="form-area " action="{{ action('Controller@sendEmail') }}" method="get" id="sendmail" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <input name="name" id="name" placeholder="{{__("main.Enter Name")}}"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Enter Name")}}" class="common-input mb-20 form-control" required="" type="text">

                                            <input name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="{{__("main.Enter email address")}}"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Enter email address")}}" class="common-input mb-20 form-control" required="" type="email">

                                            <input name="subject"  id="subject" placeholder="{{__("main.Subject")}}"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Subjec")}}" class="common-input mb-20 form-control" required="" type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <textarea class="common-textarea form-control" name="message" id="message"placeholder="{{__("main.Messege")}}"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Messege")}}" required=""></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="alert-msg" style="text-align: left;"></div>
                                            <button class="genric-btn primary" style="float: right;">{{__("main.Submit")}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End contact-page Area -->

@endsection
@section('scripts')
<script src={{ URL::asset("js/Mail_Validate.js")}}></script>
@endsection
