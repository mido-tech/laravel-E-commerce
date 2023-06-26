@extends('dashboard.Layout.app')



@section('main-content')
    <div class="card-header ">
            <h4>Product Page</h4>
            <hr>
    </div>




    <div class="card-body mb-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price}}</td>
                        <td>
                            <img class="cate-image w-15" src="{{ asset('assets/uploads/products') . '/' . $item->image }}" alt="image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id)}}" class="btn btn-success">EDIT</a>
                            <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




