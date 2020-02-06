@extends('frontend.header')
@section('page')
{{__("main.Product Details")}}
@endsection
@section('styles')
<link rel="stylesheet" href={{ URL::asset("css/child.css")}}>

@endsection
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                        {{__("main.Product Details")}}
                    </h1>
                <p class="text-white link-nav"><a href="index.html">{{__("main.HOME")}} </a> <span
                        class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span><a href="blog-home.html">{{__("main.PRODUCTS")}} </a> <span
                        class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span> <a href="blog-single.html">{{__("main.Product Details")}}
                            </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <section class="menu-list-area section-gap">
                            <div class="container">
                                <div class="row">
                                    <div id="slider-animation" class="carousel slide" data-ride="carousel">

                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            @foreach ($children->ProductPic as $item)
                                           @if($loop->index==0)
                                            <div class="carousel-item active">
                                                    <img src="<?php echo asset("storage/".$item->pic)?>"
                                                        alt="Los Angeles" style="max-width:800px;max-height:500px;">
                                                    <div class="text-box">
                                                    </div>
                                                </div>
                                                @else
                                                <div class="carousel-item">
                                                        <img src="<?php echo asset("storage/".$item->pic)?>"
                                                            alt="Los Angeles"style="max-width:800px;max-height:500px;">
                                                        <div class="text-box">

                                                        </div>
                                                    </div>
                                                    @endif
                                            @endforeach

                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#slider-animation" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>

                                    </div>



                                </div>
                        </section>
                        <!-- End menu-list Area -->
                    </div>
                    <div class="col-lg-12">
                        <h3>{{$children->name}} </h3>
                        <hr>
                        <!--begin tabs going in wide content -->
                            <div class="widget-wrap">
                                    <div class="single-sidebar-widget tag-cloud-widget">
                        <ul class="nav nav-tabs content-tabs" id="maincontent" role="tablist">
                            <li class="active show"><a  href="#Variety" role="tab" data-toggle="tab">{{__("main.Variety")}}</a></li>
                            <li><a href="#size" role="tab" data-toggle="tab">{{__("main.Size and Specification")}}</a></li>
                            <li><a  href="#Trademark" role="tab" data-toggle="tab">{{__("main.Trademark")}}</a></li>
                            <li><a href="#Packing" role="tab" data-toggle="tab">{{__("main.Packing")}}</a></li>
                            <li><a  href="#Bags" role="tab" data-toggle="tab">{{__("main.Bags or Carton")}}</a></li>
                            <li><a  href="#Weight" role="tab" data-toggle="tab">{{__("main.Weight Of Carton")}}</a></li>
                            <li><a  href="#Full" role="tab" data-toggle="tab">{{__("main.Full Quantity")}}</a></li>
                            <li><a  href="#Category" role="tab" data-toggle="tab">{{__("main.Category")}}</a></li>
                        </ul>
                    </div>
                            </div>
                        <!--/.nav-tabs.content-tabs -->


                        <div class="tab-content">

                            <div class="tab-pane fade in active show" id="Variety">
                                <p>{{$children->Variety}}</p>
                            </div>
                            <!--/.tab-pane -->


                            <div class="tab-pane fade" id="Trademark">
                                <p>{{$children->Trademark}}</p>
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="Packing">
                                <p>{{$children->Packing}}</p>
                            </div>
                            <!--/.tab-pane -->


                            <div class="tab-pane fade" id="Weight">
                                <p>{{$children->WeightofCarton}}</p>
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="size">
                                <p>{{$children->SizeandSpecifications}}</p>
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="Bags">
                                <p>{{$children->BagsorCarton}}</p>
                            </div>
                            <!--/.tab-pane -->

                            <div class="tab-pane fade" id="Full">
                                <p>{{$children->Fullquantity}}</p>
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="Category">
                                <p> {{$children->Group->name}}</p>
                            </div>
                            <!--/.tab-pane -->

                        </div>
                        <!--/.tab-content -->
                    </div>
                </div>
                <div class="comments-area">
                    <h4>{{count($children->Comment)}} {{__("main.Comments")}}</h4>
                    <div class="comment-list">
                        @foreach ($comments as $item)
                        <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">

                                    <div class="desc">
                                    <h5><a href="#">{{$item->name}}</a></h5>
                                        <p class="date">{{$item->updated_at}}</p>
                                        <p class="comment">
                                                {{$item->message}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
                <div class="comment-form">
                    <h4>{{__("main.Leave a Comment")}}</h4>
                <form action="/addcomment/{{$children->id}}" method="get" id="sendmail">
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-12 name">
                                <input type="text" class="form-control" id="name" placeholder="{{__("main.Enter Name")}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Enter Name")}}" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-12 email">
                                <input type="email" class="form-control" id="email" placeholder="{{__("main.Enter email address")}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Enter email address")}}" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="{{__("main.Subject")}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Subjec")}}" name="subject">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" id="child_id" placeholder="{{__("main.Subject")}}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Subject")}}" name="child_id" value="{{$children->id}}" hidden >
                            </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="{{__("main.Messege")}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = "{{__("main.Messege")}}"
                                required=""></textarea>
                        </div>
                        <input  type="submit" class="primary-btn text-uppercase" value="{{__("main.Submit")}}" >
                    </form>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">
                            <div class="single-sidebar-widget tag-cloud-widget">
                                    <h4 class="tagcloud-title">{{__("main.Filter By Category")}}</h4>
                                    <ul class="social-links">
                                            @foreach ($groups as $item)
                                            <li><a href="/filter/{{$item->id}}"><i>{{$item->name}}->{{count($item->Child)}} {{__("main.Products inside")}}</i></a></li><br>
                                            @endforeach
                                        </ul>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End post-content Area -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>

<script>
    $(document).ready(function() {

        // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse


        // if the tabs are in a narrow column in a larger viewport
        $('.sidebar-tabs').tabCollapse({
            tabsClass: 'visible-tabs',
            accordionClass: 'hidden-tabs'
        });

        // if the tabs are in wide columns on larger viewports
        $('.content-tabs').tabCollapse();

        // initialize tab function
        $('.nav-tabs a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        // slide to top of panel-group accordion
        $('.panel-group').on('shown.bs.collapse', function() {
            var panel = $(this).find('.in');
            $('html, body').animate({
                scrollTop: panel.offset().top + (-60)
            }, 500);
        });

    });
    </script>
    <script src={{ URL::asset("js/Mail_Validate.js")}}></script>
@endsection
