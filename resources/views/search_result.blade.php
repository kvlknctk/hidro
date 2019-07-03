@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/hizmetler.jpg')}})">
        <div class="auto-container">
            <h1>{{SEOMeta::getTitleSession()}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li>{{trans('seo.titles.services')}}</li>

                @if(is_active(['hizmetler/*']))
                    <li>{{SEOMeta::getTitleSession()}}</li>
                @endif
            </ul>
        </div>
    </section>

    <section class="project-single-section">
        <div class="auto-container">
            <div class="inner-container">




                <h2 class="search_result">Hizmet Sonuç</h2>

                @forelse($services as $service)
                    <div class="result">
                        <h4>
                            <a href="{{route('service_detail', ['slug' => $service->slug])}}">{{$service->title}}</a>
                        </h4>
                        <p>{!! $service->description !!}</p>
                    </div>
                @empty
                    Sonuç Bulunamadı.
                @endforelse


                <h2 class="search_result">Ürün Sonuç</h2>

                @forelse($products as $product)
                    <div class="result">
                        <h4>
                            <a href="{{route('product_detail', ['category' => $product->category->id, 'slug' => $product->slug])}}">{{$product->title}}</a>
                        </h4>
                        <p>{!! $product->description !!}</p>
                    </div>
                @empty
                    Sonuç Bulunamadı.
                @endforelse


                <h2 class="search_result">Çalışmalar Sonuç</h2>

                @forelse($works as $work)
                    <div class="result">
                        <h4>
                            <a href="{{route('work_detail', ['slug' => $work->slug])}}">{{$work->title}}</a>
                        </h4>
                        <p>{!! $work->description !!}</p>
                    </div>
                @empty
                    Sonuç Bulunamadı.
                @endforelse

                <h2 class="search_result">Blog Sonuç</h2>

                @forelse($blogs as $blog)
                    <div class="result">
                        <h4>
                            <a href="{{route('blog_detail', ['slug' => $blog->slug])}}">{{$blog->title}}</a>
                        </h4>
                        <p>{!! $blog->description !!}</p>
                    </div>
                @empty
                    Sonuç Bulunamadı.
                @endforelse



            </div>
        </div>
    </section>



@endsection
