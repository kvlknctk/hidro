@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/iletisim.jpg')}})">
        <div class="auto-container">
            <h1>Servis Destek</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>Servis Destek</li>
            </ul>
        </div>
    </section>

    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="form-column col-md-12 col-sm-12 col-xs-12">

                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Servis Destek</h2>
                            <div class="text">

                                Yaşadığınız problemi belirterek formu göndermeniz iletişim için yeterli olacaktır.

                            </div>
                        </div>
                        <div class="contact-form style-three">
                            <form method="post" action="{{route('servis_destek_post')}}" >
                                @csrf
                                <div class="row clearfix">
                                    <div class="left-column col-md-12 col-sm-12 col-xs-12">

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Ürün Marka</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="product_company">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Ürün Model</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="product_name">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Seri No</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="product_sn">
                                            </div>
                                        </div>

                                        <h3 class="col-md-6 col-md-offset-4">ARIZA DETAYLARI</h3>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Arıza Açıklaması</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control  c-square c-theme" name="problem_desc"></textarea>
                                            </div>
                                        </div>

                                        <h3 class="col-md-6 col-md-offset-4">İLETİŞİM BİLGİLERİ</h3>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Kurum Adı</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="musteri_kurum_adi">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">İlgili Kişi</label>
                                            <div class="col-md-6">
                                                <input class="form-control  c-square c-theme" name="ilgili_kisi">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Birim</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="ilgili_birim">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Adres</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control c-square c-theme" name="ilgili_adres"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">İl / İlçe</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="il_ilce" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Telefon No</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="telefon_no" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gsm No</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control  c-square c-theme" name="gsm_no" placeholder="ÖR:55599988XX">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4"> </div>
                                            <div class="col-md-6">
                                                <div data-sitekey="6Lecg54UAAAAAKGsvs5TuURZ5jy9baANOGKJN2yR" class="g-recaptcha"></div>

                                            </div>
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