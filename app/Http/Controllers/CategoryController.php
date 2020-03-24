<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function category() {
        return view('postcategories/category');
    }

    public function addCategory(Request $request){
        $this->validate($request, ['category' => 'required']);
        $category = new Category;
        $category->category = $request->input('category');
        $category->save();
        return redirect('/category')->with('status', 'You have added to your categories table successfully');
    }

    public function navy(){
        return view('postcategories.navy');
    }
}
