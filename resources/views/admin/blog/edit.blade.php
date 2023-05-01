@extends('admin.master')

@section('title', 'Edit Blog')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-light">Edit Blog</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{ Session::has('success') ? Session::get('success'): ' ' }}</span>
                            <form action="{{ route('update-blog', ['id'=>$blog->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$blog->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" value="{{$blog->category_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Brand Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" value="{{$blog->brand_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description"  id="" cols="30" rows="10" class="form-control">{{$blog->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file"  name="image" class="form-control">
                                        <img src="{{ asset($blog->image) }}" alt="" style="height: 80px ; width: 80px">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{$blog->status == 1 ? 'checked' : ''  }} value="1"  /> Published</label>
                                        <label for=""><input type="radio" name="status" {{$blog->status == 0 ? 'checked' : ''  }} value="0" /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-success">
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
