<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $service= Service::get();
         return view('admin.service.service',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $service= Service::get();
        return view('admin.service.manage',compact('service'));
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
            'service_title'=>'required',
            'service_description'=>'required',
            'service_img'=>'required',
        ]);
        try{
            //   $spic='service-'.time().'-'.rand(0,99).'.'.$request->service_img->extension();
            //     $request->service_img->move(public_path('upload/services/'),$spic);
                $data =Service::create([
                    'title' => $request->service_title,
                    'description' => $request->service_description,
                    'pic'=>$request->service_img, 
                    'meta_title' => $request->meta_title,
                    'slug' => Str::slug($request->slug),
                    'meta_keyword' => $request->meta_keyword,
                    'meta_description' => $request->meta_desc,
                ]);
                if($data)
                {
                    session()->flash('success','Service Added Sucessfully');
                }
                else
                {
                    session()->flash('error','Service not added ');
                }
        }
        catch(Exception $ex){
            $url=URL::current();
            Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
            Session::flash('error','Server Error ');  
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
        //
        $editservice = Service::where('slug', $slug)->firstOrFail();
        // return  $editservice;
        $service= Service::get();
         return view('admin.service.service',compact('service','editservice'));
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
            'service_title'=>'required',
            'service_description'=>'required',
            'service_img'=>'required',
        ]);
       
            try{
                $service=Service::find(Crypt::decrypt($id));
                //return $service;
                $data= $service->update([
                   'title' => $request->service_title,
                   'description' => $request->service_description,
                   'pic' => $request->service_img,
                   'meta_title' => $request->meta_title,
                   'slug' => $request->slug,
                   'meta_keyword' => $request->meta_keyword,
                   'meta_description' => $request->meta_desc
               ]);
               if($data)
               {
                   session()->flash('success','Service Updated Sucessfully');
               }
               else
               {
                   session()->flash('error','Service not updated ');
               }
            }catch(Exception $ex){
                $url=URL::current();
                Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
                Session::flash('error','Server Error ');  
            }
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // Find the item by slug
        $item = Service::where('slug', $slug)->first();
    
        // Check if the item exists
        if ($item) {
           
                // Delete the item
                $item->delete();
                
                session()->flash('success', 'Service deleted successfully');
          
        } else {
            
            session()->flash('error', 'Service not found');
        }
    
        
        return redirect()->back();
    }
    
}
