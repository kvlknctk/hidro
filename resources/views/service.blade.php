@extends('layout.master')



@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <h1>{{trans('seo.titles.contact')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.contact')}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <section class="services-page-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Market Sectors</h2>
            </div>

            <div class="row clearfix">

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="market-sector-single.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="market-sector-single.html">Construction Products</a></h3> <i class="icon flaticon-user-1"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Great explore of the truth sed, the master our builder of human happiness give you  complete account of the system...</div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="aero-space-services.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="aero-space-services.html">Aero Space Services</a></h3> <i class="icon flaticon-departures"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Pursues or desires to obtain pain itself, because it pain, but because occasionally circumstances occur procure...</div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="railway-infrastructure.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="railway-infrastructure.html">Railway Infrastructure</a></h3> <i class="icon flaticon-railway-1"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Right to find fault with a man who enjoy pleasure that has no annoying avoids all gain that produces...</div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="ship-building-industry.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="ship-building-industry.html">Ship Building Industry</a></h3> <i class="icon flaticon-cargo"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Pursues or desires to obtain pain itself, because it pain, but because occasionally circumstances occur procure...</div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="power-and-energy.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="power-and-energy.html">Power and Energy</a></h3> <i class="icon flaticon-usb-charger-1"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Right to find fault with a man who enjoy pleasure that has no annoying avoids all gain that produces...</div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/service-6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="automative-system.html"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3><a href="automative-system.html">Automative System</a></h3> <i class="icon flaticon-coffee-machine-1"></i></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Great explore of the truth sed, the master our builder of human happiness give you  complete account of the system...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@push('scripts')


@endpush