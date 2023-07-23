<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(){
        return view('backend.category.add-category');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->save();
        return back()->with('notification', 'New Category Added');
    }

    public function index(){
        $categories = Category::latest()->get();
        return view('backend.category.manage-category', ['categories' => $categories]);
    }
}
