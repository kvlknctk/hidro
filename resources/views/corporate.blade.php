@extends('layout.master_corporate')

@section('corporate_master')


    <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
        <div class="services-single">
            <div class="inner-box">
                <div class="sec-title">
                    <h2>{{$corporate->title}}</h2>
                </div>
                <div class="text">
                    {!! $corporate->description !!}
                </div>

                <div class="two-column">
                    <div class="row clearfix">
                        <div class="image-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="image-box"><a href="images/resource/image-3.jpg" data-fancybox="gallery"><img src="{{asset('images/resource/image-3.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="inner-column">

                                <!-- Service Block Two -->
                                <div class="service-block-two">
                                    <div class="inner-box">
                                        <span class="icon flaticon-solar-panel-2"></span>
                                        <h3><a href="#">Solar Energy</a></h3>
                                        <p>There anyone who loves or pursues or desires to obtain pain of itself circumstances.</p>
                                    </div>
                                </div>

                                <!-- Service Block Two -->
                                <div class="service-block-two">
                                    <div class="inner-box">
                                        <span class="icon flaticon-small-wind-mill"></span>
                                        <h3><a href="#">Windmills</a></h3>
                                        <p>Master-builder of human happiness one rejects, dislikes, or avoids pleasure itself.</p>
                                    </div>
                                </div>

                                <!-- Service Block Two -->
                                <div class="service-block-two">
                                    <div class="inner-box">
                                        <span class="icon flaticon-water"></span>
                                        <h3><a href="#">Hydropower</a></h3>
                                        <p>Which of us ever undertakes laborious physical except obtain some advantage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>

@endsection