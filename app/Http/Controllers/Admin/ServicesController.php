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
  
    public function index(Request $request)
{
    if ($request->ajax()) {
        // Data fetch karein
        $data = Service::orderBy('sequence', 'asc')->get();
        
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('fa_icon_html', function($row){
                return '<i class="'.$row->fa_icon.'"></i>';
            })
            ->addColumn('image_html', function($row){
                return '<img src="'.asset('storage/' . $row->pic).'" height="50px" width="50px" />';
            })
            ->addColumn('action', function($row){
                $editUrl = route('admin.service.edit', $row->slug);
                $deleteUrl = route('admin.service.destroy', $row->slug);
                
                return '<div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">
                                <i class="feather icon-settings"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="'.$editUrl.'">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteService(\''.$row->slug.'\')">Delete</a>
                            </div>
                        </div>
                        <form id="delete-form-'.$row->slug.'" action="'.$deleteUrl.'" method="POST" style="display: none;">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                        </form>';
            })
            ->rawColumns(['fa_icon_html', 'image_html', 'action'])
            ->make(true);
    }

    // Normal Page Load ke liye
    return view('admin.service.manage');
}

    public function create()
    {
        $totalServices = Service::count() + 10;
        return view('admin.service.service', compact('totalServices'));
    }

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
                $path = $request->file('service_img')->store('services', 'public');
            }

            Service::create([
                'title' => $request->service_title,
                'description' => $request->service_description,
                'fa_icon' => $request->fa_icon,
                'pic' => $path,
                'meta_title' => $request->meta_title,
                'sequence' => $request->sequence,
                'slug' => Str::slug($request->slug ?? $request->service_title),
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'full_description' => $request->full_description,
            ]);

            return redirect()->back()->with('success', 'Service Added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Error: ' . $ex->getMessage());
        }
    }

   public function edit($slug)
    {
        $editservice = Service::where('slug', $slug)->firstOrFail();
        $totalServices = Service::count() + 10;
        // Note: Yahan 'service' variable hataya hai kyunki table AJAX se load ho raha hai
        return view('admin.service.service', compact('editservice', 'totalServices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_title' => 'required',
            'service_description' => 'required',
            'service_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'full_description' => 'required',
        ]);

        try {
            $item = Service::findOrFail($id);
            $path = $item->pic;

            if ($request->hasFile('service_img')) {
                if ($item->pic && Storage::disk('public')->exists($item->pic)) {
                    Storage::disk('public')->delete($item->pic);
                }
                $path = $request->file('service_img')->store('services', 'public');
            }

            $item->update([
                'title' => $request->service_title,
                'pic' => $path,
                'fa_icon' => $request->fa_icon,
                'description' => $request->service_description,
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'full_description' => $request->full_description,
            ]);

            return redirect()->back()->with('success', 'Service Updated Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Server Error: ' . $ex->getMessage());
        }
    }

    public function destroy($slug)
    {
        try {
            $item = Service::where('slug', $slug)->firstOrFail();
            if ($item->pic && Storage::disk('public')->exists($item->pic)) {
                Storage::disk('public')->delete($item->pic);
            }
            $item->delete();
            return redirect()->back()->with('success', 'Deleted successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Error: ' . $ex->getMessage());
        }
    }
}