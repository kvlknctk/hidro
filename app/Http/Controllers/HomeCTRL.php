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
            SEO::setDescription('This is my page description');

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
