@extends('layouts.admin.index')
@section('menuaddProduct', 'active')
@section('title', 'Add Product')
@section('content')
<div id="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h4>Add Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/insert-product/') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-select form-select-lg mb-3 text-center" name="category_id" aria-label=".form-select-lg example">
                                    <option value="">Select Category</option>
                                    @foreach ($category as $data )
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control  @error('slug')is-invalid @enderror" name="slug" id="slug">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="small_description">Small Description</label>
                                <textarea name="small_description" id="small_description" rows="3" class="form-control @error('small_description')is-invalid @enderror"></textarea>
                                @error('small_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control @error('description')is-invalid @enderror"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="original_price">Original Price</label>
                                <input type="number" class="form-control @error('original_price')is-invalid @enderror" name="original_price" id="original_price">
                                @error('original_price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="selling_price">Selling Price</label>
                                <input type="number" class="form-control @error('selling_price')is-invalid @enderror" name="selling_price" id="selling_price">
                                @error('selling_price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tax">Tax</label>
                                <input type="number" class="form-control @error('tax')is-invalid @enderror" name="tax" id="tax">
                                @error('tax')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="qty">Quantity</label>
                                <input type="number" class="form-control @error('qty')is-invalid @enderror" name="qty" id="qty">
                                @error('qty')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label>
                                <input type="checkbox" name="status" id="status">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="trending">Trending</label>
                                <input type="checkbox" name="trending" id="trending">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" class="form-control @error('meta_title')is-invalid @enderror" name="meta_title" id="meta_title">
                                @error('meta_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control @error('meta-description')is-invalid @enderror"></textarea>
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keywords">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control @error('meta_keywords')is-invalid @enderror"></textarea>
                                @error('meta_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection