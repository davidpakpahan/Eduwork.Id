@extends('layouts.user.index')
@section('title', 'Category')
@section('menuCategory', 'active')
@section('content')
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="card-header bg-dark">
                       <h4 class="text-light text-center">All Category</h4>
                   </div>
                    <div class="row">
                        @foreach ($category as $data )
                            <div class="col-md-3 mt-3 rounded-3">
                                <a href="{{ url('/view-category/'.$data->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('storage/category/'.$data->image) }}" alt="image-trend">
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