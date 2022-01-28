@extends('dashboard.layouts.main')

@section('konten')
  <div class="container">
    <div class="row">
      <article class="mb-5">
        <h2>{{ $product->title }}</h2>
        <a href="/dashboard/products" class="btn btn-success">
          <i class="fas fa-chevron-left"></i>
          Kembali
        </a>
        <a href="" class="btn btn-warning">
          <i class="far fa-edit"></i>
          Edit
        </a>
        <a href="" class="btn btn-danger">
          <i class="far fa-trash-alt"></i>
          Hapus
        </a>
        <div class="my-3"></div>
        <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="img-fluid"
          alt="{{ $product->category->name }}">
        <article class="my-3">
          {!! $product->body !!}
        </article>
      </article>
    </div>
  </div>

@endsection
