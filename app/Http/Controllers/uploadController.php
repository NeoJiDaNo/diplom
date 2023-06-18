<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\products;

class uploadController extends Controller
{

    public function index()
    {
        return view('image');
    }
    public function admin_upload(Request $request) {
        $valid = $request->validate([
            'name' => 'required|min:4|max:100',
            'description' => 'required|min:4|max:100',
            'price' => 'required|min:1|max:10',
            'company' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $path = $request->file('image')->store('products', 'public');

        $review = new products;

        $review->path = $path;
        $review->name = $request->input('name');
        $review->description = $request->input('description');
        $review->price = $request->input('price');
        $review->company = $request->input('company');

        $review->save();

        return redirect('admin')->with('status', 'Изображение было загружено');

    }

    public function bk() {
        $products = new products();
        return view('bk', ['products' => $products->all()]);
    }
    public function mac() {
        $products = new products();
        return view('mac', ['products' => $products->all()]);
    }
    public function kfc() {
        $products = new products();
        return view('kfc', ['products' => $products->all()]);
    }

    public function mag() {
        $products = new products();
        return view('mag', ['products' => $products->all()]);
    }

    public function pere() {
        $products = new products();
        return view('pere', ['products' => $products->all()]);
    }

    public function pyat() {
        $products = new products();
        return view('pyat', ['products' => $products->all()]);
    }

}
