@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{SEOMeta::getTitleSession()}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.works')}}</li>

                @if(is_active(['calisma/*']))
                    <li>{{SEOMeta::getTitleSession()}}</li>
                @endif
            </ul>
        </div>
    </section>

    <section class="projects-section-four">
        <div class="auto-container">

            <div class="row clearfix">
                @foreach($works as $work)
                    <div class="project-block-four col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box">

                            <figure>
                                <a href="{{route('work_detail', ['slug' => $work->slug])}}">
                                    <img src="{{Voyager::image($work->getThumbnail($work->image, 'works'))}}" alt="">

                                </a>
                            </figure>


                        </div>
                        <div class="content-box">
                            <h4><a href="{{route('work_detail', ['slug' => $work->slug])}}">{{$work->title}}</a></h4>
                            <span class="tag">Çalışma</span>
                        </div>
                    </div>
                @endforeach





            </div>

           {{-- TODO: Buraya custom pagination yapılacak.
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    <li><a class="prev" href="#"><span class="fa fa-angle-left"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>--}}


        </div>
    </section>




@endsection
