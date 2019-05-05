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
            SEO::setTitle(trans('seo.titles.home'));
            SEO::setDescription(trans('seo.descriptions.home'));
            $sliders = Slider::all();

            return view('index', compact('sliders'));
        }

        public function works()
        {
            SEO::setTitle(trans('seo.titles.works'));
            SEO::setDescription(trans('seo.descriptions.works'));


        }

        public function work_detail($slug)
        {

        }

        public function products($slug = null)
        {

        }

        public function services()
        {
            SEO::setTitle(trans('seo.titles.services'));
            SEO::setDescription(trans('seo.descriptions.services'));

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
            SEO::setTitle(trans('seo.titles.contact'));
            SEO::setDescription(trans('seo.descriptions.contact'));

            return view('contact');
        }
    }
