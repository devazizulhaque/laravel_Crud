<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/add', [categoryController::class, 'index'])->name('category.add');
Route::post('/category-add', [categoryController::class, 'store'])->name('category-add');
Route::get('/category/manage', [categoryController::class, 'manage'])->name('category.manage');
Route::get('/category-edit/{id}', [categoryController::class, 'editCategory'])->name('edit-category');
Route::post('/update-category/{id}', [categoryController::class, 'updateCategory'])->name('update-category');
Route::get('/delete-category/{id}', [categoryController::class, 'deleteCategory'])->name('delete-category');


Route::get('/brand/add', [BrandController::class, 'index'])->name('brand.add');
Route::post('/brand-add', [BrandController::class, 'store'])->name('brand-add');
Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
Route::get('/brand-edit/{id}', [BrandController::class, 'editBrand'])->name('edit-brand');
Route::post('/update-brand/{id}', [BrandController::class, 'updateBrand'])->name('update-brand');
Route::get('/delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('delete-brand');

Route::get('/product/add', [ProductController::class, 'index'])->name('product.add');
Route::post('/product-add', [ProductController::class, 'store'])->name('product-add');
Route::get('/product/manage', [ProductController::class, 'manage'])->name('product.manage');
Route::get('/product-edit/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
