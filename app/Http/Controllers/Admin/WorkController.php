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
            'time_period'=>'required',
            'website'=>'required',
            'result'=>'required',
            'short_description'=>'required',
            'full_description'=>'required',
            'work_img'=>'image',
        ]);
        
        try{
            $wpic='work-'.time().'-'.rand(0,99).'.'.$request->work_img->extension();
                $request->work_img->move(public_path('upload/work/'),$wpic);
             $data=Work::create([
                'title'=>$request->work_title,
                'image'=>'upload/work/'.$wpic,
                'technology'=>$request->technology,
                'time_period'=>$request->time_period,
                'website'=>$request->website,
                'result'=>$request->result,
                'short_description'=>$request->short_description,
                'full_desription'=>$request->full_description,
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
    public function edit($id)
    {
        $work=Work::get();
        $editwork=Work::find(decrypt($id)) ;
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
