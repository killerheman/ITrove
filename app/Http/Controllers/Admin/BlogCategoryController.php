<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::get();
        return view('admin.blog.blog_category', compact('categories'));
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
        $request->validate([
            'name'=>'required',
        ]);
        try{
            if($request->hasFile('image'))
            {
                $spic='service-'.time().'-'.rand(0,99).'.'.$request->service_img->extension();
                $request->service_img->move(public_path('upload/blog-category/'),$spic);
            }

            $data =BlogCategory::create([
                'name' => $request->name,
                'image'=> isset($spic) ? 'upload/blog-category/'.$spic : Null,
                'description' => $request->description,
            ]);
            if($data)
            {
                session()->flash('success','Blog Category Added Sucessfully');
            }
            else
            {
                session()->flash('error','Blog Category not added ');
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
    public function edit($id)
    {
        $editcategory=BlogCategory::find(Crypt::decrypt($id));
        $categories= BlogCategory::get();
         return view('admin.blog.blog_category',compact('categories','editcategory'));
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
            'name'=>'required',
        ]);
        try{
            if($request->hasFile('image'))
            {
                $spic='service-'.time().'-'.rand(0,99).'.'.$request->service_img->extension();
                $request->service_img->move(public_path('upload/blog-category/'),$spic);
                BlogCategory::find(Crypt::decrypt($id))->update(['image'=>'upload/blog-category/'.$spic]);
            }

            $service=BlogCategory::find(Crypt::decrypt($id));
            $data= $service->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            if($data)
            {
                session()->flash('success','Blog Category Updated Sucessfully');
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
    public function destroy($id)
    {
        return Crypt::decrypt($id);
    }
}
