<?php

namespace App\Http\Controllers; 
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function model_pagination () {

        $product = Product::paginate(15);
        return view('model.home', compact('product'));
    }
}
