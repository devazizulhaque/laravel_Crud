<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brand, $brands;

    public function index(){
        return view('brand.index');
    }

    public function store(Request $request){
        Brand::createBrand($request);
        return redirect('/brand/manage')->with('message', 'Brand add Successfully...');
    }

    public function manage(){
        $this->brands = Brand::all();
        return view('brand.manage', ['brands'=> $this->brands]);
    }

    public function editBrand($id){
        $this->brand = Brand::find($id);
        return view('brand.brand-edit', ['brand'=> $this->brand]);
    }

    public function updateBrand(Request $request, $id){
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('message', 'Brand Updated Successfully...');
    }

    public function deleteBrand($id){
        Brand::deleteBrand($id);
        return redirect('/brand/manage')->with('message', 'Brand delete Successfully...');
    }
}
