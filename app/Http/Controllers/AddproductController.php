<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddproductController extends Controller
{
    public function view()
    {
        $cats = Category::all();
        $heading = "Add Products";
        return view('admin.addproducts', compact('cats', 'heading'));
    }

    public function addProd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sub_heading' => 'required',
            'category_id' => "required",
            'subCategory_id' => 'required',
            'brand_id' => 'required',
            'mrp' => 'required',
            'price' => 'required',
            'descript' => 'required',
            'status' => 'required',
            'multi_img.*' => 'required',
            'color' => 'required',
            'storage' => 'required',
            'ram' => 'required',
            'connectivity' => 'required',
            'condition' => 'required',
            'quantity' => 'required',
            'simstyle' => 'required',
            'model' => 'required',
        ]);

        if ($request->hasFile("multi_img")) {
            foreach ($request->file('multi_img') as $key => $file) {
                if ($request->id) {
                    $options = Addproduct::select('image')->where('id', $request->id)->first();
                    $prevImgs = explode(',', $options->image);
                    foreach ($prevImgs as $prevImg) {
                        Storage::disk('public')->delete($prevImg);
                    }
                }
                $image_name = "IMG_" . $key . "" . time() . ".jpg";
                $file->storeAs('public', $image_name);
                $data[] = $image_name;
            }
        } else {
            $image_name = $request->multi_img;
            $data[] = $image_name;
            $data = $data[0];
        }

        Addproduct::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                "name" => $request->name,
                "sub_heading" => $request->sub_heading,
                "category_id" => $request->category_id,
                "subCategory_id" => $request->subCategory_id,
                "brand_id" => $request->brand_id,
                "mrp" => $request->mrp,
                "price" => $request->price,
                "discount" => $request->discount,
                "descript" => $request->descript,
                "status" => $request->status,
                "image" => implode(',', $data),
                "color" => implode(',', $request->color),
                "storage" => implode(',', $request->storage),
                "ram" => implode(',', $request->ram),
                "connectivity" => implode(',', $request->connectivity),
                "condition" => $request->condition,
                "quantity" => $request->quantity,
                "type" => $request->type,
                "simstyle" => $request->simstyle,
                "model" => $request->model,
                "warranty" => $request->warranty,
                "new_arrival" => Carbon::now()->addDays(7),
            ]
        );
        return redirect('admin/products');
    }

    public function editProd(Request $request, $id)
    {
        $product_edit = Addproduct::where('id', $request->id)->first();
        $cats = Category::all();
        $heading = "Edit Products";
        return view('admin.addproducts', compact('id', 'heading', 'product_edit', 'cats'));
    }

    public function deleteProd(Request $request, $id)
    {
        Addproduct::find($id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function restoreProd(Request $request, $id)
    {
        Addproduct::find($id)->update(['status' => 1]);
        return redirect()->back();
    }
}
