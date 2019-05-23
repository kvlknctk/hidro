<?php

    namespace App\Http\Controllers;

    use App\Announcement;
    use App\Blog;
    use App\Corporate;
    use App\Service;
    use App\Slider;
    use App\Work;
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
            $works          = Work::limit(10)->get();
            $blogs          = Blog::limit(3)->get();

            return view('index', compact(
                'sliders', 'announcements', 'services', 'corporate', 'works', 'blogs'
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

            $service = Service::whereSlug($slug)->firstOrFail();

            dd($service);
            return view('service', compact('service'));
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
