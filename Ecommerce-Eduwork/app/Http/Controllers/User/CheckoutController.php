<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $oldCartItems = Cart::where('userId', Auth::id())->get();
        foreach($oldCartItems as $data)
        {
            if(!Product::where('id', $data->productId)->where('qty','>=', $data->productQty)->exists())
            {
                $removeItem = Cart::where('userId', Auth::id())->where('productId', $data->productId)->first();
                $removeItem->delete();
            }
        }

        $cartItems = Cart::where('userId', Auth::id())->get();
        return view('user.checkout', compact('cartItems'));
    }
}