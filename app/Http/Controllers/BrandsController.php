<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function view()
    {
        $cats = Category::all();
        $brnds = Brand::where('status', '1')->get();
        $Unactbrnds = Brand::where('status', '0')->get();
        return view('admin.brands', compact('cats', 'brnds', 'Unactbrnds'));
    }

    public function subCat(Request $request)
    {
        $cat_id = $request->cat_id;
        $subCat = Subcategory::where(['category' => $cat_id])->get();
        $opt = '<option value="" disabled selected>Sub Category</option>';
        foreach ($subCat as $sub) {
            $opt .= '<option value="' . $sub->id . '">' . $sub->name . '</option>';
        }
        return $opt;
    }
    public function getBrnd(Request $request)
    {
        $subcat_id = $request->subcat_id;
        $brnds = Brand::where(['subCategory_id' => $subcat_id])->get();
        $opt = '<option value="" disabled selected>Select Brands</option>';
        foreach ($brnds as $brnd) {
            $opt .= '<option value="' . $brnd->id . '">' . $brnd->name . '</option>';
        }
        return $opt;
    }

    public function AddBrands(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'subCategory_id' => 'required',
        ]);

        Brand::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'subCategory_id' => $request->subCategory_id,
        ]);
        return redirect()->back();
    }

    public function deleteBrand(Request $request, $id)
    {
        Brand::find($id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function restoreBrand(Request $request, $id)
    {
        Brand::find($id)->update(['status' => 1]);
        return redirect()->back();
    }
}
