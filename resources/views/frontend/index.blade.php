@extends('frontend.header')
@section('page')
{{__("main.HOME")}}
@endsection
@section('content')
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex justify-content-center align-items-center">
                    <div class="banner-content col-lg-10 col-md-12 justify-content-center">
                        <h6 class="text-uppercase">{{__("main.Delicious Food")}}</h6>
                        <h1>
                                {{__("main.Prepared with love")}}
                        </h1>
                        <p class="text-white mx-auto">
                                {{__("main.FOOD IS NOT JUST ENERGY, IT IS AN EXPERINCE (GUY FIERI)")}}

                            </p>
                        <a href="/recipe" class="primary-btn squire text-uppercase mt-10">{{__("main.RECIPES")}}
                            </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

@endsection
