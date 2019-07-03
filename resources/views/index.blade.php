@extends('layout.master')

@section('content')

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">

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
                                        <h3 class="title">{{setting('site.company_name')}}</h3>
                                        <h1>{{$slider->title}}</h1>
                                        <p class="text">{!! $slider->description !!}</p>
                                        @if($slider->link)
                                            <a href="{{$slider->link}}" class="theme-btn btn-style-one">Detay</a>
                                        @endif
                                        {{--<a href="#" class="theme-btn btn-style-two">Market Sectors</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $first++; @endphp

            @endforeach

        </div>
        <!-- Navigasyon Kontrol -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Önceki</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Sonraki</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
        </ul>
    </div>

    <!-- Siyah Bar  -->
    <div class="highlights dark-bg">
        <div class="auto-container">
            <div class="highlight-carousel owl-carousel owl-theme">

                @foreach($announcements as $announcement)

                    <div class="highlight-block">
                        <div class="inner-box">
                            <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                            <div class="text">
                                {{$announcement->body}}
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

    <!-- Hizmetler Bölümü  -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4>{{setting('site.company_name')}}</h4>
                <h2>Hizmetleri</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">

                @foreach($services as $service)
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{Voyager::image($service->thumbnail('thumb'))}}" alt="{{$service->title}}"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="{{route('service_detail', ['slug' => $service->slug])}}"><i class="icon arrow-top-right"></i>Detay</a>
                                    </div>
                                </div>
                                <div class="title"><h3>{{$service->title}}</h3> <i class="icon flaticon-user-1"></i></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>

    <!-- Ne Yapıyoruz Sayfası -->
    <section class="what-we-do">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h4>{{setting('site.company_name')}}</h4>
                            <h2></h2>
                            <h5>Bugüne kadar büyük bir titizlikle yaptığımız çalışmalar sayesinde...</h5>
                        </div>

                        <div class="info-box clearfix">
                            <span class="icon machinery-icon-worldwide"></span>
                            <span class="count">{{setting('tanitim-modulu.calisma')}} <span class="plus">+</span></span>
                            <span class="title"><span>Firmaya Ulaştık</span></span>
                        </div>

                        <div class="text">
                            Çalışmalarımızda kullandığımız kaliteli ve son teknoloji ürünlerimiz hakkında bilgi alabilir, bu ürünler hakkında soru sorabilirsiniz.
                        </div>
                        <a href="{{route('products')}}" class="more-btn"><i class="machinery-icon-next"></i> Ürünlerimiz</a>
                    </div>
                </div>

                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        @php
                            $video_id = explode("?v=", setting('tanitim-modulu.video'));
                            $video_id = $video_id[1];
                            $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                        @endphp
                        <figure class="image"><img src="{{$thumbnail}}" alt="">
                            <a href="{{setting('tanitim-modulu.video')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play-circle"></span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kurumsal Bölümü -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h4>{{setting('site.company_name')}}</h4>
                        <h2>Kurumsal</h2>
                    </div>
                    <div class="about-company">
                        <h4>{{setting('site.company_name')}} kurumsal çözümleriyle ön sahnede yer alır ve sizin için en iyi seçenekleri sunar.</h4>
                        <div class="info-tabs tabs-box">
                            <ul class="tab-buttons">
                               {{-- <li data-tab="#info-tab-1" class="tab-btn active-btn">About Company</li>
                                <li data-tab="#info-tab-2" class="tab-btn ">Our Mission</li>
                                <li data-tab="#info-tab-3" class="tab-btn ">Our Vission</li>--}}

                                @php $first = 1; @endphp
                                @foreach($corporate as $corp)
                                    <li data-tab="#{{$corp->slug}}" class="tab-btn @if($first == 1) active-btn @endif">{{$corp->title}}</li>
                                    @php $first++; @endphp
                                @endforeach
                            </ul>

                            <div class="tabs-content">

                                @php $first = 1; @endphp
                                @foreach($corporate as $corp)
                                    <div class="tab @if($first == 1) active-tab @endif" id="{{$corp->slug}}">
                                        {{--<h3>{{$corp->title}}</h3>--}}
                                        <div class="text">
                                            {{$corp->short_description}}
                                        </div>
                                    </div>
                                    @php $first++; @endphp
                                @endforeach

                            </div>
                        </div>
                        <div class="link-box"><a href="{{route('corporate')}}"><i class="machinery-icon-next"></i> Daha Fazla</a></div>
                    </div>
                </div>

                <div class="list-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-gear"></span>
                                <h4>Akıllı Teknoloji</h4>
                                <div class="text">Müşterilerimize uzaktan yönetilebilir ve raporlanabilir teknoljiler sunuyoruz.</div>
                            </div>
                        </div>

                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-clock"></span>
                                <h4>Zamanında Teslimat</h4>
                                <div class="text">Belirlenen gün ve saat içerisinde tüm işimizi tamamlamak için büyük bir gayret gösteriyoruz.</div>
                            </div>
                        </div>

                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-worker"></span>
                                <h4>Uzman Kadro</h4>
                                <div class="text">Ekibimiz çok çalışmanın yanında akılcı çözümleri ile kendini öne çıkarıyor..</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Çalışmalar Bölümü  -->
    <section class="project-section" style="background-image: url({{asset('img/poligon-1.jpg')}});">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h4>{{setting('site.company_name')}}</h4>
                <h2>Son Çalışmalarımız</h2>
            </div>

            <div class="carousel-box">
                <div class="project-carousel owl-carousel owl-theme">

                    @foreach($works as $work)
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="{{Voyager::image($work->image)}}" class="ligtbox-image" data-fancybox="gallery"><img src="{{Voyager::image($work->thumbnail('thumb'))}}" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="{{route('work_detail', ['slug' => $work->slug])}}">{{$work->title}}</a></h3>
                                    <span class="tag">Detay >></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Blog yazıları bölümü -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Haberler & Bloglar</h4>
                        <h2>{{setting('site.company_name')}} Yazıları</h2>
                    </div>
                    <div class="col-md-5">
                        <div class="text">Hidropar'ın yayınlamış olduğu duyurular, yazılar ve teknoloji hakkında bir çok makaleye ulaşmak istiyorsanız devam edin. </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{route('blogs')}}" class="theme-btn btn-style-one">Blog Yazıları</a>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="{{route('blog_detail', ['slug' => $blog->slug])}}">
                                        <img src="{{Voyager::image($blog->thumbnail('cropped'))}}" alt="">
                                    </a>
                                </div>
                                <div class="lower-content clearfix">
                                    <div class="info">
                                        <ul>
                                            <li><a href="{{route('blogs')}}">Blog</a>, </li>
                                            <li>{{$blog->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h3>

                                    <div class="text">{!! Str::limit($blog->description, 150) !!}</div>
                                    <div class="more-box clearfix">
                                        <div class="author-box">
                                            {{--<img src="{{Voyager::image($blog->thumbnail('cropped'))}}" alt="{{$blog->title}}"/>--}}
                                            {{--<span class="author-name">Divina Bulls</span>--}}
                                        </div>
                                        <div class="link-box"><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">Devamı</a> <span class="icon icon-aroow-right"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            </div>
        </div>
    </section>


    <section class="client-carousel-wrapper">
        <div class="auto-container">
            <div class="clients-carousel owl-theme owl-carousel">
                @foreach($references as $reference)
                    <div class="item">
                        <img src="{{Voyager::image($reference->image)}}" alt="{{$reference->name}}"/>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection