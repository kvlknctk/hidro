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


        public function contact()
        {
            SEO::setTitle('İletişim');
            SEO::setDescription('This is my page description');

            return view('contact');
        }
    }
