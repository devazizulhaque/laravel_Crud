@extends('master')

@section('title')
    Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Category Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update-category', ['id' => $category->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$category->name}}" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="56" rows="3">{{$category->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($category->image)}}" height="100" width="100" alt="">
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
