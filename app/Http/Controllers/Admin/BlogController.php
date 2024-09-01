<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(){
        $categories=BlogCategory::get();
        $blogs=Blog::get();
        return view('admin.blog',compact('categories','blogs'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'blog_title'=>'required',
            'blog_description'=>'required',
            'blog_img'=>'image|nullable',
            'blog_category_id' => 'required',
            'create_date'=>'required'
        ]);
        try
        {
            if($request->hasFile('blog_img'))
            {
                $bpic='blog-'.time().'-'.rand(0,99).'.'.$request->blog_img->extension();
                $request->blog_img->move(public_path('upload/blog/'),$bpic);
            }
            $data =Blog::create([
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description,
                'blog_category_id' => $request->blog_category_id,
                'create_date' => $request->create_date,
                'user_id' => 1,
                'meta_title' => $request->meta_title,
                'slug' => $request->slug,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'blog_img'=>'upload/blog/'.$bpic
            ]);
            if($data)
            {
                session()->flash('success','Blog Added Sucessfully');
            }
            else
            {
                session()->flash('error','Blog not added ');
            }
        }
        catch(Exception $ex)
        {
            $url=URL::current();
            Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
            Session::flash('error','Server Error ');
        }
            return redirect()->back();
    }

    public function destroy($id)
    {
        $id=Crypt::decrypt($id);
        try{
                $res=Blog::find($id)->delete();
                if($res)
                {
                    session()->flash('success','Blog deleted sucessfully');
                }
                else
                {
                    session()->flash('error','Blog not deleted ');
                }
            }
            catch(Exception $ex)
            {
                $url=URL::current();
                Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
                Session::flash('error','Server Error ');
            }
            return redirect()->back();
    }

    public function edit($slug)
    {
        $categories = BlogCategory::all(); // Use all() instead of get() for better clarity when retrieving all records.
        $blogs = Blog::all();
        $editBlog = Blog::where('slug', $slug)->first();
        if ($editBlog) {
            return view('admin.blog', compact('categories', 'blogs', 'editBlog'));
        } else {
            Session::flash('error', 'Something went wrong.'); // Ensure Session is imported correctly.
            return redirect()->back();
        }
    }


    public function update(Request $request ,$slug){
        // return $request->all();

        $request->validate([
            'blog_title'=>'required',
            'blog_description'=>'required',
            'blog_img'=>'image|nullable',
            'blog_category_id' => 'required',
            'create_date'=>'required'
        ]);
        try
        {
            $bpic = $request->old_img;
            if ($request->hasFile('blog_img')) {
                // Generate a new unique filename for the new image
                $bpic = 'blog-' . time() . '-' . rand(0, 99) . '.' . $request->blog_img->extension();
                // Move the new image to the desired directory
                $request->blog_img->move(public_path('upload/blog/'), $bpic);
                // Update the image path to the new image location
                $bpic = 'upload/blog/' . $bpic;
            } 
            
            $data = Blog::where('slug',$slug)->update([
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description,
                'blog_category_id' => $request->blog_category_id,
                'create_date' => $request->create_date,
                'user_id' => 1,
                'meta_title' => $request->meta_title,
                'slug' => $request->slug,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'blog_img' =>  $bpic
            ]);
            
            if($data)
            {
                session()->flash('success','Blog Update Sucessfully');
            }
            else
            {
                session()->flash('error','Blog not Update');
            }
        }
        catch(Exception $ex)
        {
            $url=URL::current();
            Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
            Session::flash('error','Server Error ');
        }
            return redirect()->back();
    }
}
