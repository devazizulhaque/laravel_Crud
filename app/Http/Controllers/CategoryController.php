<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category, $categories;

    public function index(){
        return view('category.index');
    }

    public function store(Request $request){
        Category::createCategory($request);
        return redirect('/category/manage')->with('message', 'Category add Successfully...');
    }

    public function manage(){
        $this->categories = Category::all();
        return view('category.manage', ['categories'=> $this->categories]);
    }

    public function editCategory($id){
        $this->category = Category::find($id);
        return view('category.category-edit', ['category'=> $this->category]);
    }

    public function updateCategory(Request $request, $id){
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category Updated Successfully...');
    }

    public function deleteCategory($id){
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Product delete Successfully...');
    }

}
