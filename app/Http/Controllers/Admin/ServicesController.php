<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
    $request->validate([
        'service_title' => 'required',
        'service_description' => 'required',
        'service_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'sequence' => 'required|unique:services',
        'full_description' => 'required',
    ]);

    try {
        $path = ""; 

        if($request->hasFile('service_img')){
            // store() automatically creates a unique filename and saves it 
            // inside: storage/app/public/services/
            $path = $request->file('service_img')->store('services', 'public');
        }

        $data = Service::create([
            'title' => $request->service_title,
            'description' => $request->service_description,
            'fa_icon' => $request->fa_icon,
            'pic' => $path, // Saves path as "services/filename.jpg"
            'meta_title' => $request->meta_title,
            'sequence' => $request->sequence,
            'slug' => Str::slug($request->slug ?? $request->service_title),
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_desc,
            'full_description' => $request->full_description,
        ]);

        if($data) {
            return redirect()->back()->with('success', 'Service Added Successfully');
        }
    } catch (\Exception $ex) {
        return redirect()->back()->with('error', 'Error: ' . $ex->getMessage());
    }
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
    $request->validate([
        'service_title' => 'required',
        'service_description' => 'required',
        'service_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'full_description' => 'required',
    ]);

    try {
        $service = Service::findOrFail($id);
        $servicePicPath = $service->pic; // Keep existing path by default

        if ($request->hasFile('service_img')) {
            // 1. Delete the old image from storage if it exists 
            // We use the 'public' disk which points to storage/app/public
            if ($service->pic && Storage::disk('public')->exists($service->pic)) {
                Storage::disk('public')->delete($service->pic);
            }

            // 2. Upload the new image and get the path (e.g., services/filename.jpg)
            $servicePicPath = $request->file('service_img')->store('services', 'public');
        }

        $data = $service->update([
            'title' => $request->service_title,
            'pic' => $servicePicPath,
            'fa_icon' => $request->fa_icon,
            'description' => $request->service_description,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_desc,
            'full_description' => $request->full_description,
        ]);

        if ($data) {
            session()->flash('success', 'Service Updated Successfully');
        } else {
            session()->flash('error', 'Service not updated');
        }

    } catch (\Exception $ex) {
        // Optional: Error::create(['url' => url()->current(), 'message' => $ex->getMessage()]);
        session()->flash('error', 'Server Error: ' . $ex->getMessage());
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
    try {
        $item = Service::where('slug', $slug)->firstOrFail();

        // Check if image exists in storage and delete it
        if ($item->pic && Storage::disk('public')->exists($item->pic)) {
            Storage::disk('public')->delete($item->pic);
        }

        $item->delete();
        session()->flash('success', 'Service and associated image deleted successfully');
        
    } catch (\Exception $ex) {
        session()->flash('error', 'Error: ' . $ex->getMessage());
    }

    return redirect()->back();
}
}
