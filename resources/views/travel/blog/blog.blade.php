@extends("layout.app")
@section('title', 'Travelu | Our Blog')

@section('body')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>Latest News</h1>
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
        <div class="container-fluid">
            <div class="row">
                <div class="tg-posts tg-blogposts">
                  @foreach($posts as $post)
                    <article class="tg-post tg-verticaltop">
                        <figure><a href="{{'/blog/'.$post->id}}"><img src="images/{{$post->image}}" alt="image description"></a></figure>
                        <div class="tg-postcontent">
                            <div class="tg-postcontenthead">
                                <time class="tg-date" datetime="2017-06-12">{{$post->created_at->diffForHumans()}}</time>
                            </div>
                            <div class="tg-posttitle">
                                <h2><a href="{{'/blog/'.$post->id}}">{{$post->title}}</a></h2>
                            </div>
                            <div class="tg-description">
                                <p>{{$post->short_description}}</p>
                            </div>
                            <a class="tg-btnreadmore" href="{{'/blog/'.$post->id}}">Read More</a>
                        </div>
                    </article>
                    @endforeach
                    <nav class="tg-pagination">
                        <ul>
                            <li class="tg-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
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
    </main>
    <!--************************************
            Main End
    *************************************-->
    @endsection