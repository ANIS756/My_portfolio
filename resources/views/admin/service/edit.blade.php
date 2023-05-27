@extends('admin.master')

@section('title','Edit Service')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-light">Edit Service</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{ Session::has('success') ? Session::get('success'): ' ' }}</span>
                            <form action="{{route('update.service',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4"> Service Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$service->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"> Service Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$service->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($service->image)}}" style="height: 60px; width: 60px" alt="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{$service->status == 1 ? 'checked' : ''  }}value="1" checked /> Published</label>
                                        <label for=""><input type="radio" name="status" {{$service->status == 0 ? 'Un checked' : ''  }}value="0" /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-4">
                                        <input type="submit" value="Update Service" class="btn btn-success">
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

