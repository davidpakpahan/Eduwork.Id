@extends('layouts.user.index')
@section('title', 'Cart')
@section('menuCart', 'active')
@section('content')
    <div class="container">
        <div class="card shadow my-3">
            <div class="card-header bg-dark">
                <h3 class="text-light text-center">Your Shopping List
                    <a href="{{ url('/category/')}}"><i class="bi bi-arrow-left float-start btn-outline-light p-2 rounded-3"></i></a>
                </h3>
            </div>
            <div class="card-body">
                @php $total = 0; @endphp
                @foreach ($cartItems as $data)
                    <div class="row productData">
                        <hr>
                        <div class="col-md-3 my-auto">
                            <h5>{{ $data->products->name }}</h5>
                        </div>
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('storage/product/'.$data->products->image) }}" height="70px" width="70px" alt="imageCart">
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>Rp.{{ $data->products->selling_price }}</h6>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="productId" value="{{ $data->productId }}">
                            @if($data->products->qty >= $data->productQty)
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text decrementBtn changeQty">-</button>
                                <input
                                type="text"
                                id="quantity"
                                name="quantity"
                                class="form-control text-center inputQty"
                                value="{{ $data->productQty }}">
                                <button class="input-group-text incrementBtn changeQty">+</button>
                            </div>
                            @php $total += $data->products->selling_price*$data->productQty; @endphp
                            @else
                           <h6> <s>Out Of Stock</s></h6>
                            @endif
                        </div>
                        <div class="col-md-2 my-3">
                            <button class="btn btn-danger deleteCartItem">Cancel <i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
               <div class="float-end">
                <span>
                    <h6 class="fw-bold bg-dark text-light p-3 my-auto rounded-3">Total Price : {{ $total }}
                    <a href="{{ url('/checkout') }}" class="btn btn-outline-success m-1">Go To Checkout</a>
                    </h6>
                </span>
               </div>
            </div>
        </div>
    </div>
@endsection