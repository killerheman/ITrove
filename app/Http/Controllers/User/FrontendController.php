<?php

namespace App\Http\Controllers\User;
use App\Models\contact;
use App\Http\Controllers\Controller;
use App\Models\DiplomaCollege;
use App\Models\Technology;
use App\Models\NewsLetter;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Enquiry;
use App\Models\Work;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Mail\UserContactMail;
use App\Mail\NewsLetterMail;
use App\Mail\AdminContactMail;
use App\Mail\SendQuoteMail;
use App\Mail\AdminQuoteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class FrontendController extends Controller
{

    public function home()
    {
        $services = Service::orderBy('sequence', 'asc')->get();
        $works = Work::orderBy('featured_order', 'asc')->orderBy('id', 'asc')->get();
        $blogs = Blog::latest()->get();
        return view('user.index', compact('services', 'works', 'blogs'));
    }

    public function contact()
    {
        return view('user.contact');
    }
    public function enquiry(Request $request){
          // Validate the incoming request data
          $valid=$request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|min:10',
            'email' => 'required|email|max:255',
            'subject' => 'required',
            'message' => 'required',
        ]);
         $data= contact::create([
           'name'=>$request->name,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message
        ]);

        try {
            Mail::to($request->email)->send(new UserContactMail($data));
            Mail::to('sharmahcool5@gmail.com')->send(new AdminContactMail($data));
        } catch (\Throwable $e) {
            Log::error('Contact form mail error: ' . $e->getMessage());
        }

        if($data) {
            return redirect()->back()->with('toast_success','Thank you! Your message has been sent successfully. We have sent a confirmation email to your inbox and our team will get back to you shortly.');
        }
        else {
            return redirect()->back()->with('toast_error', 'Something went wrong. Please try again.');
        }
    }

    public function getQuote()
    {
        $services = Service::get();
        return view('user.get-quote', compact('services'));
    }
    public function quote(Request $request){
          // Validate the incoming request data
          $valid=$request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|min:10',
            'email' => 'required|email|max:255',
            'description' => 'required'
        ]);

         $data= Enquiry::create([
           'name'=>$request->name,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'service'=>$request->service,
           'description'=>$request->description,
        ]);

        try {
            Mail::to($request->email)->send(new SendQuoteMail($data));
            Mail::to('sharmahcool5@gmail.com')->send(new AdminQuoteMail($data));
        } catch (\Throwable $e) {
            Log::error('Quote form mail error: ' . $e->getMessage());
        }

        if($data) {
            return redirect()->back()->with('toast_success','Thank you! Your project quote request has been submitted successfully. We have sent a confirmation email to your inbox and our engineering team will get back to you shortly.');
        }
        else {
            return redirect()->back()->with('toast_error', 'Something went wrong. Please try again.');
        }
    }


    public function services() 
{
    // Services ka data fetch karein
    $serviceData = \App\Models\Service::orderBy('sequence', 'asc')->get();
    
    // Works table se data fetch karein (Jo aapne screenshot mein bheji thi)
    $works = \DB::table('works')->get(); 
    
    // Blade file mein dono variables pass karein
    return view('user.service.services', compact('serviceData', 'works'));
}

    public function serviceDetails($slug)
    {
        $serviceData= Service::get();
        $servicedetail=Service::where('slug',$slug)->first();
        return view('user.service.service_detail',compact('servicedetail','serviceData'));
    }
    public function works(){
        $works = Work::orderByRaw('CASE WHEN live_url IS NOT NULL AND live_url != "" THEN 0 ELSE 1 END')
            ->orderBy('featured_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $categories = Work::whereNotNull('category')
            ->select('category', \Illuminate\Support\Facades\DB::raw('count(*) as count'))
            ->groupBy('category')
            ->orderBy('category', 'asc')
            ->get();

        return view('user.works', compact('works', 'categories'));
    }
    public function about(){
        return view('user.about');
    }
    // News letter
    public function news_letter(Request $request){
        $validate=$request->validate([
            'email' => 'required|email|max:255',
        ]);

        $exists = NewsLetter::where('email', $request->email)->first();
        if (!$exists) {
            $data = NewsLetter::create(['email' => $request->email]);
        } else {
            $data = $exists;
        }

        try {
            Mail::to($request->email)->send(new NewsLetterMail($data));
            Mail::to('sharmahcool5@gmail.com')->send(new AdminContactMail((object)[
                'name' => 'Newsletter Subscriber',
                'email' => $request->email,
                'phone' => 'N/A',
                'subject' => 'New Newsletter Subscription',
                'message' => 'New subscriber: ' . $request->email,
            ]));
        } catch (\Throwable $e) {
            Log::error('Newsletter mail error: ' . $e->getMessage());
        }

        return redirect()->back()->with('toast_success', 'Thank you! You have successfully subscribed to Innovation Trove updates.');
    }
    public function registerTrainingStudent()
    {
        $diplomacolleges = DiplomaCollege::all();
        $technologies = Technology::all();
        return view('user.register_training_student', compact('diplomacolleges', 'technologies'));
    }

    public function trainingCertificate()
    {
        ob_clean();
        $certificate_url = 'frontend/app-assets/images/summer_training_certificate.png';
        $img = Image::make(public_path($certificate_url));
        // $qr_code = QrCode::format('png')->eye('circle')->style('dot')->generate('https://innovationtrove.in/IT-23-ST-01');
        //Certificate Id
        $img->text("IT-23-ST-01", 820, 130, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('55');
            $font->color('#000000');
            $font->valign('top');
        });

        //Certificate QR-code
        // $img->insert('../public/upload/q1.svg','center');

        //Student Name
        $img->text("Nihal Pandey", 1400, 970, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('95');
            $font->color('#000000');
            $font->valign('top');
        });

        //Qualification text
        $img->text("Diploma", 950, 1190, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //College Name
        $img->text("S.R.G.P. Chakia, Chandauli", 1640, 1190, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //Course Name
        $img->text("PHP with Laravel", 2050, 1390, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //Course Duration
        $img->text("45 Days", 1120, 1590, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //Course Start Date
        $img->text("20 Aug 2022", 1800, 1590, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //Course End Date
        $img->text("04 Oct 2022", 2400, 1590, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('65');
            $font->color('#000000');
            $font->valign('top');
        });

        //Course Grade
        $img->text("A", 1670, 1790, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('105');
            $font->color('#000000');
            $font->valign('top');
        });

        //Certificate Valid Link
        $img->text("IT-23-ST-01", 2320, 2410, function ($font) {
            $font->file(public_path('upload/Arimo-Bold.ttf'));
            $font->size('35');
            $font->color('#000000');
            $font->valign('top');
        });

        return $img->response();
    }

    public function makeBody($body)
    {
        $body = str_replace('[first_name]', 'Demo', $body);
        $body = str_replace('[last_name]', 'Test', $body);
        $body = str_replace('[game]', 'Test game', $body);
        $body = str_replace('[date]', '29 Nov 2022', $body);

        return $body;
    }


    public function makeImage($certificateTemplate, $body)
    {
        $img = Image::make(public_path($certificateTemplate));
        $img->text($body, 300, 900, function ($font) {
            $font->file( public_path('OpenSans-Bold.ttf'));
            $font->size('30');
            $font->color('#1111');
        });
        // dd($img);

        return $img;
    }


    public function projectDetails($slug){
       $data=Work::where('slug',$slug)->firstOrFail();
       return view('user.project_details',compact('data'));
    }

    public function blog(){
        $blogs=Blog::paginate(10);
        return view('user.blog.blog',compact('blogs'));
    }

    public function blogDetails($slug){
        $blogdetails=Blog::where('slug',$slug)->firstOrFail();
        $categories = \App\Models\BlogCategory::withCount('blogs')->get();
        $recent_blogs = Blog::latest()->take(5)->get();
        $latest_works = Work::latest()->take(6)->get();
        return view('user.blog.blog_description',compact('blogdetails', 'categories', 'recent_blogs', 'latest_works'));
    }
    
    public function privacyPolicy()
    {
        return view('user.privacy-policy');
    }
    
    public function termsOfService()
    {
        return view('user.terms-of-service');
    }
    
    public function dataDeletion()
    {
        return view('user.data-deletion');
    }
}
