<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $trendingProduct = Product::where('trending', '1')->take(15)->get();
        $popularCategory = Category::where('popular', '1')->take(15)->get();
        return view('user.frontend', compact('trendingProduct','popularCategory'));
    }

    public function category()
    {
        $category = Category::where('status', '0')->get();
        return view('user.category', compact('category'));
    }

    public function viewCategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();
            $product = Product::where('category_id', $category->id)->where('status', '0')->get();
            return view('user.product.index', compact('category', 'product'));

        } else
        {
            return redirect('/')->with('status', 'Slug tidak ditemukan');
        }

    }

    public function viewProduct($categorySlug, $productSlug)
    {
        if(Category::where('slug', $categorySlug)->exists())
        {
            if(Product::where('slug', $productSlug)->exists())
            {
                $product = Product::where('slug', $productSlug)->first();
                return view('user.product.view', compact('product'));
            } else
            {
                return redirect('/')->with('status', 'Alamat Url bermasalah');
            }
        }
    }
}
