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
        return view('admin.blog.blog', compact('categories'));
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
        // return $request->all();

        $request->validate([
            'category_name'=>'required',
        ]);
        
            $data =BlogCategory::create([
                'category_name' => $request->category_name,
               
            ]);
            if($data)
            {
                session()->flash('success','Blog Category Added Sucessfully');
            }
            else
            {
                session()->flash('error','Blog Category not added ');
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
        // return $editcategory;
        $categories= BlogCategory::get();
         return view('admin.blog.blog',compact('categories','editcategory'));
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
            'category_name'=>'required',
        ]);

            $blogcategory=BlogCategory::find($id);
            $data= $blogcategory->update([
                'category_name' => $request->category_name,
            ]);
            if($data)
            {
                session()->flash('success','Blog Category Updated Sucessfully');
            }
            else
            {
                session()->flash('error','Service not updated ');
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
