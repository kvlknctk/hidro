
<li class="{{active(['index'], 'current')}}"><a href="{{route('index')}}">Anasayfa</a></li>


<li class="{{active(['corporate', 'corporate/*'], 'current')}} dropdown">
    <a href="{{route('corporate')}}">Kurumsal</a>
    <ul>
        @foreach($corporates as $corporate)
            <li><a href="{{route('corporate_detail', ['slug' => $corporate->slug])}}">{{$corporate->title}}</a></li>
        @endforeach
    </ul>
</li>



<li class="{{active(['services'], 'current')}}"><a href="{{route('services')}}">Hizmetler</a></li>
<li class="{{active(['iletisim'], 'current')}}"><a href="{{route('contact')}}">İletişim</a></li>