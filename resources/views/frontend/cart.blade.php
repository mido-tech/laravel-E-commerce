@extends('frontend.app')

@section('title')
    My Cart
@endsection

@section('content')

<div class= "container my-5 mt-10 mb-10">
    <div class="card shadow product_data">
        @if ($cartitems->count() > 0)
        <div class="card-body">
            @php $total= 0; @endphp
            @foreach ($cartitems as $item)
            <div class="row pb-5">
                <div class="col-md-2">
                    <img src="{{asset('assets/uploads/products/'.$item->products->image)}}" height="70px" width="70px" alt="Image here">
                </div>
                <div class="col-md-5">
                    <h3>{{$item->products->name}}</h3>
                </div>
                <div class="col-md-5 my-auto">
                    <h3> Rs {{$item->products->selling_price}}</h3>
                </div>
                <div class="col-md-3">
                    <input type="hidden" class="prod_id">
                    <span class="minus">-</span>
                    <input type="text" class="num qty_input" value="{{$item->prod_qty}}">
                    <span class="plus">+</span>


                </div>
                <div class="col-md-5">
                    <form action="{{ url('delete-card-item/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="font-size: 15px" type="submit" class="btn btn-danger delete-cart-item">
                            <i class="fa fa-trash"></i> Remove
                        </button>
                    </form>
                 </div>
            </div>
            @php $total +=$item->products->selling_price * $item->prod_qty ; @endphp
            @endforeach
        </div>
        <div class="card-footer">
            <h6 style="font-size: 20px"> Total price : Rs {{$total}} </h6>

            <a href="{{url('checkout')}}" class="btn btn-outline-sucsess float-end" style="font-size: 20px"> proceed to checkout</a>

    </div>
    @else
    <div class="cart-body text-center">
        <h2> Your <i class="fa fa-shopping-cart"></i> Cart Is Empty</h2>
        <a href="{{url('category')}}" class="btn btn-outline-primary float-end"> Continue Shopping </a>
            </div>
        @endif
    </div>
</div>
@endsection
