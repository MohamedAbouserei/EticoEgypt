@extends('frontend.header')
@section('styles')
    <style>
 /* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
  background-color: sandybrown;
  color: whitesmoke;
}
img
{
    object-fit:cover;
}

  </style>
@endsection
@section('page')
{{__("main.RECIPES")}}
@endsection
@section('content')

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{__("main.RECIPES")}}
                </h1>
                <p class="text-white link-nav"><a href="index.html">{{__("main.HOME")}} </a> <span class="lnr lnr-arrow-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>
                    <a href="menu.html"> {{__("main.RECIPES")}}</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<section class="menu-list-area section-gap">
    <div class="container">
        <div class="row">
            <ul class="gallery_box">
                @foreach ($recipes as $item)
                @if($loop->index==0)
                <li>
                    <a href="#0" data-target="#recipes{{$item->id}}"><img src="{{ URL::asset("storage/".$item->pic)}}"
                            style="width:100%;height:100%;">
                        <div class="box_data">

                            <span><button type="button" class="genric-btn primary circle" data-toggle="modal"
                                    data-target="#recipes{{$item->id}}">
                                    {{__("main.Show Directions & ingredients")}}
                                </button></span>
                                <div class="top-left">{{$item->name}}t</div>
                        </div>
                    </a>
                </li>
                @elseif($loop->index%4!=0)
                <li>
                    <a href="#0" data-target="#recipes{{$item->id}}"><img src="{{ URL::asset("storage/".$item->pic)}}"
                            style="width:100%;height:100%;">
                        <div class="box_data">
                            <br>
                            <span><button type="button" class="genric-btn primary circle" data-toggle="modal"
                                    data-target="#recipes{{$item->id}}">
                                    {{__("main.Show Directions & ingredients")}}
                                </button></span>
                                <div class="top-left">{{$item->name}}t</div>

                        </div>
                    </a>
                </li>

                @else
                <li style="position: relative;
                            top: -134px;">

                    <a href="#0" data-target="#recipes{{$item->id}}"><img src="{{ URL::asset("storage/".$item->pic)}}"
                        style="width:100%;height:100%;">
                        <div class="box_data">
                            <br>
                            <span><button type="button" class="genric-btn primary circle" data-toggle="modal"
                                    data-target="#recipes{{$item->id}}">
                                    {{__("main.Show Directions & ingredients")}}
                                </button></span>
                                <div class="top-left">{{$item->name}}t</div>

                        </div>
                    </a>
                </li>

                @endif
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="recipes{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{$item->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" >
                                <!-- Start menu-list Area -->

                                <section class="menu-list-area section-gap">
                                    <div class="container">
                                        <div class="row" style="width: 100%;" >
                                            <div id="slider-animation{{$item->id}}" class="carousel slide"
                                                data-ride="carousel"style="width: 100%;">
                                                <!-- The slideshow -->
                                                <div class="carousel-inner" style="background: url({!!Html::Image("storage/".$item->pic)!!});
">
                                                    <div class="carousel-item active">
                                                        <img src={{ URL::asset("storage/".$item->pic)}}
                                                            alt="Los Angeles" style="width: 200%;" height="400" >
                                                            <h2 class="wow slideInRight" data-wow-duration="2s" style="background-color: sandybrown;color: whitesmoke;width: 100%;">
                                                                    {{__("main.Directions")}}</h2>
                                                            <p class="wow slideInLeft" data-wow-duration="2s">
                                                                {!!$item->directions!!} </p>

                                                    </div>
                                                    <div class="carousel-item" style="overflow: scroll" >
                                                        <img src={{ URL::asset("storage/".$item->pic)}}
                                                            alt="Los Angeles" style="width: 200%;" height="400">
                                                        <div class="text-box">
                                                            <h2 class="wow slideInRight" data-wow-duration="2s" style="background-color: sandybrown;color: whitesmoke;">
                                                                    {{__("main.Ingredient")}}</h2>
                                                            <p class="wow slideInLeft" data-wow-duration="2s" >
                                                                {!!$item->ingredient!!}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#slider-animation{{$item->id}}"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#slider-animation{{$item->id}}"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>

                                            </div>



                                        </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



            </ul>
        </div>
    </div>
</section>

<!-- End menu-list Area -->

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            @if($recipes->Currentpage()==1)
            <a class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'right':'left' }}"></span>
                </span>
            </a>
            @else
            <a href="{{$recipes->previousPageUrl()}}" class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'right':'left' }}"></span>
                </span>
            </a>
            @endif
        </li>
        @for($i=0;$i<$recipes->lastPage();$i++)
            @if($recipes->Currentpage()==$i+1)
            <li class="page-item active"><a href="/recipe?page={{$i+1}}" class="page-link">{{$i+1}}</a></li>
            @else
            <li class="page-item"><a href="/recipe?page={{$i+1}}" class="page-link">{{$i+1}}</a>
            </li>
            @endif
            @endfor
            <li class="page-item">
                @if($recipes->Currentpage()==$recipes->lastPage())
                <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                        <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>
                    </span>
                </a>
                @else
                <a href="{{$recipes->nextPageUrl()}}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                        <span class="lnr lnr-chevron-{{(App::getLocale() == 'ar')?'left':'right' }}"></span>
                    </span>
                </a>
                @endif
            </li>
    </ul>
</nav>

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

</script>
@endsection
