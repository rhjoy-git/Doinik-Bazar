<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Eloqent ORM syntax
        return view('products', compact('products'));
    }

    public function allProducts()
    {
        $products = DB::table('products')->get(); // Query Builder Syntax
        return view('pages.all-products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.single-product', compact('product'));
    }
    // public function overview($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('product-overview', compact('product'));
    // }
}
