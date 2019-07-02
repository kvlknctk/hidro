@extends('layout.master')



@section('content')
    <section class="page-title" style="background-image:url({{asset('img/breadcumbs/urunler.jpg')}})">
        <div class="auto-container">
            <h1>{{SEOMeta::getTitleSession()}}</h1>
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
                    <div class="shop-single">
                        <div class="product-details">

                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image-box">
                                            <a href="{{Voyager::image($product->image)}}" class="lightbox-image" title="{{$product->title}}">
                                                <img src="{{Voyager::image($product->image)}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="details-header">
                                            <h4>{{$product->title}}</h4>
                                            {{--<div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-half-empty"></span>
                                            </div>--}}
                                            {{--<div class="item-price">$29.00</div>--}}
                                        </div>

                                        <div class="text">
                                            <p>{{$product->short_description}}</p>
                                        </div>

                                        {{--<div class="expired">Expected Delivery in 4-10 Days</div>
                                        <div class="other-options clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                            <button type="button" class="theme-btn btn-style-one add-to-cart">Add To Cart</button>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="product-info-tabs">
                                <div class="prod-tabs tabs-box">

                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn active-btn">Açıklama</li>
                                        {{--<li data-tab="#prod-reviews" class="tab-btn ">Reviews (2)</li>--}}
                                    </ul>

                                    <div class="tabs-content">

                                        <div class="tab active-tab" id="prod-details">
                                            <div class="content">
                                                {!! $product->description !!}
                                            </div>
                                        </div>

                                        {{--<div class="tab active-tab" id="prod-reviews">
                                            <h2 class="title">2 Reviews For win Your Friends</h2>
                                            <!--Reviews Container-->
                                            <div class="comments-area">
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">Steven Rich – Sep 17, 2016:</div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star light"></span>
                                                            </div>
                                                            <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">William Cobus – Aug 21, 2016:</div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star-half-empty"></span>
                                                            </div>
                                                            <div class="text">Working from home meant we couldsnack & coffee breaks change our desks or view good, drink on the job even spend  getting roughday in pajamas consequences.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Comment Form -->
                                            <div class="shop-comment-form">
                                                <h2>Add Your Reviews</h2>
                                                <div class="rating-box">
                                                    <div class="text"> Your Rating:</div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <form method="post" action="contact.html">
                                                    <div class="row clearfix">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                            <label>First Name *</label>
                                                            <input type="text" name="username" placeholder="" required>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                            <label>Last Name*</label>
                                                            <input type="email" name="email" placeholder="" required>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Email*</label>
                                                            <input type="text" name="number" placeholder="" required>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Your Comments*</label>
                                                            <textarea name="message" placeholder=""></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="related-products">
                                <h2>Benzer Ürünler</h2>
                                <div class="row clearfix">

                                    @foreach($related as $prod)


                                        <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <div class="image">
                                                        <img src="{{Voyager::image($prod->image)}}" alt="" />
                                                        <div class="overlay-box">
                                                            <ul class="cart-option">
                                                                <li><span class="tool-tip">Detay</span>
                                                                    <a href="{{route('product_detail', ['category' => $prod->category->id, 'slug' => $prod->slug])}}"><span class="flaticon-search"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="price-box">
                                                        <h3>
                                                            <a href="{{route('product_detail', ['category' => $prod->category->id, 'slug' => $prod->slug])}}">{{$prod->title}}</a>
                                                        </h3>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    @include('parts.products_sidebar')
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts_orta')
    <script src="{{asset('js/jquery.bootstrap-touchspin.js')}}"></script>
@endpush
