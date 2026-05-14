<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
class PriceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pricing::latest()->get();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editUrl = route('admin.pricing.edit', $row->id);
                    $deleteUrl = route('admin.pricing.destroy', $row->id);
                    
                    return '<div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">
                                    <i class="feather icon-settings"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="'.$editUrl.'">Edit</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);" onclick="deletePricing('.$row->id.')">Delete</a>
                                </div>
                            </div>
                            <form id="delete-form-'.$row->id.'" action="'.$deleteUrl.'" method="POST" style="display: none;">
                                '.csrf_field().'
                                '.method_field('DELETE').'
                            </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.Pricing.manage');
    }

    public function create()
    {
        return view('admin.Pricing.pricing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pricing_title' => 'required',
            'pricing_description' => 'required',
        ]);

        try {
            Pricing::create([
                'title' => $request->pricing_title,
                'description' => $request->pricing_description,
                'fa_icon' => $request->fa_icon,
                'meta_title' => $request->meta_title,
                'sequence' => $request->sequence,
                'slug' => $request->slug ?? Str::slug($request->pricing_title),
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'full_description' => $request->full_description,
            ]);

            return redirect()->route('admin.pricing.index')->with('success', 'Pricing Added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Error: ' . $ex->getMessage());
        }
    }

    public function edit($id)
    {
        $editpricing = Pricing::findOrFail($id);
        return view('admin.Pricing.pricing', compact('editpricing'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pricing_title' => 'required',
            'pricing_description' => 'required',
        ]);

        try {
            $item = Pricing::findOrFail($id);
            $item->update([
                'title' => $request->pricing_title,
                'fa_icon' => $request->fa_icon,
                'description' => $request->pricing_description,
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_desc,
                'full_description' => $request->full_description,
                'sequence' => $request->sequence,
                'slug' => $request->slug ?? Str::slug($request->pricing_title),
            ]);

            return redirect()->route('admin.pricing.index')->with('success', 'Pricing Updated Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Server Error: ' . $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $item = Pricing::findOrFail($id);
            $item->delete();
            return redirect()->back()->with('success', 'Deleted successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Error: ' . $ex->getMessage());
        }
    }
}
