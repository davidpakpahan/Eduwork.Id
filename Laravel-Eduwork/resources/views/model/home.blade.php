@extends('frontend.frontend-model.frontend')
@section('menuHome', 'active')
@section('title', 'Model and Pagination')
@section('content')
<div class="container-fluid">
       <div class="card mt-4">
           <div class="card-header text-center">
                <h4>Model and Pagination Laravel Eduwork</h4>
           </div>
           <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Varian</th>
                    <th>Description</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($product as $data )
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->categories->position }}</td>
                        <td>{{ $data->code }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->stock }}</td>
                        <td>{{ $data->varian }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->image }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
       </div>
</div>
    <div class="pagination justify-content-center pagination-lg mt-3">
        {{ $product->links() }}
    </div>
@endsection