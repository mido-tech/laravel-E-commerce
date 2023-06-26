@extends('dashboard.Layout.app')



@section('main-content')
<style>
    input{
        border: 2px  #f1aaff solid ;
     }
</style>

    <div class="card-header">

            <h4>Add Product</h4>
    </div>
    <div class="card-body mb-5">

        <form action="{{url('insert-product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12 mb-3">
                    <select class="form-select" name="cate_id" >
                        <option value="">Select a Category</option>
                        @foreach ($categories   as $item )

                            <option value="{{$item->id}}">{{$item->name}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="col-md-6  mb-3  bg-light text-dark">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                    <div class="col-md-6  mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>

                    <div class="col-md-12">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6  mb-3 mt-3 pt-3" >
                    <label for="">Original Price</label>
                    <input type="number" class="form-control"  name="original_price">
                </div>
                <div class="col-md-3  mb-3 ">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price">
                </div>
                <div class="col-md-3  mb-3">
                    <label for="">TAX</label>
                    <input type="number" class="form-control" name="tax">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="qty">
                </div>
                <div class="col-md-3  mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status">
                </div>

                <div class="col-md-3  mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox"  name="trending">
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3" class="form-control" name="meta_keywords"></textarea>
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Description</label>
                    <textarea rows="3" class="form-control" name="meta_description"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="file" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

@push('custom-scripts')

@endpush
