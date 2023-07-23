<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $allProducts = Product::latest()->get();
        return view('frontend.shop', ["allProducts" => $allProducts]);
    }
}
