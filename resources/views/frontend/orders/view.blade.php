@extends('frontend.app')

@section('title')
    Order view
@endsection

@section('content')
<div class="container py-5">
    <style>
        label {
            font-size: 16px !important;
            padding-top: 10px;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">Order View
                        <a href="{{ url('my-orders') }}" class="btn btn-warning text-black float-end" style="font-size: 10px"> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details" style="font-size: 13px">
                            <h4>Shipping Details</h4>
                                    <hr>
                            <label for=""> First Name</label>
                            <div class="border">{{$orders->fname}}</div>
                            <label for=""> Last Name</label>
                            <div class="border">{{$orders->lname}}</div>
                            <label for=""> Email</label>
                            <div class="border">{{$orders->email}}</div>
                            <label for=""> Contact No</label>
                            <div class="border">{{$orders->phone}}</div>
                            <label for=""> Shipping Address</label>
                            <div class="border">
                                {{$orders->address1}}, <br>
                                {{$orders->address2}}, <br>
                                {{$orders->city}}, <br>
                                {{$orders->state}}, <br>
                                {{$orders->country}}, <br>
                            </div>
                            <label for=""> Zip Code</label>
                            <div class="border">{{$orders->pincode}}</div>


                        </div>
                        <div class="col-md-6">
                            <h4>Order Details</h4>
                                    <hr>
                            <table class="table table-bordered" style="font-size: 18px">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $orders->orderitems as $item )
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" style="width: 50px" alt="">
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <h3 class="px-2"> Grand Total : <span class="float-end">{{$orders->total_price}}</span></h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
