@extends('layouts.admin.index')
@section('menuaddCategory', 'active')
@section('title', 'Add Category')
@section('content')
<div id="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h4>Edit and Update Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/admin/update-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" value="{{ $category->name }}" class="form-control @error('name')is-invalid @enderror" name="name" id="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" value="{{ $category->slug }}" class="form-control  @error('slug')is-invalid @enderror" name="slug" id="slug">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control @error('description')is-invalid @enderror">{{ $category->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label>
                                <input type="checkbox" {{ $category->status =="1" ? 'checked':'' }} name="status" id="status">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="popular">Popular</label>
                                <input type="checkbox" {{ $category->popular =="1" ? 'checked':'' }} name="popular" id="popular">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" value="{{ $category->meta_title }}" class="form-control @error('meta_title')is-invalid @enderror" name="meta_title" id="meta_title">
                                @error('meta_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control @error('meta-description')is-invalid @enderror">{{ $category->meta_description }}</textarea>
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keywords">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control @error('meta_keywords')is-invalid @enderror">{{ $category->meta_keywords }}</textarea>
                                @error('meta_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="image-edit">
                                @if ($category->image)
                                <img src="{{ asset('/storage/category/'.$category->image) }}" alt="Category-Image">
                            @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
