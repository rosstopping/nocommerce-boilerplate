<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RossTopping\Nocommerce\Models\Product;
use RossTopping\Nocommerce\Models\Category;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::orderBy('created_at')->limit(3)->get();
        $categories = Category::all();

    	return view('home', compact('products', 'categories'));
    }
}
