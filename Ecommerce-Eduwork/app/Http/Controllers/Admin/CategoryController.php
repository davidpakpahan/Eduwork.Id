<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function dashboard()
    {
            return view('admin.index');
    }

    public function category()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image|max:1000',
        ]);

        $slug = Str::slug($request['name']);
        $extFile = $request->image->getClientOriginalExtension();
        $nameFile = $slug."-".time().".".$extFile;
        $path = $request->image->storeAs('/category', $nameFile);
       

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->image = $nameFile;
        
        $category->save();
        return redirect('/admin/category')->with('status', 'Kategori berhasil ditambahkan');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
            $slug = Str::slug($request['name']);
            $extFile = $request->image->getClientOriginalExtension();
            $nameFile = $slug."-".time().".".$extFile;
            $path = $request->image->storeAs('/category', $nameFile);
        } else
        {
            $nameFile=$category->image;
        }
        $validateData ['image'] = $nameFile;
        // $validateData['image] = $nameFile;
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update($validateData);
        return redirect('/admin/category')->with('status', 'Kategori berhasil di update');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path = 'storage/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/admin/category')->with('status', 'Kategori berhasil di hapus');
    }
}
