@extends('layouts.user.index')
@section('menuCategory', 'active')
@section('title')
{{ $category->name }}
@endsection
@section('content')
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header bg-dark">
                    <h4 class="text-light text-center">{{ $category->name }}</h4>
                </div>
                <div class="row">
                    @foreach ($product as $data )
                        <div class="col-md-3 mt-3">
                            <a href="{{ url('/category/'.$category->slug.'/'.$data->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('storage/product/'.$data->image) }}" alt="image-trend">
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
</div>
@endsection