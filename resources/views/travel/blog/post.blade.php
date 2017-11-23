@extends("layout.app")
@section('title', 'Travelu | Post')

@section('body')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <section class="tg-parallax tg-innerbanner tg-innerbannervtwo"
             data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-08.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-postmaradata">
                            <li>

                            </li>
                            <li>
                                <i class="icon-clock"></i>
                                <span>{{$post->created_at->diffForHumans()}}</span>
                            </li>
                            <li>
                                <i class=" fa fa-commenting-o"></i>
                                <span>{{count($comments)}} Comments</span>
                            </li>
                            <li><a href="#"><i class="icon-share2"></i><span>Share</span></a></li>
                        </ul>
                        <h1>{{$post->title}}</h1>
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
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-blogdetail">
                            <blockquote>
                                <p>{{$post->short_description}}</p>
                            </blockquote>
                            <figure class="tg-blogdetailimg">
                                <img src="/images/{{$post->image}}" alt="image description">
                            </figure>
                        </div>
                    </div>
                            <div class="tg-detailbox">
                                <h3>Text, that where it came from it</h3>
                                <div class="tg-description">
                                    <p>{{$post->description}}</p>
                                </div>
                            </div>
                            <div class="tg-nextprevposts">

                            </div>
                            <div class="tg-comments">
                                <div class="tg-heading tg-headingvtwo">
                                    <h2>{{count($comments)}} Comment</h2>
                                </div>
                                <ul id="tg-comments" class="tg-comments">
                                    @foreach($comments as $comment)
                                    <li>
                                        <div class="tg-comment">

                                            <div class="tg-content">
                                                <div class="tg-commenthead">
                                                    <div class="tg-author">
                                                        <h3>{{$comment->author_name}} {{$comment->author_last_name}}</h3>
                                                        <time datetime="2017-12-12">{{$comment->created_at->diffForHumans()}}</time>
                                                    </div>

                                                </div>
                                                <div class="tg-description">
                                                    {{$comment->comment}}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                        @endforeach
                                </ul>
                            </div>
                            <div class="tg-leaveyourcomment">
                                <div class="tg-heading tg-headingvtwo">
                                    <h2>Leave a Reply</h2>
                                </div>
                                <form class="tg-formtheme tg-formleavecomment">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                <div class="form-group">
                                                    <textarea placeholder="Your Comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                <button class="tg-btn"><span>submit</span></button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
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