@extends('layout.master')


@section('content')
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

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                @yield('corporate_master')

                <div class="sidebar-side col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="services-cat">
                                @foreach($corporates as $corporate)
                                    <li><a href="{{route('corporate_detail', ['slug' => $corporate->slug])}}">{{$corporate->title}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="sidebar-widget brochure-widget">
                            <h3>Sabit Dosyalar</h3>
                            @foreach($files as $file)
                                <div class="link-box">
                                    <span class="icon fa fa-file-o"></span>
                                    <h5>{{$file->name}}</h5>
                                    <a href="{{ Voyager::image(json_decode($file->file)[0]->download_link) }}">İndir </a>
                                </div>
                            @endforeach
                        </div>

                        @if(count($testimonials) > 0)
                            <div class="sidebar-widget testimonials-widget">
                                <h3>Müşteri Yorumları</h3>
                                <div class="testimonial-carousel owl-carousel owl-theme">

                                    @foreach($testimonials as $testimonial)
                                        <div class="testimonial-block-three">
                                            <div class="info">
                                                <div class="thumb"><img src="{{Voyager::image($testimonial->logo)}}" alt=""></div>
                                                <h5 class="name">{{$testimonial->name}}</h5>
                                                <span class="city">{{$testimonial->city}}</span>
                                            </div>
                                            <div class="text">{{$testimonial->testimonial}}</div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                    </aside>
                </div>
            </div>
        </div>
    </div>

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