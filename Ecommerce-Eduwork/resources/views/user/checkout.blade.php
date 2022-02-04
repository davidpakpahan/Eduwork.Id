@extends('layouts.user.index')
@section('title', 'Checkout')
@section('menuCheckout', 'active')
@section('content')
    <div class="container">
        <form action="{{ url('/orderNow') }}" method="post">
            @csrf
            <div class="row text-center">
                <div class="col-md-7 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <h6>Shipping address</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class= "form-control" name="firstName"  placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class= "form-control" name="lastName" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="phoneNumber" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="address1" placeholder="Address 1">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="address2" placeholder="Address 2">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="city" placeholder="City">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="state" placeholder="State">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="country" placeholder="Country">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" class= "form-control" name="posCode" placeholder="POS Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <h6>Order Details</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $data )
                                    <tr>
                                        <td>{{ $data->products->name }}</td>
                                        <td>{{ $data->productQty }}</td>
                                        <td>{{ $data->products->selling_price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-outline-success me-3">Order Now</button>
                            <a href="{{ url('/cart') }}" class="btn btn-outline-danger">Back Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection