<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
       
        return view('controller.home', ['title' => 'Home Controller']);
    }

    public function product () {
        $title['title'] = 'Product Controller';
        return view('controller.product', $title);
    }

    public function detailProduct () {
        $data = ['title' => 'Detail Product Controller'];
        return view('controller.detail-product', $data);
    }

    public function cart () {
        $data = ['title' => 'Cart Controller'];
        return view('controller.cart', $data);
    }

    public function checkout () {
        $data = ['title' => 'Checkout Controller'];
        return view('controller.checkout', $data);
    }

    public function checkoutSuccess () {
        $data = ['title' => 'Checkout Success Controller'];
        return view('controller.checkout-success', $data);
    }
}
