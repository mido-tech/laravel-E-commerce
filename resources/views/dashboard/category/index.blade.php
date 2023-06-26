@extends('dashboard.Layout.app')



@section('main-content')


    <div class="card-header ">
            <h4>Category Page</h4>
            <hr>
    </div>




    <div class="card-body mb-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img class="cate-image w-15" src="{{ asset('assets/uploads/category') . '/' . $item->image }}" alt="image here">
                        </td>
                        <td>
                            <a href="{{url('delete-category/' . $item->id)}}" class="btn btn-danger">DELETE</a>
                            <a href="{{url('edit-category/' . $item->id)}}" class="btn btn-success">EDIT</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




