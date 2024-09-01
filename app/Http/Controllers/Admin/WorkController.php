<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Crypt;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $work=Work::get();
        return view('admin.work.work',compact('work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $work=Work::get();
        return view('admin.work.manage',compact('work'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'work_title'=>'required',
            'technology'=>'required',
            'slug'=>'required',
            'meta_keyword'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'short_description'=>'required',
            'full_description'=>'required',
            'work_img'=>'image',
            // 'thumbnail'=>'image',
            // 'screenshot_img'=>'image',
        ]);
       
       
        try{
    
                $wpic = 'work-' . time() . '-' . rand(0, 99) . '.' . $request->work_img->extension();
                $request->work_img->move(public_path('upload/work/'), $wpic);

                // 
                $tpic = 'work-' . time() . '-' . rand(0, 99) . '.' . $request->thumbnail->extension();
                $request->thumbnail->move(public_path('upload/work/thumbnail'), $tpic);
                // 
                $files = $request->file('screenshot_img');
                $fileNames = [];
                foreach ($files as $file) {
                    $spic = 'work-' . time() . '-' . rand(0, 99) . '.' . $file->extension();
                    $file->move(public_path('upload/work/images'), $spic);
                    $fileNames[] ='upload/work/images/'.$spic;
                }
                $screenshotImages = json_encode($fileNames);

                // Create the Work record
                $data = Work::create([
                    'title' => $request->work_title,
                    'image' => 'upload/work/' . $wpic,
                    'thumbnail' => 'upload/work/thumbnail/' . $tpic, // Added '/' to correctly form the path
                    'screenshot_img' => $screenshotImages, // Store the JSON-encoded array of file names
                    'technology' => $request->technology,
                    'slug' => $request->slug,
                    'meta_keyword' => $request->meta_keyword,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'short_description' => $request->short_description,
                    'full_description' => $request->full_description, // Corrected typo here
                ]);
            if($data)
            {
                session()->flash('success','Work Added Sucessfully');
            }
            else
            {
                session()->flash('error','Work not added ');
            }

        }catch(Exception $ex){

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $work=Work::get();
        $editwork=Work::where('slug',$slug)->firstOrFail() ;
        return view('admin.work.work',compact('work','editwork'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         dd($id);
         $request->validate([
            'work_title'=>'required',
            'technology'=>'required',
            'time_period'=>'required',
            'website'=>'required',
            'result'=>'required',
            'short_description'=>'required',
            'full_description'=>'required',
            // 'work_img'=>'image',
        ]);
        if($request->hasFile('service_img'))
        {
            $wpic='work-'.time().'-'.rand(0,99).'.'.$request->work_img->extension();
            $request->work_img->move(public_path('upload/work/'),$wpic);
            Work::find(Crypt::decrypt($id))->update(['image'=>'upload/work/'.$wpic]);
        }
        try{
            $data=Work::find(Crypt::decrypt($id))->update([
                'title'=>$request->work_title,
                'technology'=>$request->technology,
                'time_period'=>$request->time_period,
                'website'=>$request->website,
                'result'=>$request->result,
                'short_description'=>$request->short_description,
                'full_desription'=>$request->full_description,
            ]);
            if($data)
            {
                session()->flash('success','Work Updated Sucessfully');
            }
            else
            {
                session()->flash('error','Work not Updated ');
            }
        }catch(Exception $ex){

        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return "decrypt";
    }

    
}
