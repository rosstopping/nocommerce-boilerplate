<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RossTopping\Nocommerce\Models\Basket;

class BasketController extends Controller
{
    public function __invoke()
    {
        $basket = Basket::items();

    	return view('basket', compact('basket'));
    }
}
