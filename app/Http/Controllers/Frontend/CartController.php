<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function addProduct(Request $request)
    {
        $productId = $request->input('product_id');
        $productQty = $request->input('product_qty');

        if (Auth::check()) {
            $product = Product::find($productId);

            if ($product) {
                $userId = Auth::id();

                if (Cart::where('prod_id', $productId)->where('user_id', $userId)->first()) {
                    return response()->json(['status' => $product->name . ' is already added to cart']);
                } else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $productId;
                    $cartItem->user_id = $userId;
                    $cartItem->prod_qty = $productQty;
                    $cartItem->save();

                    return response()->json(['status' => $product->name . ' has been added to cart']);
                }
            }
        } else {
            return response()->json(['status' => 'Please login to continue']);
        }
    }

    public function viewcart()
    {
        $cartitems = cart::where('user_id', auth::id())->get();
        return view('frontend.cart', compact('cartitems'));
    }

    function destroy($id){
        $cart_del = Cart::find($id);
        $cart_del->delete();
        return redirect('/cart')->with('status', 'DELETED');
    }
};
