@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{SEOMeta::getTitleSession()}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.works')}}</li>

                @if(is_active(['calisma/*']))
                    <li>{{SEOMeta::getTitleSession()}}</li>
                @endif
            </ul>
        </div>
    </section>

    <section class="project-single-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="upper-box">
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <div class="slide">
                            <div class="image">
                                <img src="{{Voyager::image($work->image)}}" alt="{{$work->title}}" />
                            </div>
                        </div>


                    </div>
                </div>

                <h2 class="title">{{$work->title}}</h2>
                <div class="row clearfix">

                    <div class="content-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="text">
                                {!! $work->description !!}
                            </div>
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul>
                                <li><span>{{trans('seo.products.category')}} : </span>Çalışmalar</li>
                                <li><span>{{trans('seo.products.date')}} : </span>{{$work->created_at->diffForHumans()}}</li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



@endsection
