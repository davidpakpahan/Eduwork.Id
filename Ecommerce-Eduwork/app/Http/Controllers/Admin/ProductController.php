<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function product() 
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image|max:1000',
        ]);

        $slug = Str::slug($request['name']);
        $extFile = $request->image->getClientOriginalExtension();
        $nameFile = $slug."-".time().".".$extFile;
        $path = $request->image->storeAs('/product', $nameFile);

        $product = new Product();
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status') == TRUE ? '1':'0';
        $product->trending = $request->input('trending') == TRUE ? '1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->image = $nameFile;
        $product->save();
        return redirect('/admin/product')->with('status', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasFile('image'))
        {
            $slug = Str::slug($request['name']);
            $extFile = $request->image->getClientOriginalExtension();
            $nameFile = $slug."-".time().".".$extFile;
            $path = $request->image->storeAs('/product', $nameFile);
        } else
        {
            $nameFile=$product->image;
        }
        $validateData ['image'] = $nameFile;
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->tax = $request->input('tax');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status') == TRUE ? '1':'0';
        $product->trending = $request->input('trending') == TRUE ? '1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->image = $nameFile;
        $product->update($validateData);
        return redirect('/admin/product')->with('status', 'Produk berhasil di update');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $path = 'storage/product/'.$product->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
       
        $product->delete();
        return redirect('/admin/product')->with('status', 'Produk berhasil di hapus');
    }
}

