@extends('frontend.frontend-model.frontend')
@section('menuOneToMany', 'active')
@section('title', 'One To Many')
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h4>Halaman Kategori</h4>
        </div>
        <div class="button d-flex justify-content-center p-3">
            <button class="btn btn-primary">
                <a href="{{ route('category.satu') }}" class="text-white">Frontend Web Developer</a>
            </button>
            <button class="btn btn-primary">
                <a href="{{ route('category.dua') }}" class="text-white">Backend Web Developer</a>
            </button>
            <button class="btn btn-primary">
                <a href="{{ route('category.tiga') }}" class="text-white">Fullstack Web Developer</a>
            </button>
            <button class="btn btn-primary">
                <a href="{{ route('category.empat') }}" class="text-white">Android Developer</a>
            </button>
            <button class="btn btn-primary">
                <a href="{{ route('category.lima') }}" class="text-white">Digital Marketing</a>
            </button>
            <button class="btn btn-primary">
                <a href="{{ route('category.enam') }}" class="text-white">Data Siences</a>
            </button>
        </div>
    </div>
@endsection