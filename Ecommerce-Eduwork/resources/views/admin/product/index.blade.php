@extends('layouts.admin.index')
@section('menuProduct', 'active')
@section('title', 'Product')
@section('content')
<div id="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h4>Product Page</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Original Price</th>
                                <th>Selling Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $i=1;
                            ?>
                            @foreach ( $product as $data )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->category->name }}</td>
                                <td>{{ $data->original_price }}</td>
                                <td>{{ $data->selling_price }}</td>
                                <td>
                                    <img src="{{ asset('/storage/product/'. $data->image) }}" class="image-size" alt="mobile">
                                </td>
                                <td>
                                    <a href="{{url('/admin/edit-product/'.$data->id)}}" class="btn btn-primary" id="edit"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ url('/admin/delete-product/'.$data->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')"><i class="bi bi-trash"></i></a>
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