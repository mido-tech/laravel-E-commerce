@extends('frontend.app')

    @section('title')
  checkout
    @endsection

    @section('content')
    <div class= "container col-md-10 mt-3">
        <form action="{{url('place-order')}}" method="POST">
           {{ csrf_field() }} {{-- {{csrf_field()}} --}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Basic Details </h1>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mb-3">
                                <label for="firstName"><h3>First Name </h3></label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="fname" placeholder="Enter First Name" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName"><h3>Last Name </h3></label>
                                <input type="text" class="form-control" value="{{Auth::user()->lname}}" name="lname" placeholder="Enter Last Name" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" > <h3> Email  </h3></label>
                                <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email" placeholder="Enter Email" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for=""> <h3>phone Number </h3></label>
                                <input type="text" class="form-control"  value="{{Auth::user()->phone}}" name="phone" placeholder="Enter phone Number" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""><h3> Address 1 </h3> </label>
                                <input type="text" class="form-control"  value="{{Auth::user()->address1}}" name="address1" placeholder="Enter Address 1" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> <h3>Address 2 </h3> </label>
                                <input type="text" class="form-control"  value="{{Auth::user()->address2}}" name="address2" placeholder="Enter Address 2" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> <h3> City </h3> </label>
                                <input type="text" class="form-control" value="{{Auth::user()->city}}" name="city" placeholder="Enter City" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""><h3> State </h3></label>
                                <input type="text" class="form-control"  value="{{Auth::user()->state}}" name="state" placeholder="Enter State" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""><h3>Country</h3> </label>
                                <input type="text" class="form-control"  value="{{Auth::user()->country}}" name="country" placeholder="Enter Country" style="font-size:15px">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""><h3> pin Code </h3></label>
                                <input type="text" class="form-control"  value="{{Auth::user()->pincode}}" name="pincode" placeholder="Enter pin Code" style="font-size:15px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <div class="card">
                    <div class="card-body">
                      <h1>Order Details</h1>
                      <hr>
                      <table class="table table-striped table-pordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitems as $item)
                            <tr>
                                <td>{{$item->products->name}}</td>
                                <td>{{$item->prod_qty}}</td>
                                <td>{{$item->products->selling_price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <hr>
                      <button type="submit" style="font-size: 15px" class="btn btn-primary float-end">place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
