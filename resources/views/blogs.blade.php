@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{trans('seo.titles.services')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.blogs')}}</li>
            </ul>
        </div>
    </section>

    <section class="news-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- News Block -->

                @foreach($blogs as $blog)

                    <div class="news-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">
                                    <img src="{{Voyager::image($blog->getThumbnail($blog->image, 'cropped'))}}" alt=""></a>
                            </div>
                            <div class="lower-content clearfix">
                                <div class="info">
                                    <ul>
                                        <li><a href="{{route('blogs')}}">Blog Yazıları</a>, </li>
                                        <li><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">{{$blog->created_at->diffForHumans()}}</a></li>
                                    </ul>
                                </div>
                                <h3><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h3>

                                <div class="text">{!! Str::limit($blog->description, 150) !!}</div>
                                <div class="more-box clearfix">
                                    <div class="link-box"><a href="{{route('blog_detail', ['slug' => $blog->slug])}}">Detay</a> <span class="icon icon-aroow-right"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    <li class="prev"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>



@endsection
