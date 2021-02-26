<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;

class viewProductController extends Controller
{
    public function index()
    {
        $product = Variant::with('product')->get();
        dd($product);
        return view ('product.viewProduct', ['product' => $product]);
    }
}
