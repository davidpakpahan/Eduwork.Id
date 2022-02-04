<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('userId', Auth::id())->get();
        return view('user.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('productId');
        $productQty = $request->input('productQty');

        if(Auth::check())
        {
            $productCheck = Product::where('id', $productId)->first();
            if($productCheck)
            {
                if(Cart::where('productId', $productId)->where('userId', Auth::id())->exists())
                {
                    return response()->json(['status' =>$productCheck->name." sudah ada di keranjang :)"]);
                }
                else
                {
                    $CartItem = new Cart();
                    $CartItem->productId = $productId;
                    $CartItem->userId = Auth::id();
                    $CartItem->productQty = $productQty;
                    $CartItem->save();
                    return response()->json(['status' =>$productCheck->name." Berhasil ditambahkan ke dalam keranjang :)"]);
                };
            }
        }
        else
        {
            return response()->json(['status' => 'Silahkan login terlebih dahulu :)']);
        }
    }

    public function updateCart(Request $request)
    {
        $productId = $request->input('productId');
        $productQty = $request->input('productQty');

        if(Auth::check())
        {
            if(Cart::where('productId', $productId)->where('userId', Auth::id())->exists())
            {
                $cart = Cart::where('productId', $productId)->where('userId', Auth::id())->first();
                $cart->productQty = $productQty;
                $cart->update();
                return response()->json(['status' =>"Jumlah Produk di update :)"]);
            }
        }
    }

    public function deleteProduct(Request $request)
    {
        $productId = $request->input('productId');
        if(Auth::check())
        {
            if(Cart::where('productId', $productId)->where('userId', Auth::id())->exists())
            {
                $cartItem = Cart::where('productId', $productId)->where('userId', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' =>"Silahkan cari produk lain :)"]);
            }
        }
        else
        {
            return response()->json(['status' => 'Silahkan login terlebih dahulu :)']);
        }
    }
}
