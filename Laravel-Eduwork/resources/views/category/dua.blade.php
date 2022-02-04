@extends('frontend.frontend-model.frontend')
@section('content')
@section('title', 'Backend Web Developer')
<div class="container text-center p-4">
  <h1>Data Siswa Backend Web Developer</h1>
  <div class="row">
    <div class="m-auto">
      <div class="list-group">
        @foreach ($result as $row)
          <li class="list-group-item">
            {{ $row->nameProduct }} ({{ $row->codeProduct }}), {{ $row->positionCategory }} ({{ $row->idProduct }})
          </li>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection