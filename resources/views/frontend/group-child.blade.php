
application/x-httpd-php group-child.blade.php ( HTML document, ASCII text )
@extends('frontend.header')
@section('page')
{{__("main.PRODUCTS")}}
@endsection
@section('content')

<!-- start banner Area -->
<section class="banner-area relative blog-home-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content blog-header-content col-lg-12">
                <h1 class="text-white">
                    {{__("main.PRODUCTS")}}
                               </h1>
            <p class="text-white link-nav"><a href="index.html">{{__("main.HOME")}} </a>  <span class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>  <a href="contact.html"> {{__("main.PRODUCTS")}}</a></p>

                <p class="text-white">
{{__("main.No amount of money ever bought a second of Time")}}
                </p>
                <!--
                <a href="#" class="primary-btn">View More</a>
                -->
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start top-category-widget Area -->
<section class="top-category-widget-area pt-90 pb-90 ">
    <div class="container">
        <div class="row">
            @foreach ($groups as $item)
            <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="/filter/{{$item->id}}" target="_blank">
                            <div class="thumb">
                                @if(isset($item->image))
                                <img class="content-image img-fluid d-block mx-auto"
                                    style="max-width:400px;max-height:215px;"
                                    src={{ URL::asset("storage/".$item->image)}} alt="">

                                @else
                                <img class="content-image img-fluid d-block mx-auto"
                                    src={{ URL::asset("img/blog/cat-widget1.jpg")}} alt="">

                                @endif
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">{{$item->name}}</h4>
                                <span></span>
                                <p>{{$item->updated_at}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php

                        if($loop->index==2)
                         break;
            ?>
            @endforeach


        </div>
    </div>
</section>
<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area">
    <div class="container">
        <div class="row">
                <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget search-widget">
                                <form class="search-form" action="#">
                                    <input placeholder="{{__("main.Search Products")}}" id="search" name="search" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Posts'">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="single-sidebar-widget tag-cloud-widget">
                                                        <a href="#">
                                    <h4>{{__("main.Filter By Category")}}</h4>
                                </a>
                                <ul class="social-links">
                                    @foreach ($groups as $item)
                                    <li><a href="/filter/{{$item->id}}"><i>{{$item->name}}->{{count($item->Child)}} {{__("main.Products inside")}}</i></a></li><br>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
            <div class="col-lg-8 posts-list">
                    <sectionfilt>
                @foreach ($children as $item)
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">

                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$item->Group->name}}</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$item->updated_at}}</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">{{count($item->Comment)}}
                                    {{__("main.Comments")}}</a> <span class="lnr lnr-bubble"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            @if($item->ProductPic->first())
                            <img class="img-fluid" src="<?php echo asset("storage/".$item->ProductPic->first()->pic)?>" alt="">
                            @else
                            <img class="img-fluid" src={{ URL::asset("img/blog/feature-img1.jpg")}} alt="">
                        @endif
                        </div>
                        <a href="children/{{$item->id}}" class="posts-title" href="blog-single.html">
                            <h3>{{$item->name}}</h3>
                        </a>
                        <a href="children/{{$item->id}}" class="primary-btn">{{__("main.View More")}}</a>
                    </div>
                </div>
                @endforeach

                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            @if($children->Currentpage()==1)
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'right':'left' }}"></span>
                                </span>
                            </a>
                            @else
                            <a href="{{$children->previousPageUrl()}}" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'right':'left' }}"></span>
                                </span>
                            </a>
                            @endif
                        </li>
                        @for($i=0;$i<$children->lastPage();$i++)
                            @if($children->Currentpage()==$i+1)
                            <li class="page-item active"><a href="{{Request::url()}}?page={{$i+1}}"
                                    class="page-link">{{$i+1}}</a></li>
                            @else
                            <li class="page-item"><a href="{{Request::url()}}?page={{$i+1}}" class="page-link">{{$i+1}}</a>
                            </li>
                            @endif
                            @endfor
                            <li class="page-item">
                                @if($children->Currentpage()==$children->lastPage())
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>
                                    </span>
                                </a>
                                @else
                                <a href="{{$children->nextPageUrl()}}" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>
                                    </span>
                                </a>
                                @endif
                            </li>
                    </ul>
                </nav>
            </sectionfilt>
            </div>

        </div>
    </div>
</section>
<!-- End post-content Area -->
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {
        $('#search').on('keyup', function () {
            $value = document.getElementById("search").value;
            $.ajax({
                type: 'get',
                url: '/ajaxfilt/',
data:
{
    'name':$value
},
                success: function (data) {
                    $('sectionfilt').html(data);
                }
            });
        });
    });

</script>
@endsection
