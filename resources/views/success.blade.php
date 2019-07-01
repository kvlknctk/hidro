@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/iletisim.jpg')}})">
        <div class="auto-container">
            <h1>Gönderildi</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>Tamamlandı</li>
            </ul>
        </div>
    </section>

    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-md-4 col-sm-6 col-xs-12 ">
                    <h3>{{$title}}</h3>
                    <p>{{$message}}</p>
                </div>



            </div>
        </div>
    </section>




@endsection
