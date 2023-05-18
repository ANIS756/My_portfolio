@extends('admin.master')

@section('title','Manage Service')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-light">Manage Service</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{ Session::has('success') ? Session::get('success'): ' ' }}</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service-> description}}</td>
                                        <td>
                                            <img src="{{ asset($service->image) }}" alt="" style="height: 80px">
                                        </td>
                                        <td>{{ $service->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{route('edit.service' , ['id'=>$service->id])}}" class="btn btn-warning">edit</a>
                                            <a href="{{route('delete.service' , ['id'=>$service->id])}}" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


