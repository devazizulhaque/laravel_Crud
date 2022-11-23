@extends('master')

@section('title')
    Brand
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Brand Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update-brand', ['id' => $brand->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$brand->name}}" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Brand Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="56" rows="3">{{$brand->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Brand Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($brand->image)}}" height="100" width="100" alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Update Brand">
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
