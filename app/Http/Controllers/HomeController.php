<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $allProducts = Product::latest()->get();
        return view('frontend.home', ["allProducts" => $allProducts]);
    }
}
