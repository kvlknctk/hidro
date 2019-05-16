<?php

    namespace App\Http\Controllers;

    use App\Announcement;
    use App\Corporate;
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

            $sliders       = Slider::all();
            $announcements = Announcement::limit(4)->get();
            $services      = Service::limit(10)->get();
            $corporate     = Corporate::get();

            return view('index', compact(
                'sliders', 'announcements', 'services', 'corporate'
            ));
        }

        public function services()
        {
            SEO::setTitle(trans('seo.titles.services'));
            SEO::setDescription(trans('seo.descriptions.services'));

            $services = Service::get();

            return view('service', compact('services'));
        }

        public function service_detail($slug)
        {
            SEO::setTitle('Servis detayı başlığı burada yer alacak. ');
            SEO::setDescription('Servis detayları hakkında açıklama burada yer alacak. ');
        }

        public function corporate()
        {


        }

        public function works()
        {
            SEO::setTitle(trans('seo.titles.works'));
            SEO::setDescription(trans('seo.descriptions.works'));
        }

        public function work_detail($slug)
        {
            SEO::setTitle('Çalışma detayları burada yer alacak. ');
            SEO::setDescription('Çalışma burada yer alacak. ');

        }

        public function products($slug = null)
        {
            SEO::setTitle(trans('seo.titles.products'));
            SEO::setDescription(trans('seo.descriptions.products'));

        }



        public function human_resources()
        {
            SEO::setTitle(trans('seo.titles.human_resources'));
            SEO::setDescription(trans('seo.descriptions.human_resources'));

        }


        public function contact()
        {
            SEO::setTitle(trans('seo.titles.contact'));
            SEO::setDescription(trans('seo.descriptions.contact'));

            return view('contact');
        }
    }
