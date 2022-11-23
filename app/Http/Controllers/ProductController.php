<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    private $product, $products, $categories, $brands;

    public function index(){
        $this->categories = Category::all();
        $this->brands = Brand::all();
        return view('product.index', ['categories' => $this->categories, 'brands' => $this->brands]);
    }

    public function store(Request $request){
        Product::createProduct($request);
        return redirect('/product/manage')->with('message', 'Product add Successfully...');
    }

    public function manage(){
        $this->products = Product::all();
        return view('product.manage', ['products'=> $this->products]);
    }

    public function editProduct($id){
        $this->product = Product::find($id);
        $this->categories = Category::all();
        $this->brands = Brand::all();
        return view('product.product-edit', ['product'=> $this->product, 'categories' => $this->categories, 'brands' => $this->brands]);
    }

    public function updateProduct(Request $request, $id){
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'Product Updated Successfully...');
    }

    public function deleteProduct($id){
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message', 'Product delete Successfully...');
    }
}
