<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {!! SEO::generate() !!}

    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header style-two ">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix top-menu">
                            <li><a href="#">Haberler</a></li>
                            <li><a href="#">İnsan </a></li>
                            <li><a href="#">ol</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="clearfix right-info">
                            <li><i class="icon flaticon-clock-circular-outline"></i> Mon - Fri: 09:00 - 18:00 </li>
                        </ul>
                        <div class="language dropdownn">
                            <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon flaticon-globe"></span> California <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                <li><a href="#">California</a></li>
                                <li><a href="#">Washington</a></li>
                                <li><a href="#">Bristol</a></li>
                                <li><a href="#">Georgetown</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="{{route('index')}}"><img src="{{asset('img/hidropar_logo.png')}}" alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="machinery-icon-map"></span></div>
                            <ul>
                                <li>13, Big Smart Str, 2nd Cross</li>
                                <li><strong>Newyork, USA 1002.</strong></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="machinery-icon-contact"></span></div>
                            <ul>
                                <li>1-800-784-533 & 544</li>
                                <li><strong>Machinery@Support.com</strong></li>
                            </ul>
                        </div>

                        <!--social Box-->
                        <div class="upper-column info-box">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook-f"></i></a><!--
                                --><a href="#"><i class="fa fa-twitter"></i></a><!--
                                --><a href="#"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-icons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                {{--<li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                    </ul>
                                </li>--}}

                                <li><a href="{{route('index')}}">Anasayfa</a></li>
                                <li><a href="{{route('services')}}">Hizmetler</a></li>
                                <li><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!--Search Box-->
                    <div class="search-box">
                        <div class="dropdown dropdown-outer">
                            <a href="shoping-cart.html" class="cart-btn"><i class="machinery-icon-null"></i><span class="count">0</span></a><!--
                            --><button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Outer Box-->
                    <div class="outer-box">
                        <div class="link-box"><a href="contact.html" class="theme-btn btn-style-one">Get a Quote</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{asset('images/logo-small.png')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About Company</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="faqs.html">FAQ’s</a></li>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Market Sectors</a>
                                    <ul>
                                        <li><a href="market-sector.html">Market Sectors</a></li><li><a href="market-sector-single.html">Construction Products</a></li>
                                        <li><a href="aero-space-services.html">Aero Space Services</a></li>
                                        <li><a href="railway-infrastructure.html">Railway Infrastructure</a></li>
                                        <li><a href="ship-building-industry.html">Ship Building Industry</a></li>
                                        <li><a href="power-and-energy.html">Power and Energy</a></li>
                                        <li><a href="automative-system.html">Automative System</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="projects.html">Projects Default</a></li>
                                        <li><a href="projects-with-filter.html">Projects With Filter</a></li>
                                        <li><a href="projects-modern.html">Projects Modern</a></li>
                                        <li><a href="projects-single.html">Single Project</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                        <li><a href="blog-single.html">Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop Products</a></li>
                                        <li><a href="shop-single.html">Product Single</a></li>
                                        <li><a href="shoping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact Us</a>
                                    <ul>
                                        <li><a href="contact.html">Contact us 01</a></li>
                                        <li><a href="contact-2.html">Contact us 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer padding-top">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
                        <div class="footer-widget subscribe-widget">
                            <div class="widget-content">
                                <div class="text">
                                    <h4>Let’s join & create something together</h4>
                                    <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you completed.</p>
                                    <form class="subscribe-form">
                                        <input type="text" name="email" placeholder="Enter your email address...">
                                        <button type="submit"><i class="machinery-icon-next"></i>Subscribe Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title"><h2>Usefull Links</h2></div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="about.html">About Company</a></li>
                                    <li><a href="market-sector.html">Our Services</a></li>
                                    <li><a href="projects.html">Latest Projects</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="market-sector-single.html">Why Choose Us</a></li>
                                    <li><a href="shop.html">Shop Products</a></li>
                                    <li><a href="contact.html">Get a Quote</a></li>
                                    <li><a href="about.html">Site Map</a></li>
                                    <li><a href="blog.html">Latest From Blog</a></li>
                                    <li><a href="faqs.html">FAQ’s</a></li>
                                    <li><a href="contact-2.html">Contact Us</a></li>
                                    <li><a href="faqs.html">Private Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-telephone"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>For Business Dealing:</h3>
                                    <span>888-000-1234</span>
                                    <p>Available 9:00 - 7:00 all days.</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-map"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <p>Big Smart Stareet, 2nd Cross <br> Newyork, USA 1002.</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-send"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>Mail Us at</h3>
                                    <p>Machinery@support.com</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-left">
                        <div class="copyright-text">{{date('Y')}} &copy; All Rights Reserved by Hidropar Eskişehir.</div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <a href="https://eruzay.com.tr">
                            <img src="{{asset('img/eruzay.png')}}" width="85" alt="Eruzay Yazılım">
                        </a>
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>