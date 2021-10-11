<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCat(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            "name" => $request->name,
        ]);

        return redirect()->back();
    }
    public function viewCat()
    {
        $cats = Category::where('status', '1')->get();
        $unact_cats = Category::where('status', '0')->get();
        return view('admin.category', compact('cats', 'unact_cats'));
    }

    public function deleteCats(Request $request, $id)
    {
        Category::find($id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function restoreCats(Request $request, $id)
    {
        Category::find($id)->update(['status' => 1]);
        return redirect()->back();
    }
}
