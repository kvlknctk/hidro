{{--<li class="current dropdown"><a href="#">Home</a>
                                   <ul>
                                       <li><a href="index.html">Home One</a></li>
                                       <li><a href="index2.html">Home Two</a></li>
                                   </ul>
                               </li>--}}

<li class="{{active(['index'], 'current')}}"><a href="{{route('index')}}">Anasayfa</a></li>
<li class="{{active(['services'], 'current')}}"><a href="{{route('services')}}">Hizmetler</a></li>
<li class="{{active(['iletisim'], 'current')}}"><a href="{{route('contact')}}">İletişim</a></li>