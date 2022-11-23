@extends('master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage Brand</h1>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <table class="table-hover table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->description}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" width="70" height="50" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('edit-brand', ['id' => $brand->id])}}" class=" btn btn-outline-success btn-sm">Edit</a>
                                            <a href="{{route('delete-brand', ['id' => $brand->id])}}" class=" btn btn-outline-danger btn-sm mt-2" onclick="return confirm('Are You sure to Delete This!!!')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

