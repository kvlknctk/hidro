
<aside class="sidebar shop-sidebar">


    <div class="sidebar-widget search-box style-two">
        <form method="post" action="{{route('search_post')}}">
            @csrf
            <div class="form-group">
                <input type="search" name="keyword" value="" placeholder="Arama..." required>
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
