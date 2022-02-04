@extends('layouts.user.index')
@section('title', 'E-Commerce Eduwork')
@section('menuHome', 'active')
@section('content')
@include('include.user.slide')
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="card-header bg-dark text-white text-center">
                <h4>Discount Products</h4>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($trendingProduct as $data )
                <div class="item mt-3">
                    <a href="{{ url('/category/'.$data->category->slug.'/'.$data->slug) }}">
                        <div class="card">
                            <div class="card-header text-center bg-danger">
                                <h4>Promo 02.02</h4>
                            </div>
                            <img src="{{ asset('storage/product/'.$data->image) }}" alt="image-trend" class="shadow-lg p-3">
                            <div class="card-body">
                                <h5>{{ $data->name }}</h5>
                                <span class="float-start">{{ $data->selling_price }}</span>
                                <span class="float-end"><s>{{ $data->original_price }}</s></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="card-header bg-dark text-white text-center">
                <h4>Popular Category</h4>
            </div>
            <div class="owl-carousel trending-carousel owl-theme">
                @foreach ($popularCategory as $data )
                <div class="item mt-3">
                    <a href="{{ url('/view-category/'.$data->slug) }}">
                        <div class="card">
                            <img src="{{ asset('storage/category/'.$data->image) }}" alt="image-trend" class="shadow-lg p-3 rounded">
                            <div class="card-body">
                                <h5>{{ $data->name }}</h5>
                                <p>
                                    {{ $data->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

