@extends('admin.master')

@section('title', 'Manage Blog')

@section('body')
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h3 class="text-center text-light">Manage Blog</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>C. Name</th>
                                        <th>B. Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->category_name }}</td>
                                            <td>{{ $blog->brand_name }}</td>
                                            <td>{{ $blog-> description}}</td>

                                            <td>
                                                <img src="{{ asset($blog->image) }}" alt="" style="height: 80px">
                                            </td>
                                            <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                <a href="{{route('edit-blog' , ['id'=>$blog->id])}}" class="btn btn-warning">edit</a>
                                                <a href="" class="btn btn-danger">delete</a>
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
