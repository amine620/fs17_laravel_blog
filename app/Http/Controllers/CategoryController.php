<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::all();
       return view('categories.index',['categories'=>$categories]);
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required'
        ]);
         
        $category=new Category();
        $category->name=$req->name;
        $category->save();

        return redirect('categories_list');
    }


    public function edit($id)
    {
      $category=Category::findOrFail($id);
        return view('categories.edit',['category'=>$category]);

    }

    public function update(Request $req,$id)
    {
        $req->validate([
            'name'=>'required'
        ]);

        $category=Category::findOrFail($id);
        $category->name=$req->name;
        $category->save();
        return redirect('categories_list');


    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('categories_list');

    }
}
