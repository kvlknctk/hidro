@extends('layout.master')


@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <h1>{{trans('seo.titles.corporate')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.corporate')}}</li>
            </ul>
            <br>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                @yield('corporate_master')

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="services-cat">
                                @foreach($corporates as $corporate)
                                    <li><a href="{{route('corporate_detail', ['slug' => $corporate->slug])}}">{{$corporate->title}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <!--Brochure-->
                        <div class="sidebar-widget brochure-widget">
                            <h3>Our Brochures</h3>
                            <div class="link-box">
                                <span class="icon fa fa-file-pdf-o"></span>
                                <h5>Service Overview</h5>
                                <a href="#">Download.pdf</a>
                            </div>
                            <div class="link-box">
                                <span class="icon fa fa-file-word-o"></span>
                                <h5>About Our Company</h5>
                                <a href="#">Download.txt</a>
                            </div>
                        </div>

                        <!--Contact Widhet-->
                        <div class="sidebar-widget testimonials-widget">
                            <h3>Testimonials</h3>
                            <div class="testimonial-carousel owl-carousel owl-theme">
                                <div class="testimonial-block-three">
                                    <div class="info">
                                        <div class="thumb"><img src="{{asset('images/resource/thumb-12.jpg')}}" alt=""></div>
                                        <h5 class="name">Teena Venanda</h5>
                                        <span class="city">Newyork</span>
                                    </div>
                                    <div class="text">Must explain too you how that mistaken idea denoncing sed all pleasure & praising pain was and will give all actual human .</div>
                                </div>

                                <div class="testimonial-block-three">
                                    <div class="info">
                                        <div class="thumb"><img src="{{asset('images/resource/thumb-12.jpg')}}" alt=""></div>
                                        <h5 class="name">Teena Venanda</h5>
                                        <span class="city">Newyork</span>
                                    </div>
                                    <div class="text">Must explain too you how that mistaken idea denoncing sed all pleasure & praising pain was and will give all actual human .</div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    <!-- Contact Section -->
    <section class="contact-section style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="title-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Bize soru sorabilirsiniz</h2>
                        </div>
                        <div class="text">Firmamız hakkında bilgi almak için bizimle iletişime geçebilir dilediğiniz soruları sorabilirsiniz. .</div>
                        <div class="link-box"><a href="{{route('contact')}}"><i class="fa fa-hand-o-right"></i> İletişim</a></div>
                    </div>
                </div>


                <div class="form-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">İletişim formunu kullanarak bizimle doğrudan iletişime geçebilirsiniz. İhtiyaç görüldüğü takdirde sizinle iletişime geçilecektir. </div>

                        <div class="contact-form">
                            <form method="post" action="index-2.html">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="username" value="" placeholder="İsim" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="E-Posta " required>
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Servis 1</option>
                                                <option>Servis 2</option>
                                                <option>Servis 3</option>
                                                <option>Servis 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Mesajınız"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="theme-btn">Ekle</button>
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

@endsection


@push('scripts')


@endpush