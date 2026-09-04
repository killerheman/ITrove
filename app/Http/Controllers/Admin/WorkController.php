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
        $data = Work::orderBy('featured_order', 'asc')->orderBy('id', 'asc')->get();
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row){
                $src = Str::startsWith($row->image, ['http', 'frontend/']) ? asset($row->image) : asset('storage/'.$row->image);
                return $row->image ? '<img src="'.$src.'" width="50" style="border-radius:4px;">' : 'N/A';
            })
            ->addColumn('thumbnail', function($row){
                $thumb = $row->thumbnail ?? $row->image;
                $src = Str::startsWith($thumb, ['http', 'frontend/']) ? asset($thumb) : asset('storage/'.$thumb);
                return $thumb ? '<img src="'.$src.'" width="50" style="border-radius:4px;">' : 'N/A';
            })
            ->addColumn('featured_order', function($row){
                return '<span class="badge badge-light-warning font-weight-bold">Order: '.($row->featured_order ?? 100).'</span>';
            })
            ->addColumn('live_url', function($row){
                return $row->live_url ? '<a href="'.$row->live_url.'" target="_blank" class="badge badge-light-success">Live Link ↗</a>' : '<span class="badge badge-light-secondary">No URL</span>';
            })
            ->addColumn('screenshot_img', function($row){
                $imgs = json_decode($row->screenshot_img, true);
                $output = '';
                if(!empty($imgs)){
                    foreach($imgs as $img){
                        $src = Str::startsWith($img, ['http', 'frontend/']) ? asset($img) : asset('storage/'.$img);
                        $output .= '<img src="'.$src.'" width="40" class="mr-1 rounded">';
                    }
                } else { $output = 'N/A'; }
                return $output;
            })
           ->addColumn('short_description', function($row){
                return Str::limit(strip_tags($row->short_description ?? ''), 60);
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
            ->addColumn('category', function($row){
                return '<span class="badge badge-light-primary font-weight-bold">'.($row->category ?? 'Enterprise ERP').'</span>';
            })
            ->rawColumns(['image', 'thumbnail', 'screenshot_img', 'category', 'featured_order', 'live_url', 'action', 'full_description'])
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
            'work_img' => 'required|image|mimes:jpeg,png,jpg,webp',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'screenshot_img.*' => 'nullable|image|mimes:jpeg,png,jpg,webp'
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
                'category' => $request->category ?? 'SaaS & Enterprise ERP',
                'featured_order' => $request->featured_order ?? 100,
                'live_url' => $request->live_url,
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
        $realId = Crypt::decrypt($id);
        $editwork = Work::findOrFail($realId);
        $work = Work::orderBy('featured_order', 'asc')->get(); 
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
        'work_img' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp',
    ]);

    try {
        $realId = Crypt::decrypt($id);
        $editwork = Work::findOrFail($realId);

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
            'category'          => $request->category ?? $editwork->category ?? 'SaaS & Enterprise ERP',
            'featured_order'    => $request->featured_order ?? $editwork->featured_order ?? 100,
            'live_url'          => $request->live_url,
            'technology'        => $request->technology,
            'slug'              => $request->slug ?? Str::slug($request->work_title),
            'meta_keyword'      => $request->meta_keyword,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'short_description' => $request->short_description,
            'full_description'  => $request->full_description,
            'image'             => $workImagePath,
            'thumbnail'         => $thumbnailPath,
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