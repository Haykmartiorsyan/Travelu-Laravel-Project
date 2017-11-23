@extends('layout.app')
@section('title', 'Travelu | Home')
@section('body')
        <!--************************************
                Home Slider Start
        *************************************-->
        <div class="tg-bannerholder">
            <div class="tg-slidercontent">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1>Experience the Wonder</h1>
                            <h2>People don’t take trips, trips take People</h2>
                            <form class="tg-formtheme tg-formtrip">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Destinations">Destinations</option>
                                                <option data-tokens="All Areas">All Areas</option>
                                                <option data-tokens="Bayonne">Bayonne</option>
                                                <option data-tokens="Greenville">Greenville</option>
                                                <option data-tokens="Manhattan">Manhattan</option>
                                                <option data-tokens="Queens">Queens</option>
                                                <option data-tokens="The Heights">The Heights</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Adventure Type">Adventure Type</option>
                                                <option data-tokens="Ice Adventure Vacations">Ice Adventure Vacations</option>
                                                <option data-tokens="National Park">National Park</option>
                                                <option data-tokens="Adult Vacations">Adult Vacations</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Travel Month">Travel Month</option>
                                                <option data-tokens="January">January</option>
                                                <option data-tokens="February">February</option>
                                                <option data-tokens="March">March</option>
                                                <option data-tokens="April">April</option>
                                                <option data-tokens="May">May</option>
                                                <option data-tokens="June">June</option>
                                                <option data-tokens="July">July</option>
                                                <option data-tokens="August">August</option>
                                                <option data-tokens="September">September</option>
                                                <option data-tokens="October">October</option>
                                                <option data-tokens="November">November</option>
                                                <option data-tokens="December">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Duration">Duration</option>
                                                <option data-tokens="2 weeks">2 weeks</option>
                                                <option data-tokens="3 weeks">3 weeks</option>
                                                <option data-tokens="4 weeks">4 weeks</option>
                                                <option data-tokens="5 weeks">5 weeks</option>
                                                <option data-tokens="6 weeks">6 weeks</option>
                                                <option data-tokens="7 weeks">7 weeks</option>
                                                <option data-tokens="8 weeks">8 weeks</option>
                                                <option data-tokens="9 weeks">9 weeks</option>
                                                <option data-tokens="10 weeks">10 weeks</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="tg-btn" type="submit"><span>find tours</span></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
                <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%"></figure>
                <figure class="item" data-vide-bg="poster: images/slider/img-02.jpg" data-vide-options="position: 0% 50%"></figure>
                <figure class="item" data-vide-bg="poster: images/slider/img-03.jpg" data-vide-options="position: 0% 50%"></figure>
            </div>
        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">

            <!--************************************
                    Popular Tour Start
            *************************************-->
            <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
                <div class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectiontitle tg-sectiontitleleft">
                                    <h2>Popular Tours</h2>
                                    <a class="tg-btnvtwo" href="/tours">All Tours</a>
                                </div>
                                <div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">

                                    @foreach($tours as $tour)
                                    <div class="item tg-populartour">
                                        <figure><a href="{{'/tours/'.$tour->id}}"><img src="images/tours/{{$tour->image_name}}.jpg" alt="image destinations"></a></figure>
                                        <div class="tg-populartourcontent">
                                            <div class="tg-populartourtitle">
                                                <h3><a href="{{'/tours/'.$tour->id}}">{{$tour->title}}</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>{{$tour->short_description}}</p>
                                            </div>
                                            <div class="tg-populartourfoot">
                                                <div class="tg-pricearea">
                                                    <span>from</span>
                                                    <h4>{{$tour->price}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Popular Tour End
            *************************************-->
            <!--************************************
                   Advantures Start
           *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-toursdestinations">
                                <div class="tg-tourdestination tg-tourdestinationbigbox">
                                    <figure>
                                        <a href="javascript:void(0);">
                                            <img src="/images/destination/img-01.jpg" alt="image destinations">
                                            <div class="tg-hoverbox">
                                                <div class="tg-adventuretitle">
                                                    <h2>Ice Adventure Vacations</h2>
                                                </div>
                                                <div class="tg-description">
                                                    <p>your best vacation ever</p>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="tg-tourdestination">
                                    <figure>
                                        <a href="javascript:void(0);">
                                            <img src="/images/destination/img-02.jpg" alt="image destinations">
                                            <div class="tg-hoverbox">
                                                <div class="tg-adventuretitle">
                                                    <h2>National Park</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="tg-tourdestination">
                                    <figure>
                                        <a href="javascript:void(0);">
                                            <img src="/images/destination/img-03.jpg" alt="image destinations">
                                            <div class="tg-hoverbox">
                                                <div class="tg-adventuretitle">
                                                    <h2>Adult Vacations</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Advantures End
            *************************************-->
            <!--************************************
                    Features Start
            *************************************-->
            <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="tg-features">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-feature">
                                    <div class="tg-featuretitle">
                                        <h2><span>01</span>Luxury Hotels</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-feature">
                                    <div class="tg-featuretitle">
                                        <h2><span>02</span>Tourist Guide</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-feature">
                                    <div class="tg-featuretitle">
                                        <h2><span>03</span>Flights Tickets</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Features End
            *************************************-->

            <!--************************************
                    Call To Action Start
            *************************************-->
            <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-02.jpg">
                <div class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-calltoaction">
                                    <div class="tg-pattern"><img src="images/patternw.png" alt="image destination"></div>
                                    <h2>Get 10% Off on your Next Travel</h2>
                                    <div class="tg-description"><p>Travel between 22 April to 21 May and get existing offers along with a sure 10% cash discount</p></div>
                                    <a class="tg-btn" href="/tours"><span>Explore Tour</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Call To Action End
            *************************************-->
        </main>

@endsection