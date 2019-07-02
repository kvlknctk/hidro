@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/iletisim.jpg')}})">
        <div class="auto-container">
            <h1>{{trans('seo.titles.contact')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.contact')}}</li>
            </ul>
        </div>
    </section>

    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-md-4 col-sm-6 col-xs-12 ">
                    <div class="branch-info-box">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{Voyager::image(setting('iletisim.resim'))}}" alt=""></a></div>
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

                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Bize Mesaj Yazın</h2>
                            <div class="text">Görüşlerinizi ya da firmamıza sormanız gereken soruları aşağıdaki formu kullanarak gönderebilirsiniz. Gerekli görüldüğü takdirde anında geridönüş yapılacaktır. </div>
                        </div>
                        <div class="contact-form style-three">
                            <form method="post" action="{{route('contact_post')}}" >
                                @csrf
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
                                            <label>GSM</label>
                                            <input type="text" name="gsm" value="" placeholder="GSM" required>
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

    <section class="contact-map-section">
        <div class="map-outer">
            <div class="map-canvas"
                 data-zoom="18"
                 data-lat="{{setting('iletisim.lat')}}"
                 data-lng="{{setting('iletisim.lng')}}"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="Tam Buradayız"
                 data-icon-path="images/icons/map-marker-2.png"
                 data-content="{{setting('iletisim.adres')}}<br><a href='{{setting('iletisim.navigasyon')}}' target='_blank'>Navigasyonda İncele</a>">
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCj7YdcrPpAro1x0fxNEf5f2X_c7ZywrGc"></script>
    <script src="{{asset('js/map-script.js')}}"></script>

@endpush