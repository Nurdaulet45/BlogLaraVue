<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        $request->validate([
            'cat_name'=>'required|min:2|max:50'

        ]);

//        $category = new Category();
//        $category->cat_name = $request->cat_name;
//        $category->save();
        $category = Category::create(['cat_name'=>$request->input('cat_name')]);
        return ['message' => 'ok'];

    }
}
