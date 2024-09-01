<?php

namespace App\Http\Controllers\User;
use App\Models\contact;
use App\Http\Controllers\Controller;
use App\Models\DiplomaCollege;
use App\Models\Technology;
use App\Models\NewsLetter;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Work;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Mail\UserContactMail;
use App\Mail\NewsLetterMail;
use App\Mail\AdminContactMail;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class FrontendController extends Controller
{

    public function home()
    {
        $services=Service::get();
        // dd($services);
        return view('user.index',compact('services'));
    }

    public function contact()
    {
        return view('user.contact');
    }
    public function enquiry(Request $request){
          // Validate the incoming request data
          $valid=$request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|max:13',
            'email' => 'required|email|max:255',
            'subject' => 'required',
            'message' => 'required',
        ]);
         $data= contact::create([
           'name'=>$request->name,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message,
        ]);
        Mail::to($request->email)->send(new UserContactMail($data));
        Mail::to('shivam786098jais00@gmail.om')->send(new AdminContactMail($data));
        if($data) {
            return redirect()->back()->with('toast_success','Your message has been completed successfully.');
        }
        else {
            return redirect()->back()->with('toast_error', 'Something went wrong..');
        }
    }
    public function services(){
       $serviceData= Service::get();
        return view('user.service.services',compact('serviceData'));
    }

    public function serviceDetails($slug){
        $serviceData= Service::get();
      $servicedetail=Service::where('slug',$slug)->first();
      return view('user.service.service_detail',compact('servicedetail','serviceData'));
    }
    public function works(){
        $data=Work::get();
        return view('user.works',compact('data'));
    }
    public function about(){
        return view('user.about');
    }
    // News letter 
    public function news_letter(Request $request){
        $validate=$request->validate([
            'email' => 'required|email',
        ]);
        $data=NewsLetter::create(['email'=>$request->email]);
        $mail=Mail::to($request->email)->send(new NewsLetterMail($data));
        if($data) {
            return redirect()->back()->with('toast_success','Thank you for subscribe');
        }
        else {
            return redirect()->back()->with('toast_error', 'Something went wrong..');
        }
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
        $blog=Blog::get();
        return view('user.blog.blog',compact('blog'));
    }

    public function blogDetails($id){

        $blogdetails=Blog::where('id',decrypt($id))->firstOrFail();
        // return $blogdetail;
        return view('user.blog.blog_description',compact('blogdetails'));
    }
}
