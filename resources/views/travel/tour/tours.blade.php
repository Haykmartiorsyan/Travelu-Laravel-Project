@extends('layout.app')
@section('title', 'Travelu | Our Tours')

@section('body')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>Tours</h1>
                        <h2>Donec id elit non mi porta gravida at eget metus</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-listing tg-listingvone">
                            <div class="clearfix"></div>
                            <div class="row">

                            @foreach($tours as $tour)
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="tg-populartour">
                                        <figure>
                                            <a href="{{'/tours/'.$tour->id}}"><img src="/images/tours/{{$tour->image_name}}.jpg" alt="image destinations"></a>
                                        </figure>
                                        <div class="tg-populartourcontent">
                                            <div class="tg-populartourtitle">
                                                <h3><a href="{{'/tours/'.$tour->id}}">{{$tour->title}}</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>{{$tour->short_description}}</p>
                                            </div>
                                            <div class="tg-populartourfoot">
                                                <div class="tg-pricearea">
                                                    <h4>${{$tour->price}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            </div>
                            <div class="clearfix"></div>
                            <nav class="tg-pagination">
                                <ul>
                                    <li class="tg-active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
    @endsection