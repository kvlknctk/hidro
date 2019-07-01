@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{trans('seo.titles.services')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.services')}}</li>
            </ul>
        </div>
    </section>

    <section class="news-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- News Block -->

                @foreach($blogs as $blog)

                    <div class="news-block col-md-4 col-sm-6 col-xs-12">
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
                                        <span class="author-name">Thomas Mersinger</span>
                                    </div><!-- /.author-box -->
                                    <div class="link-box"><a href="blog-single.html">Read More</a> <span class="icon icon-aroow-right"></span></div>
                                </div><!-- /.more-box -->
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    <li class="prev"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>



@endsection
