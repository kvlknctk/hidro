<?php

    namespace App\Http\Controllers;

    use App\Slider;
    use Illuminate\Http\Request;
    use SEO;

    class HomeCTRL extends Controller
    {
        public function index()
        {
            SEO::setTitle('Home');
            SEO::setDescription('Hidropar Eskişehir firmasının çalışmaları ve ürünlerinin yer aldığı resmi web sitesi.');

            $sliders = Slider::all();

            return view('index', compact('sliders'));
        }

        public function works()
        {
            SEO::setTitle('Çalışmalar');
            SEO::setDescription('Hidropar Eskişehir firmasının daha önceden yapmış olduğu çalışmalar bu sayfada yer alacak. ');

        }

        public function work_detail($slug)
        {

        }

        public function products($slug = null)
        {

        }

        public function services()
        {

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
