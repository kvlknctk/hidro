@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{SEOMeta::getTitleSession()}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.services')}}</li>

                @if(is_active(['hizmetler/*']))
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
                                <img src="{{Voyager::image($service->image)}}" alt="{{$service->title}}" />
                            </div>
                        </div>


                    </div>
                </div>

                <h2 class="title">{{$service->title}}</h2>
                <div class="row clearfix">

                    <div class="content-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="text">
                                {!! $service->description !!}
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
                                <li><span>{{trans('seo.products.date')}} : </span>{{$service->created_at->diffForHumans()}}</li>
                               {{-- <li><span>Rating </span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-empty"></span>
                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>

               {{-- <div class="load-more-option">
                    <ul class="clearfix">
                        <li class="prev pull-left"><a href="#"><span class="fa fa-angle-left"></span> Prev</a></li>
                        <li class="load-more"><a href="#"><span class="fa fa-th"></span></a></li>
                        <li class="next pull-right"><a href="#">Next <span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>--}}

            </div>
        </div>
    </section>



@endsection


@push('scripts')


@endpush