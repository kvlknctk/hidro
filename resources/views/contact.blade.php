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
                                    <h5>{{setting('iletisim.adres')}}</h5>
                                    <p>{{setting('iletisim.sehir')}}</p>
                                </li>

                                <li>
                                    <span class="icon flaticon-support"></span>
                                    <h5>Telefonlar</h5>
                                    <p><a href="#">{{setting('iletisim.tel1')}}</a></p>
                                    <p><a href="#">{{setting('iletisim.tel2')}}</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-plane"></span>
                                    <h5>Mail</h5>
                                    <p><a href="#">{{setting('iletisim.mail')}}</a></p>
                                    <p><a href="#">{{setting('iletisim.satis')}}</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-watch"></span>
                                    <h5>Çalışma Saatleri</h5>
                                    <p>Pzt-Cmt: 09.00 - 18.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Bize Mesaj Yazın</h2>
                            <div class="text">Görüşlerinizi ya da firmamıza sormanız gereken soruları aşağıdaki formu kullanarak gönderebilirsiniz. Gerekli görüldüğü takdirde anında geridönüş yapılacaktır. </div>
                        </div>
                        <!--Contact Form-->
                        <div class="contact-form style-three">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>İsim</label>
                                            <input type="text" name="name" value="" placeholder="İsminiz" required>
                                        </div>

                                        <div class="form-group">
                                            <label>E-Posta</label>
                                            <input type="email" name="email" value="" placeholder="E-Posta" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Konu</label>
                                            <input type="text" name="subject" value="" placeholder="Konu" required>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group border-left">
                                            <label>Mesajınız</label>
                                            <textarea name="message" placeholder="Mesajınız..."></textarea>
                                        </div>
                                    </div>
                                    <div class="column col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn">Gönder</button>
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
                 data-title="Tam Buradayız"
                 data-icon-path="images/icons/map-marker-2.png"
                 data-content="{{setting('iletisim.adres')}}<br><a href='mailto:{{setting('iletisim.mail')}}'>{{setting('iletisim.mail')}}</a>">
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