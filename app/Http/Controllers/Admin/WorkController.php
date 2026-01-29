<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Exception;

class WorkController extends Controller
{
    public function index()
    {
        $work = Work::paginate(15); 
        return view('admin.work.work', compact('work'));
    }

    public function create()
    {
        $work = Work::get();
        return view('admin.work.manage', compact('work'));
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
            // Main Image - Saves in storage/app/public/works/
            $wpath = $request->work_img->store('works', 'public');

            // Thumbnail - Saves in storage/app/public/works/thumbnail/
            $tpath = null;
            if ($request->hasFile('thumbnail')) {
                $tpath = $request->thumbnail->store('works/thumbnail', 'public');
            }

            // Multiple Screenshots
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

        } catch (Exception $ex) {
            session()->flash('error', 'Error: ' . $ex->getMessage());
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'work_title' => 'required',
            'short_description' => 'required',
        ]);

        try {
            $work = Work::findOrFail($id);

            // Update Main Image
            if ($request->hasFile('work_img')) {
                if ($work->image && Storage::disk('public')->exists($work->image)) {
                    Storage::disk('public')->delete($work->image);
                }
                $work->image = $request->work_img->store('works', 'public');
            }

            // Update Thumbnail
            if ($request->hasFile('thumbnail')) {
                if ($work->thumbnail && Storage::disk('public')->exists($work->thumbnail)) {
                    Storage::disk('public')->delete($work->thumbnail);
                }
                $work->thumbnail = $request->thumbnail->store('works/thumbnail', 'public');
            }

            $work->update([
                'title' => $request->work_title,
                'technology' => $request->technology,
                'slug' => $request->slug ?? Str::slug($request->work_title),
                'meta_keyword' => $request->meta_keyword,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
            ]);

            session()->flash('success', 'Work Updated Successfully');

        } catch (Exception $ex) {
            session()->flash('error', 'Update Error: ' . $ex->getMessage());
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        try {
            $work = Work::findOrFail($id);
            
            // Delete all associated files
            $filesToDelete = [$work->image, $work->thumbnail];
            
            // Add screenshots to delete list
            if ($work->screenshot_img) {
                $screenshots = json_decode($work->screenshot_img, true);
                $filesToDelete = array_merge($filesToDelete, $screenshots);
            }

            foreach ($filesToDelete as $file) {
                if ($file && Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                }
            }

            $work->delete();
            session()->flash('success', 'Work and all images deleted successfully');
        } catch (Exception $ex) {
            session()->flash('error', 'Delete Error: ' . $ex->getMessage());
        }

        return redirect()->back();
    }
}