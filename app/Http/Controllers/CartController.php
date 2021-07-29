<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index() {
        $products = Session::get('cart.products');
        return view('shop.cart', compact($products));
    }
    public function store(Product $product) {
        Session::push('cart.products', $product);
        return redirect()->route('cart.index');
    }
}
