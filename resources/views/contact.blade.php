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

    <!-- Contact Section three -->
    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-md-4 col-sm-6 col-xs-12 ">
                    <div class="branch-info-box">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="images/resource/branch-3.jpg" alt=""></a></div>
                        </div>
                        <div class="lower-content">
                            <ul>
                                <li>
                                    <span class="icon flaticon-place"></span>
                                    <h5>Big Smart Str, 2nd Cross</h5>
                                    <p>Newyork, USA 1002.</p>
                                </li>

                                <li>
                                    <span class="icon flaticon-support"></span>
                                    <h5>Call Us On</h5>
                                    <p><a href="#">1-800-784-533 & 544</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-plane"></span>
                                    <h5>Mail Us at</h5>
                                    <p><a href="#">Machinery@Support.com</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-watch"></span>
                                    <h5>Working Hours</h5>
                                    <p>Mon-Satday: 09.00am to 10.00pm</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Send Message Us</h2>
                            <div class="text">We have 74 branches in US and 145 branches in world wide, you can reach any branch at your desk,our experts will help you 24/7.</div>
                        </div>
                        <!--Contact Form-->
                        <div class="contact-form style-three">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="username" value="" placeholder="Your Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="" placeholder="Email Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group border-left">
                                            <label>Massage</label>
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                    </div>
                                    <div class="column col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section three -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="12"
                 data-lat="-37.817085"
                 data-lng="144.955631"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="Envato"
                 data-icon-path="images/icons/map-marker-2.png"
                 data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Contact Map Section -->

@endsection


@push('scripts')
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{asset('js/map-script.js')}}"></script>

@endpush