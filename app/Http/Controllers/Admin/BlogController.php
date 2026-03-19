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
        $blogs = Blog::paginate(9);
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
    try {
        // Step 1: Encrypted ID ko wapas normal ID mein badlein
        $decryptedId = \Illuminate\Support\Facades\Crypt::decrypt($id);
        
        // Step 2: Database se blog dhundein
        $blog = \App\Models\Blog::find($decryptedId);

        if ($blog) {
            // Step 3: Delete karein
            $res = $blog->delete();
            
            if ($res) {
                session()->flash('success', 'Blog deleted successfully');
            } else {
                session()->flash('error', 'Blog delete nahi ho paya');
            }
        } else {
            session()->flash('error', 'Blog record nahi mila');
        }
    } 
    catch (\Exception $ex) {
        // Agar decryption fail hui ya koi aur error aaya
        $url = \Illuminate\Support\Facades\URL::current();
        \App\Models\Error::create([
            'url' => $url, 
            'message' => 'Delete Error: ' . $ex->getMessage()
        ]);
        
        session()->flash('error', 'Invalid security token or Server Error');
    }

    return redirect()->back();
}

   public function edit($id)
{
    // Categories aur Blogs fetch karein jaisa aapne kiya tha
    $categories = BlogCategory::all(); 
    $blogs = Blog::all();

    try {
        // Step 1: Encrypted ID ko decrypt karein
        $decryptedId = \Illuminate\Support\Facades\Crypt::decrypt($id);
        
        // Step 2: Decrypted ID ke zariye blog record dhoondein
        $editBlog = Blog::find($decryptedId);

        if ($editBlog) {
            // Step 3: Agar record mil gaya toh view par bhej dein
            return view('admin.blog', compact('categories', 'blogs', 'editBlog'));
        } else {
            // Agar ID sahi hai par record nahi mila
            session()->flash('error', 'Blog record not found.');
            return redirect()->back();
        }
    } 
    catch (\Exception $ex) {
        // Agar decryption fail hui (URL chhed-chhad ya invalid token)
        session()->flash('error', 'Invalid Request or Security Token Mismatch.');
        return redirect()->back();
    }
}


    public function update(Request $request, $id) 
{
    // Validation
    $request->validate([
        'blog_title' => 'required',
        'blog_description' => 'required',
        'blog_img' => 'image|nullable|mimes:jpeg,png,jpg,gif|max:2048',
        'blog_category_id' => 'required',
        'create_date' => 'required'
    ]);

    try {
        // 1. Encrypted ID ko decrypt karein
        $decryptedId = \Illuminate\Support\Facades\Crypt::decrypt($id);
        
        // 2. Blog record dhoondein
        $blog = Blog::find($decryptedId);

        if (!$blog) {
            session()->flash('error', 'Blog record not found');
            return redirect()->back();
        }

        // 3. Image handling logic
        $bpic = $request->old_img; // Purani image default rakhein
        if ($request->hasFile('blog_img')) {
            // Nayi file ka naam banayein
            $filename = 'blog-' . time() . '-' . rand(0, 99) . '.' . $request->blog_img->extension();
            // File move karein
            $request->blog_img->move(public_path('upload/blog/'), $filename);
            $bpic = 'upload/blog/' . $filename;
            
            // (Optional) Purani file delete karne ka code yahan aa sakta hai
        } 
        
        // 4. Record update karein
        $updated = $blog->update([
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_category_id' => $request->blog_category_id,
            'create_date' => $request->create_date,
            'user_id' => 1, // Agar auth use kar rahe hain toh auth()->id() use karein
            'meta_title' => $request->meta_title,
            'slug' => $request->slug, // Naya slug agar input se aa raha hai
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_desc,
            'blog_img' => $bpic
        ]);
        
        if($updated) {
            session()->flash('success', 'Blog Updated Successfully');
        } else {
            session()->flash('error', 'Blog not Update');
        }
    }
    catch (\Exception $ex) {
        // Error logging
        $url = \Illuminate\Support\Facades\URL::current();
        \App\Models\Error::create(['url' => $url, 'message' => $ex->getMessage()]);
        session()->flash('error', 'Server Error');
    }

    return redirect()->back();
}
}
