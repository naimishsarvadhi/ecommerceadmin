<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OptionController extends Controller
{
    public function currency()
    {
        $crrncy = Currency::all();
        $options = Option::all();
        return view('admin.options', compact('crrncy', 'options'));
    }
    public function option(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'descript' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'logo' => 'required',
            'currency' => 'required',
            'address' => 'required',
            'footertxt' => 'required'
        ]);
        if ($request->hasFile("logo")) {
            $options = Option::select('logo')->where('id', $request->id)->first();
            Storage::disk('public')->delete($options->logo);
            $image_name = "LOGO_" . time() . ".jpg";
            $request->logo->storeAs('public', $image_name);
        } else {
            $image_name = $request->logo;
        }
        Option::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                "name" => $request->name,
                "title" => $request->title,
                "description" => $request->descript,
                "email" => $request->email,
                "contact" => $request->contact,
                "logo" => $image_name,
                "currency" => $request->currency,
                "address" => $request->address,
                "footertxt" => $request->footertxt,
            ]
        );
        return redirect('admin/option');
    }
}
