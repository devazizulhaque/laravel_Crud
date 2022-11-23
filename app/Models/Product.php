<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $category_id, $brand_id, $product, $image, $imageUrl, $directory, $imageName ;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createProduct($request){
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->title = $request->title;
        self::$product->description = $request->description;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public static function updateProduct($request, $id){
        self::$product = Product::find($id);
        if ($request->file('image')){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$product->image;
        }
        self::$product->name = $request->name;
        self::$product->description = $request->description;
        self::$product->image = self::$imageUrl;
        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);
        if (file_exists(self::$product->image)){
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
