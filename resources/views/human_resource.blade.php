@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/iletisim.jpg')}})">
        <div class="auto-container">
            <h1>İnsan Kaynakları</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>İnsan Kaynakları</li>
            </ul>
        </div>
    </section>

    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">


                <div class="form-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>İnsan Kaynakları</h2>
                            <div class="text">
                                Dev kadromuzda sizi de görmek isteriz, eğer bizimle çalışmak isterseniz lütfen bilgilerinizi gönderin.
                                <br> Sizin için açık pozisyonumuz olduğunda geridönüş yapacağız.
                            </div>
                        </div>
                        <div class="contact-form style-three">
                            <form method="post" action="{{route('human_resources_post')}}" >
                                @csrf
                                <div class="row clearfix">
                                    <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>İsim</label>
                                            <input type="text" name="name" value="" placeholder="İsminiz" required>
                                        </div>

                                        <div class="form-group">
                                            <label>E-Posta</label>
                                            <input type="email" name="mail" value="" placeholder="E-Posta" required>
                                        </div>

                                        <div class="form-group">
                                            <label>GSM</label>
                                            <input type="text" name="gsm" value="" placeholder="GSM" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Şehir</label>
                                            <input type="text" name="city" value="" placeholder="Şehir" required>
                                        </div>

                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">




                                        <div class="form-group border-left">
                                            <label>CV Dosyanız (yalnızca pdf)</label>
                                            <input type="file" name="cv" required placeholder="Mesajınız...">
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