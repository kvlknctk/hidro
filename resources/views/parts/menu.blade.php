
<li class="{{active(['index'], 'current')}}"><a href="{{route('index')}}">Anasayfa</a></li>


<li class="{{active(['kurumsal', 'kurumsal/*'], 'current')}} dropdown">
    <a href="{{route('corporate')}}">Kurumsal</a>
    <ul>
        @foreach($corporates as $corporate)
            <li><a href="{{route('corporate_detail', ['slug' => $corporate->slug])}}">{{$corporate->title}}</a></li>
        @endforeach
    </ul>
</li>



<li class="{{active(['urunler'], 'current')}}"><a href="{{route('products')}}">Ürünler</a></li>
<li class="{{active(['hizmetler', 'hizmetler/*'], 'current')}}"><a href="{{route('services')}}">Hizmetler</a></li>
<li class="{{active(['calisma', 'calisma/*'], 'current')}}"><a href="{{route('works')}}">Çalışmalar</a></li>
<li class="{{active(['iletisim'], 'current')}}"><a href="{{route('contact')}}">İletişim</a></li>