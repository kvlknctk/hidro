@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{trans('seo.titles.blogs')}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.blogs')}}</li>

                @if(is_active(['blog/*']))
                    <li>{{SEOMeta::getTitleSession()}}</li>
                @endif
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-single padding-right">
                        <div class="inner-box">
                            <div class="top-box clearfix">

                                <div class="text-box">
                                    <ul class="info-list">
                                        <li>
                                            <i class="fa fa-folder-open"></i><a href="{{route('blogs')}}">Blog</a>
                                        </li>

                                    </ul>
                                    <h2>{{$blog->title}}</h2>
                                </div>
                            </div>
                            <div class="image"><img src="{{Voyager::image($blog->image)}}" alt="" />
                            </div>
                            <div class="lower-content clearfix">
                                {!! $blog->description !!}
                            </div>
                        </div>



                    </div>
                </div>

                <div class="sidebar-side col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">

                        <div class="sidebar-widget search-box">
                            <form method="post" action="{{route('search_post')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="keyword" value="" placeholder="Arama Yap" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Son Blog Yazıları</h2></div>

                            @foreach($blogs as $item)


                                <article class="post">
                                    <div class="post-info">{{$item->created_at->diffForHumans()}}</div>
                                    <div class="text"><a href="{{route('blog_detail', ['slug' => $item->slug])}}">{{$item->title}}</a></div>
                                </article>

                            @endforeach

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
