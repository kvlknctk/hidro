<?php

    namespace App\Http\Controllers;

    use App\Announcement;
    use App\Blog;
    use App\Category;
    use App\Corporate;
    use App\Mail\Iletisim;
    use App\Product;
    use App\Service;
    use App\Slider;
    use App\Work;
    use Illuminate\Http\Request;
    use SEO;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Str;

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
            $works         = Work::limit(10)->get();
            $blogs         = Blog::limit(3)->get();

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
            $service = Service::whereSlug($slug)->firstOrFail();


            SEO::setTitle($service->title);
            SEO::setDescription(Str::limit($service->description, 150));


            //dd($service);
            return view('service_detail', compact('service'));
        }

        public function corporate()
        {

            SEO::setTitle(trans('seo.titles.corporate'));
            SEO::setDescription(trans('seo.descriptions.corporate'));

            $corporates = Corporate::all();
            $corporate  = Corporate::whereSlug('hakkimizda')->firstOrFail();

            return view('corporate', compact('corporate'));

        }

        public function corporate_detail($slug)
        {
            $corporate = Corporate::whereSlug($slug)->firstOrFail();


            SEO::setTitle($corporate->title);
            SEO::setDescription(trans('seo.descriptions.corporate'));

            return view('corporate', compact('corporate'));
        }


        public function blogs()
        {
            SEO::setTitle(trans('seo.titles.blogs'));
            SEO::setDescription(trans('seo.descriptions.blogs'));

            $blogs = Blog::get();

            return view('blogs', compact('blogs'));
        }

        public function blog_detail($slug)
        {
            $blog  = Blog::whereSlug($slug)->firstOrFail();
            $blogs = Blog::limit(5)->get();

            SEO::setTitle($blog->title);
            SEO::setDescription($blog->description);

            return view('blog_detail', compact('blog', 'blogs'));
        }

        public function works()
        {
            $works = Work::paginate(10);
            SEO::setTitle(trans('seo.titles.works'));
            SEO::setDescription(trans('seo.descriptions.works'));

            return view('works', compact('works'));
        }

        public function work_detail($slug)
        {
            $work = Work::whereSlug($slug)->firstOrFail();

            SEO::setTitle($work->title);
            SEO::setDescription($work->description);

            return view('work_detail', compact('work'));

        }

        public function products()
        {
            SEO::setTitle(trans('seo.titles.products'));
            SEO::setDescription(trans('seo.descriptions.products'));

            $products = Product::with('category')->get();

            return view('products', compact('products'));

        }

        public function products_category($category)
        {

            // kategoriyi buluyoruz
            $category = Category::with('products')->find($category);

            // kategoriye ait ürünleri products değişkenine aktarıp görüntüye veriyoruz.
            $products = $category->products;


            SEO::setTitle($category->title);
            SEO::setDescription($category->title . ' - kategorisine ait ürünler listelenmiştir. ');

            return view('products', compact('products'));
        }

        public function product_detail($category, $slug)
        {

            $product = Product::whereSlug($slug)->firstOrFail();
            $product->visit();

            SEO::setTitle($product->title);
            SEO::setDescription($product->description);


            $related = Product::with('category')
                ->where('title', 'LIKE', '%' . $product->title . '%')
                ->limit(3)->get();


            return view('product_detail', compact('product', 'related'));

        }


        public function human_resources()
        {
            SEO::setTitle(trans('seo.titles.human_resources'));
            SEO::setDescription(trans('seo.descriptions.human_resources'));

        }


        public function search_post(Request $request)
        {
            //return $request->all();
            $request->validate([
                'keyword' => 'required'
            ]);
            $keyword = $request->get('keyword');


            $services = Service::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->get();

            $products = Product::with('category')->where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->get();

            $works = Work::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->get();

            $blogs = Blog::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->get();


            return view('search_result', compact('services', 'products', 'works', 'blogs'));

        }


        public function contact()
        {
            SEO::setTitle(trans('seo.titles.contact'));
            SEO::setDescription(trans('seo.descriptions.contact'));

            return view('contact');
        }

        public function contact_post(Request $request)
        {
            Mail::to(setting('iletisim.mail'))->send(new Iletisim($request));

            return view('success')
                ->with('title', 'Form Gönderildi')
                ->with('message', 'İletişim bilgileriniz başarıyla gönderildi. ');
        }
    }
