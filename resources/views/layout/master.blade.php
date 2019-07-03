<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    {!! SEO::generate() !!}

    <!-- Stil dosyları -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!--Ikonlar-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Mobil Uyumluluk -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Yukleyici -->
    <div class="preloader"></div>

    <!-- Ana Başlık-->
    <header class="main-header hidropar">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><i class="icon flaticon-clock-circular-outline"></i> Pzt - Cmt: 09:00 - 18:00 </li>
                            <li class="social-links"><span>Sosyal Ağlar :</span>

                                @if(setting('sosyal-medya.instagram'))
                                    <a href="{{setting('sosyal-medya.instagram')}}"><i class="fa fa-instagram"></i></a>
                                @endif

                                @if(setting('sosyal-medya.youtube'))
                                    <a href="{{setting('sosyal-medya.youtube')}}"><i class="fa fa-youtube"></i></a>
                                @endif

                                @if(setting('sosyal-medya.facebook'))
                                    <a href="{{setting('sosyal-medya.facebook')}}"><i class="fa fa-facebook-f"></i></a>
                                @endif
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>--}}
                            </li>
                        </ul>

                    </div>
                    <div class="top-right clearfix">
{{--
                        <div class="buy-now"><a href="#">Buy Now</a></div>
--}}
                        <div class="language dropdownn">
                            <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon flaticon-globe"></span> Hızlı Erişim <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Servis Destek Talebi</a></li>
                                <li><a href="#">İnsan Kaynakları </a></li>
                                <li><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="{{route('index')}}"><img src="{{asset('img/hidropar_logo.svg')}}" width="240" alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="machinery-icon-map"></span></div>
                            <ul>
                                <li>{{setting('iletisim.adres')}}</li>
                                <li><strong>{{setting('iletisim.sehir')}}</strong></li>
                            </ul>
                        </div>

                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="machinery-icon-contact"></span></div>
                            <ul>
                                <li>{{setting('iletisim.tel1')}}</li>
                                <li><strong>{{setting('iletisim.mail')}}</strong></li>
                            </ul>
                        </div>

                       {{-- <!--social Box-->
                        <div class="upper-column info-box">
                            <div class="social-icons">

                                @if(setting('sosyal-medya.instagram'))
                                    <a href="{{setting('sosyal-medya.instagram')}}"><i class="fa fa-instagram"></i></a>
                                @endif

                                @if(setting('sosyal-medya.youtube'))
                                    <a href="{{setting('sosyal-medya.youtube')}}"><i class="fa fa-youtube"></i></a>
                                @endif

                                @if(setting('sosyal-medya.facebook'))
                                    <a href="{{setting('sosyal-medya.facebook')}}"><i class="fa fa-facebook-f"></i></a>
                                @endif

                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                               @include('parts.menu')
                            </ul>
                        </div>
                    </nav>

                    <div class="search-box">
                        <div class="dropdown dropdown-outer">

                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="{{route('search_post')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="search" name="keyword" value="" placeholder="Arama Alanı" required="">
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="outer-box">
                        <div class="link-box"><a href="{{route('contact')}}" class="theme-btn btn-style-one">Ulaşım</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="logo pull-left">
                    <a href="{{route('index')}}" class="img-responsive"><img src="{{asset('img/hidropar_logo.svg')}}" width="160" alt="" title=""></a>
                </div>
                <div class="right-col pull-right">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                               @include('parts.menu')


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="main-footer padding-top">
        <div class="auto-container">
            <div class="widgets-section">
                <div class="row clearfix">
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="logo"><a href="{{route('index')}}"><img src="{{asset('img/hidropar_logo_beyaz.svg')}}" width="240" alt="Hidropar Footer Logo"></a></div>
                        <div class="footer-widget subscribe-widget">
                            <div class="widget-content">
                                <div class="text">
                                    {{--<h4>Let’s join & create something together</h4>--}}
                                    <p>
                                        {{setting('sabit-yazilar.hakkimizda')}}
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Faydalı bağlantılar bölümü -->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title"><h2>Faydalı Bağlantılar</h2></div>
                            <div class="widget-content">
                                <ul class="list clearfix">

                                    @foreach($links as $link)
                                        <li><a href="{{$link->link}}">{{$link->title}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Kolunu-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-telephone"></i>
                                </div>
                                <div class="text-box">
                                    <h3>Müşteri Hizmetleri:</h3>
                                    <span>{{setting('iletisim.tel1')}}</span>
                                    <p>{{setting('iletisim.tel2')}}</p>
                                </div>
                            </div>
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-map"></i>
                                </div>
                                <div class="text-box">
                                    <p>
                                        {{setting('iletisim.adres')}} <br>
                                        {{setting('iletisim.sehir')}}
                                    </p>
                                </div>
                            </div>
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-send"></i>
                                </div>
                                <div class="text-box">
                                    <p>{{setting('iletisim.mail')}}</p>
                                    <p>{{setting('iletisim.satis_email')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Alanı-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-left">
                        <div class="copyright-text">{{date('Y')}} &copy; All Rights Reserved by Hidropar Eskişehir.</div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <a href="https://partum.com.tr" target="_blank">
                            <img src="{{asset('img/partum.png')}}" width="85" alt="Partum Yazılım">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>


<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>
@stack('scripts_orta')
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@stack('scripts')

</body>
</html>