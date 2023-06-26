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

        <form action="{{url('update-product/' . $products->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-12 mb-3">
                    <select class="form-select">
                        <option value="">{{$products->category->name}}</option>
                    </select>
                </div>

                <div class="col-md-6  mb-3  bg-light text-dark">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $products->name}}">
                </div>

                    <div class="col-md-6  mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $products->slug}}">
                    </div>

                    <div class="col-md-12">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control" >{{ $products->small_description}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control" >{{ $products->description}}</textarea>
                    </div>
                </div>

                <div class="col-md-6  mb-3 mt-3 pt-3" >
                    <label for="">Original Price</label>
                    <input type="number" class="form-control"  name="original_price" value="{{ $products->original_price}}">
                </div>
                <div class="col-md-3  mb-3 ">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price" value="{{ $products->selling_price}}">
                </div>
                <div class="col-md-3  mb-3">
                    <label for="">TAX</label>
                    <input type="number" class="form-control" name="tax" value="{{ $products->tax}}">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="qty" value="{{ $products->qty}}">
                </div>
                <div class="col-md-3  mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status" {{ $products->status ? 'checked' : ''}}>
                </div>

                <div class="col-md-3  mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox"  name="trending" {{ $products->trending ? 'checked' : ''}}>
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $products->meta_title}}">
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3" class="form-control" name="meta_keywords" >{{ $products->meta_keywords}}</textarea>
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Meta Description</label>
                    <textarea rows="3" class="form-control" name="meta_description" >{{ $products->meta_description}}</textarea>
                </div>

                @if ($products->image)

                    <img class="w-15" src="{{asset('assets/uploads/products/' . $products->image)}}" alt="">

                @endif

                <div class="col-md-12">
                    <input type="file" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

@push('custom-scripts')

@endpush
