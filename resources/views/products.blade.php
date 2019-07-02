@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/urunler.jpg')}})">
        <div class="auto-container">
            <h1>Gönderildi</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('index')}}">{{trans('seo.titles.home')}}</a></li>
                <li><a href="{{route('products')}}">{{trans('seo.titles.products')}}</a></li>

                @if(is_active(['urunler/*']))
                    <li>{{SEOMeta::getTitleSession()}}</li>
                @endif
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">


                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="shop-section">


                        <div class="items-sorting">
                            <div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h4>Toplam  {{$products->count()}} ürün</h4>
                                </div>

                            </div>
                        </div>

                        <div class="row clearfix">


                            @foreach($products as $product)

                                <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="image">
                                                <img src="{{Voyager::image($product->getThumbnail($product->image, 'thumb'))}}" alt="" />
                                                <div class="overlay-box">
                                                    <ul class="cart-option">
                                                        <li><span class="tool-tip">Detay</span><a href="{{route('product_detail', ['category' => $product->category->id, 'slug' => $product->slug])}}"><span class="flaticon-supermarket"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price-box">
                                                <h3><a href="{{route('product_detail', ['category' => $product->category->id, 'slug' => $product->slug])}}">{{$product->title}}</a></h3>
                                                <div class="price">{{$product->category->title}}</div>
                                            </div>



                                        </div>
                                    </div>
                                </div>


                            @endforeach


                        </div>


                        <ul class="styled-pagination text-center">
                            <li class="prev"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
                        </ul>


                    </div>
                </div>


                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar shop-sidebar">


                        <div class="sidebar-widget search-box style-two">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>


                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Kategoriler</h2>
                            </div>
                            <ul class="blog-cat">
                                <li class="{{active(['urunler'], 'active')}}"><a href="{{route('products')}}" >Tüm Ürünler</a></li>

                                @foreach($categories as $category)
                                    <li class="{{active(['urunler/'.$category->id], 'active')}}">
                                        <a href="{{route('products_category', ['category' => $category->id])}}">{{$category->title}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>


                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h2>Popüler Ürünler</h2>
                            </div>


                            @foreach($popular as $item)


                                <div class="post">
                                    <figure class="post-thumb">
                                        <a href="{{route('product_detail', ['category' => $item->category->id, 'slug' => $item->slug])}}">
                                            <img src="{{Voyager::image($item->getThumbnail($item->image, 'thumb'))}}" alt="">
                                        </a>
                                    </figure>
                                    <h4><a href="{{route('product_detail', ['category' => $item->category->id, 'slug' => $item->slug])}}">{{$item->title}}</a></h4>
                                    <div class="price">{{$item->category->title}}</div>
                                </div>

                            @endforeach




                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>





@endsection