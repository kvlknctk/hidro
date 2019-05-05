@extends('layout.master')




@section('content')

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            @php $first = 1; @endphp
            @foreach($sliders as $slider)
                <div class="item @if($first == 1) active @endif slide-{{$slider->id}}"
                     style="background-image: url({{asset(Voyager::image($slider->image))}});background-position: center center;">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="box valign-middle">
                                <div class="content">
                                    <div class="main-banner-content" data-animation="animated fadeInUp">
                                        <h3 class="title">Hidropar Eskişehir</h3>
                                        <h1>{{$slider->title}}</h1>
                                        <p class="text">{!! $slider->description !!}</p>
                                        <a href="#" class="theme-btn btn-style-one">Read More</a>
                                        <a href="#" class="theme-btn btn-style-two">Market Sectors</a>
                                    </div><!-- /.main-banner-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $first++; @endphp

            @endforeach


        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
        </ul>
    </div>


    <!-- Highlights -->
    <div class="highlights dark-bg">
        <div class="auto-container">
            <div class="highlight-carousel owl-carousel owl-theme">
                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>

                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>

                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Highlights -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4>Our Services</h4>
                <h2>Our Market Sectors</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Construction Products</h3> <i class="icon flaticon-user-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Aero Space Services</h3> <i class="icon flaticon-departures-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
              {{--  <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Railway Infrastructure</h3> <i class="icon flaticon-railway-1"></i></div>
                        </div>
                    </div>
                </div>--}}


                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Construction Products</h3> <i class="icon flaticon-user-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Aero Space Services</h3> <i class="icon flaticon-departures-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Railway Infrastructure</h3> <i class="icon flaticon-railway-1"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- info box -->
            <div class="info-box">
                <h3>Since 1964, We provide best solutions for our valuable customers.</h3>
                <a href="#"><i class="icon flaticon-email"></i>Getaquote@Machinery.com</a>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- What We Do -->
    <section class="what-we-do">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content -->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h4>Fun facts</h4>
                            <h2>What We Achived?</h2>
                            <h5>Strength and growth comes only through continuous effort & struggle.</h5>
                        </div>

                        <div class="info-box clearfix">
                            <span class="icon machinery-icon-worldwide"></span>
                            <span class="count">148 <span class="plus">+</span></span>
                            <span class="title"><span>Branches Worldwide</span></span>
                        </div>

                        <div class="text">Over 148+ branches  indignation & dislike men who beguiled demoralized <br> by the charms of pleasure of the moment, so blinded by desire, that they <br> cannot foresee the pain and over all trouble.</div>
                        <a href="#" class="more-btn"><i class="machinery-icon-next"></i> Locate Our Branches</a>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <figure class="image"><img src="images/resource/video-img.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play-circle"></span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End What We Do -->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h4>Company</h4>
                        <h2>About Our Company</h2>
                    </div>
                    <div class="about-company">
                        <h4>We are leading manufacturing company in european <br> countries, serving sice 1964.</h4>
                        <div class="info-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#info-tab-1" class="tab-btn active-btn">About Company</li>
                                <li data-tab="#info-tab-2" class="tab-btn ">Our Mission</li>
                                <li data-tab="#info-tab-3" class="tab-btn ">Our Vission</li>
                            </ul>

                            <div class="tabs-content">
                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="info-tab-1">
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">Built enviable reputation in consumer goods, heavy industry, high tech, manufacturing, medical, vehicle  our  works sectors multi disciplinary team of engineering & experts, who  pursues desires.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="info-tab-2">
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">Built enviable reputation in consumer goods, heavy industry, high tech, manufacturing, medical, vehicle  our  works sectors multi disciplinary team of engineering & experts, who  pursues desires.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="info-tab-3">
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">Built enviable reputation in consumer goods, heavy industry, high tech, manufacturing, medical, vehicle  our  works sectors multi disciplinary team of engineering & experts, who  pursues desires.</div>
                                </div>
                            </div>
                        </div>
                        <div class="link-box"><a href="market-sector-single.html"><i class="machinery-icon-next"></i> Read More</a></div>
                    </div>
                </div>

                <!-- List Column -->
                <div class="list-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-gear"></span>
                                <h4><a href="market-sector.html">Smart Technology</a></h4>
                                <div class="text">Encounter consequences that are extremely our painful again is there desires.</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-clock"></span>
                                <h4><a href="market-sector.html">Punctual Delivery Time</a></h4>
                                <div class="text">To take trivial example, which of us ever physical except to obtain some advantage.</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-worker"></span>
                                <h4><a href="market-sector.html">Team of Professionals</a></h4>
                                <div class="text">Any right to find fault with a man who chooses to enjoy a pleasure that has no annoying..</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Project Section -->
    <section class="project-section" style="background-image: url({{asset('images/background/1.jpg')}});">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h4>Our Works</h4>
                <h2>Latest Projects</h2>
            </div>

            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="project-carousel owl-carousel owl-theme">
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-1.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-1.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Rail Engine Manufacture</a></h3>
                                <span class="tag">Engineering</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-2.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-2.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Rail Engine Manufacture</a></h3>
                                <span class="tag">Construction</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-3.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-3.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Generate Natural Power</a></h3>
                                <span class="tag">Power & Energy</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-1.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-1.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Rail Engine Manufacture</a></h3>
                                <span class="tag">Engineering</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-2.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-2.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Rail Engine Manufacture</a></h3>
                                <span class="tag">Construction</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="images/resource/project-3.jpg" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-3.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="projects-single.html">Generate Natural Power</a></h3>
                                <span class="tag">Power & Energy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section -->





    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-md-4">
                        <h4>News & Updates</h4>
                        <h2>Latest From Blog</h2>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-5">
                        <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.</div><!-- /.text -->
                    </div><!-- /.col-md-5 -->
                    <div class="col-md-3 text-right">
                        <a href="blog-large-image.html" class="theme-btn btn-style-one">More News</a>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.sec-title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="lower-content clearfix">
                                <div class="info">
                                    <ul>
                                        <li><a href="#">Construction</a>, </li>
                                        <li><a href="#">June 06, 2019</a></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-single.html">We are best for any industrial & business solution.</a></h3>

                                <div class="text">Rationally encounter consequences seds ut that are extremely painful and when to do what we like beat circumtances and owing...</div>
                                <div class="more-box clearfix">
                                    <div class="author-box">
                                        <img src="images/testimonials/1.png" alt="Awesome Image"/>
                                        <span class="author-name">Divina Bulls</span>
                                    </div><!-- /.author-box -->
                                    <div class="link-box"><a href="blog-single.html">Read More</a> <span class="icon icon-aroow-right"></span></div>
                                </div><!-- /.more-box -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single.html"><img src="images/resource/news-2.jpg" alt=""></a></div>
                            <div class="lower-content clearfix">
                                <div class="info">
                                    <ul>
                                        <li><a href="#">Manufacturing</a>, </li>
                                        <li><a href="#">June 06, 2019</a></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-single.html">10 reason why should choose our industry.</a></h3>

                                <div class="text">How all this mistaken idea denoncing praising pain was born and we will gives you a completed teachings great explorer the truth... </div>
                                <div class="more-box clearfix">
                                    <div class="author-box">
                                        <img src="images/testimonials/2.png" alt="Awesome Image"/>
                                        <span class="author-name">Emilio Kemmer</span>
                                    </div><!-- /.author-box -->
                                    <div class="link-box"><a href="blog-single.html">Read More</a> <span class="icon icon-aroow-right"></span></div>
                                </div><!-- /.more-box -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box"><a href="blog-single.html"><img src="images/resource/news-3.jpg" alt=""></a></div>
                            <div class="lower-content clearfix">
                                <div class="info">
                                    <ul>
                                        <li><a href="#">Technology</a>, </li>
                                        <li><a href="#">June 06, 2019</a></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-single.html">We won best factory award of the year 2015 & 16.</a></h3>

                                <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur which toil and pain can procure...</div>
                                <div class="more-box clearfix">
                                    <div class="author-box">
                                        <img src="images/testimonials/3.png" alt="Awesome Image"/>
                                        <span class="author-name">Christin Serrell</span>
                                    </div><!-- /.author-box -->
                                    <div class="link-box"><a href="blog-single.html">Read More</a> <span class="icon icon-aroow-right"></span></div>
                                </div><!-- /.more-box -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div>
    </section>
    <!--End News Section -->


    <section class="client-carousel-wrapper">
        <div class="auto-container">
            <div class="clients-carousel owl-theme owl-carousel">
                <div class="item">
                    <img src="images/clients/1-1.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-2.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-3.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-4.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-1.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-2.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-3.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-4.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-1.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-2.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-3.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-4.png" alt="Awesome Image"/>
                </div><!-- /.item -->
            </div><!-- /.clien-carousel -->
        </div><!-- /.auto-container -->
    </section><!-- /.client-carousel-wrapper -->

@endsection