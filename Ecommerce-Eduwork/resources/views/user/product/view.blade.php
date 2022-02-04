@extends('layouts.user.index')
@section('menuCategory', 'active')
@section('title', $product->name)
@section('content')
<div class="py-3 shadow-sm bg-dark text-white mt-3">
    <div class="container">
        <h6>
            {{ $product->category->name }} / {{ $product->name }}
        </h6>
    </div>
</div>
<div class="container">
    <div class="card-shadow productData">
        <div class="card-body">
            <div class="row text-light">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('storage/product/'.$product->image) }}" alt="productImage" class="w-100 rounded-3">
                </div>
                <div class="col-md-8">
                    <h2 class="mt-3">
                        {{ $product->name }}
                        @if ( $product->trending =='1')
                            <label class="float-end badge bg-danger trending_tag">Discount</label>
                        @endif
                    </h2>
                    <hr>
                    <label>Original Price : <s>Rp.{{ $product->original_price }}</s></label>
                    <label class="fw-bold">Discount Price : Rp.{{ $product->selling_price }}</label>
                    <div class="mt-3">
                        <label>Description :</label>
                        <p>
                            {{ $product->small_description }}
                        </p>
                    </div>
                    <hr>
                    @if ($product->qty > 0)
                        <label class="badge bg-success">Ready Stock</label>
                    @else
                        <label class="badge bg-danger">Out Of stock</label>
                    @endif
                    <div class="mt-2">
                        <div class="col-md-2">
                            <input type="hidden" class="productId" value="{{ $product->id }}">
                            <label for="quantity">Quantity</label>
                            <div class="input-group text-center mt-2">
                                <button class="input-group-text decrementBtn">-</button>
                                <input
                                type="text"
                                id="quantity"
                                class="form-control text-center inputQty"
                                name="quantity"
                                value="1">
                                <button class="input-group-text incrementBtn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10 mt-2">
                            <br>
                            @if ($product->qty > 0)
                            <button type="button" class="btn btn-primary me-3 addToCartBtn">Add to Cart <i class="bi bi-cart-fill"></i></button>
                            @endif
                            <button type="button" class="btn btn-success me-3">Add to Wishlist <i class="bi bi-heart-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection