<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_category(Request $request){
        $category_info = $request->all();

        Category::create([
            "title"=>$category_info['title2'],
        ]);
        return redirect("/admin");
    }
}