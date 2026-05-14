<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Exception;

class WorkController extends Controller
{
   
public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Work::latest()->get();
        return datatables()->of($data)
            ->addIndexColumn() // Sr.No ke liye
            ->addColumn('image', function($row){
                return $row->image ? '<img src="'.asset('storage/'.$row->image).'" width="50">' : 'N/A';
            })
            ->addColumn('thumbnail', function($row){
                return $row->thumbnail ? '<img src="'.asset('storage/'.$row->thumbnail).'" width="50">' : 'N/A';
            })
            ->addColumn('screenshot_img', function($row){
                $imgs = json_decode($row->screenshot_img, true);
                $output = '';
                if(!empty($imgs)){
                    foreach($imgs as $img){
                        $output .= '<img src="'.asset('storage/'.$img).'" width="40" class="mr-1">';
                    }
                } else { $output = 'N/A'; }
                return $output;
            })
           ->addColumn('short_description', function($row){
    return Str::limit($row->short_description, 60);
})
            ->addColumn('action', function($row){
                $sid = Crypt::encrypt($row->id);
                return '
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="'.route('admin.work.edit', $sid).'"><i class="fa fa-edit"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="javascript:void(0)" onclick="confirmDelete('.$row->id.')"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    </div>
                    <form id="delete-form-'.$row->id.'" action="'.route('admin.work.destroy', $sid).'" method="POST" style="display:none;">
                        '.csrf_field().' '.method_field('DELETE').'
                    </form>';
            })
            ->rawColumns(['image', 'thumbnail', 'screenshot_img', 'action', 'full_description'])
            ->make(true);
    }
    return view('admin.work.manage');
}
    public function create()
{
    $editwork = null; 
    return view('admin.work.work', compact('editwork'));
}

    public function store(Request $request)
    {
        $request->validate([
            'work_title' => 'required',
            'technology' => 'required',
            'meta_keyword' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'work_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'screenshot_img.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        try {
            $wpath = $request->work_img->store('works', 'public');
            
            $tpath = null;
            if ($request->hasFile('thumbnail')) {
                $tpath = $request->thumbnail->store('works/thumbnail', 'public');
            }

            $screenshotImages = null;
            if ($request->hasFile('screenshot_img')) {
                $fileNames = [];
                foreach ($request->file('screenshot_img') as $file) {
                    $fileNames[] = $file->store('works/screenshots', 'public');
                }
                $screenshotImages = json_encode($fileNames);
            }

            Work::create([
                'title' => $request->work_title,
                'image' => $wpath,
                'thumbnail' => $tpath,
                'screenshot_img' => $screenshotImages,
                'technology' => $request->technology,
                'slug' => $request->slug ?? Str::slug($request->work_title),
                'meta_keyword' => $request->meta_keyword,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
            ]);

            session()->flash('success', 'Work Added Successfully');
            return redirect()->route('admin.work.index');

        } catch (Exception $ex) {
            session()->flash('error', 'Error: ' . $ex->getMessage());
            return redirect()->back();
        }
    }

public function edit($id)
{
    try {
        // ID ko decrypt karein
        $realId = \Illuminate\Support\Facades\Crypt::decrypt($id);
        
        // Data dhundein
        $editwork = Work::findOrFail($realId);
        
        // Neeche ki table ke liye data
        $work = Work::all(); 

       return view('admin.work.work', compact('editwork', 'work'));
        
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Invalid ID');
    }
}
    public function update(Request $request, $id)
{
    $request->validate([
        'work_title' => 'required',
        'short_description' => 'required',
        'full_description' => 'required',
        'work_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    try {
        $realId = Crypt::decrypt($id);
        $editwork = Work::findOrFail($realId);

        // Nayi images ke liye variables
        $workImagePath = $editwork->image;
        $thumbnailPath = $editwork->thumbnail;

        // Main Image Update
        if ($request->hasFile('work_img')) {
            if ($editwork->image && Storage::disk('public')->exists($editwork->image)) {
                Storage::disk('public')->delete($editwork->image);
            }
            $workImagePath = $request->work_img->store('works', 'public');
        }

        // Thumbnail Update
        if ($request->hasFile('thumbnail')) {
            if ($editwork->thumbnail && Storage::disk('public')->exists($editwork->thumbnail)) {
                Storage::disk('public')->delete($editwork->thumbnail);
            }
            $thumbnailPath = $request->thumbnail->store('works/thumbnail', 'public');
        }

        // Final Update Query
        $editwork->update([
            'title'             => $request->work_title,
            'technology'        => $request->technology,
            'slug'              => $request->slug ?? Str::slug($request->work_title),
            'meta_keyword'      => $request->meta_keyword,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'short_description' => $request->short_description,
            'full_description'  => $request->full_description,
            'image'             => $workImagePath, // Yahan variable use karein
            'thumbnail'         => $thumbnailPath, // Yahan variable use karein
        ]);

        return redirect()->route('admin.work.index')->with('success', 'Work Updated Successfully');

    } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        return redirect()->back()->with('error', 'Invalid Security Key.');
    } catch (\Exception $ex) {
        return redirect()->back()->with('error', 'Update Error: ' . $ex->getMessage());
    }
}
    public function destroy($id)
    {
        try {
            $realId = Crypt::decrypt($id);
            $editwork = Work::findOrFail($realId);
            
            $filesToDelete = [$editwork->image, $editwork->thumbnail];
            
            if ($editwork->screenshot_img) {
                $screenshots = json_decode($editwork->screenshot_img, true);
                if (is_array($screenshots)) {
                    $filesToDelete = array_merge($filesToDelete, $screenshots);
                }
            }

            foreach ($filesToDelete as $file) {
                if ($file && Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                }
            }

            $editwork->delete();
            session()->flash('success', 'Work deleted successfully');
            
        } catch (Exception $ex) {
            session()->flash('error', 'Delete Error: ' . $ex->getMessage());
        }

        return redirect()->back();
    }
}