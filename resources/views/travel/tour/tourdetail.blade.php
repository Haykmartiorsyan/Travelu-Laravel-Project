@extends('layout.app')
@section('title', 'Tour')

@section('body')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/tours/{{$tour->image_name}}.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-tourbookingdetail">
                            <div class="tg-bookinginfo">
                                <h2>{{$tour->title}}</h2>
                                <div class="tg-pricearea">
                                    <h4>${{$tour->price}}<sub></sub></h4>
                                </div>
                                <div class="tg-description">
                                    <p>{{$tour->short_description}}</p>
                                </div>
                                <div class="col-md-3 pull-right">
                                    <a href="/contact" class="tg-btn tg-btn-lg"><span>book now</span></a>
                                </div>


                                <div class="tg-refundshare">
                                    <ul class="tg-likeshare">
                                        <li class="tg-shareicon">
                                            <a href="javascript:void(0);"><i class="icon-share-button-outline"></i>share</a>
                                            <ul class="tg-share">
                                                <li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-sectionspace tg-haslayout">
                                <div class="tg-themetabs tg-bookingtabs">
                                    <ul class="tg-themetabnav" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#america" aria-controls="america" role="tab" data-toggle="tab">
                                                <span>Overview</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">
                                                <span>Itinerary</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#london" aria-controls="london" role="tab" data-toggle="tab">
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#india" aria-controls="india" role="tab" data-toggle="tab">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tg-themetabcontent">
                                        <div role="tabpanel" class="tab-pane active tg-overviewtab" id="america">
                                            <div class="tg-bookingdetail">
                                                <div class="tg-box">
                                                    <h2>About this listing</h2>
                                                    <div class="tg-description">
                                                        {{$tour->description}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane tg-itinerary" id="australia">
                                            <div class="tg-bookingdetail">
                                                <div class="tg-box">
                                                    @foreach($itinerary as $item)
                                                    <div class="tg-accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="tg-panel">
                                                            <h4>Day {{$item->day}}<span>{{$item->title}}</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>{{$item->description}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endforeach
                                                </div>
                                            </div>

                                        </div>

                                        <div role="tabpanel" class="tab-pane tg-reviewtab" id="london">
                                            <div class="tg-reviewsarea">
                                                <form class="tg-formtheme tg-formreviews">
                                                    <fieldset class="tg-filterby">
                                                        <div class="tg-durationrating">
                                                            <em>({{count($reviews)}} Review)</em>
                                                        </div>

                                                    </fieldset>
                                                    <fieldset class="tg-reviews">
                                                        <ul>
                                                            @foreach($reviews as $review)
                                                            <li>
                                                                <div class="tg-review">
                                                                    <div class="tg-author">
                                                                        <div class="tg-authorinfo">
                                                                            <h3>{{$review->name}}</h3>
                                                                            <span>{{$review->last_name}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tg-reviewcontent">
                                                                        <div class="tg-reviewhead">
                                                                            <span class="tg-tourduration">{{$review->created_at->diffForHumans()}}</span>

                                                                        </div>
                                                                        <div class="tg-description">
                                                                            <p>
                                                                                {{$review->comment}}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                                @endforeach

                                                        </ul>
                                                    </fieldset>
                                                    <fieldset class="tg-formleavereview">
                                                        <div class="tg-leavereviewhead">
                                                            <h2>Leave your Comment</h2>
                                                        </div>
                                                        <div class="tg-reviewformarea">
                                                            <div class="form-group">
                                                                <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea placeholder="">Your Comment</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <a class="tg-btn" href="#"><span>submit</span></a>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane tg-gallerytab" id="india">
                                            <div class="tg-gallery">
                                                <ul>
                                                    @foreach($galleries as $image)
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/{{$image->image_name}}.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/{{$image->image_name}}.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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