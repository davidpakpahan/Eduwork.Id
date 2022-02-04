@extends('layouts.admin.index')
@section('menuCategory', 'active')
@section('title', 'Category')
@section('content')
<div id="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h4>Category Page</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $i=1;
                            ?>
                            @foreach ( $category as $data )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <img src="{{ asset('/storage/category/'. $data->image) }}" class="image-size" alt="mobile">
                                </td>
                                <td>
                                    <a href="{{ url('/admin/edit-category/'.$data->id) }}" class="btn btn-primary" id="edit"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ url('/admin/delete-category/'.$data->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection