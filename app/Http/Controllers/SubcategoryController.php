<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function view()
    {
        $cats = Category::all();
        $subCats = Subcategory::where('status', '1')->with('categories')->get();
        $UnactsubCats = Subcategory::where('status', '0')->with('categories')->get();
        return view('admin.subcategory', compact('cats', 'subCats', 'UnactsubCats'));
    }

    public function AddCat(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        $subCat = Subcategory::create([
            "name" => $request->name,
            "category" => $request->category,
        ]);

        return redirect()->back();
    }

    public function deleteSubCats(Request $request, $id)
    {
        Subcategory::find($id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function restoreSubCats(Request $request, $id)
    {
        Subcategory::find($id)->update(['status' => 1]);
        return redirect()->back();
    }
}
