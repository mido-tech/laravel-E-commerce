@extends('dashboard.Layout.app')



@section('main-content')

<style>
    input{
        border: 2px  #f1aaff solid ;
     }
</style>
    <div class="card-header">

            <h4>Add Category</h4>
    </div>
    <div class="card-body mb-5">

        <form action="{{url('insert-category')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6  mb-3  bg-light text-dark">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                    <div class="col-md-6  mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>

                    <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status">
                </div>

                <div class="col-md-6  mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox"  name="popular">
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
