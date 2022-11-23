@extends('master')

@section('title')
    Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Product Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update-product', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select name="category_id" class="form-control">
                                            {{-- <option value="">--Select Category Name--</option> --}}
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <select name="brand_id" class="form-control" id="">
                                            {{-- <option value="">--Select Brand Name--</option> --}}
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Title</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->title}}" name="title" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="56" rows="3">{{$product->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($product->image)}}" height="100" width="100" alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Create New Category">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
