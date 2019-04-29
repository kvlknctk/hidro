<?php

    namespace App\Http\Controllers;

    use App\Service;
    use App\Slider;
    use Illuminate\Http\Request;
    use SEO;

    class HomeCTRL extends Controller
    {
        public function index()
        {
            SEO::setTitle('Anasayfa');
            SEO::setDescription('Hidropar Eskişehir firmasının çalışmaları ve ürünlerinin yer aldığı resmi web sitesi.');
            $sliders = Slider::all();

            return view('index', compact('sliders'));
        }

        public function works()
        {

        }

        public function work_detail($slug)
        {

        }

        public function products($slug = null)
        {

        }

        public function services()
        {
            SEO::setTitle('İletişim');
            SEO::setDescription('Firmamızın sunmuş olduğu hizmetler hakkında detaylı bilgi alabilirsiniz. ');

            $services = Service::get();
            return view('services', compact('services'));
        }

        public function service_detail($slug)
        {

        }

        public function human_resources()
        {

        }


        public function contact()
        {
            SEO::setTitle('İletişim');
            SEO::setDescription('İletişim bölümünden firmamızla iletişime geçebilir, teknik destek talebi oluşturabilir ve diğer konular hakkında bilgi alabilirsiniz. ');

            return view('contact');
        }
    }
