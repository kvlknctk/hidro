@extends('layout.master')



@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <h1>{{trans('seo.titles.services')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.services')}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <section class="services-page-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Hizmetlerimiz</h2>
            </div>

            <div class="row clearfix">

                @foreach($services as $service)
                    <!-- Services Block -->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure><img src="{{Voyager::image($service->thumbnail('thumb'))}}" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="btn-box">
                                            <a href="{{route('service_detail', ['slug' => $service->slug ])}}"><i class="icon arrow-top-right"></i>Detay</a>
                                        </div>
                                    </div>
                                    <div class="title"><h3><a href="{{route('service_detail', ['slug' => $service->slug ])}}">{{$service->title}}</a></h3> <i class="icon flaticon-user-1"></i></div>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        {!! Str::limit($service->description, 150) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


            </div>
        </div>
    </section>


@endsection


@push('scripts')


@endpush