<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RossTopping\Nocommerce\Models\Product;
use RossTopping\Nocommerce\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::when($request->filled('category'), function($query) use ($request) {
            $query->whereHas('categories', function($categories) use ($request) {
                $categories->where('categories.id', $request->category);
            });
        })->orderBy('created_at')->get();

        $category = $request->filled('category') ? Category::find($request->category) : null;

        return view('product.index', compact('products', 'category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
}
