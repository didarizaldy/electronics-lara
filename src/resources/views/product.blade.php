@extends('layouts.main')

@section('konten')
  <article class="mb-5">
    <h2>{{ $product->title }}</h2>
    <small class="text-muted">
      Penjual :
      <a href="/products?user={{ $product->user->username }}" class="text-decoration-none">
        {{ $product->user->name }}
      </a>
      Kategori :
      <a href="/products?category={{ $product->category->slug }}" class="text-decoration-none">
        {{ $product->category->name }}
      </a>
      <p>
        {{ $product->created_at->diffForHumans() }}
      </p>
    </small>
    <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="img-fluid"
      alt="{{ $product->category->name }}">
    <article class="my-3">
      {!! $product->body !!}
    </article>
  </article>

  <a href="/products" class="text-decoration-none">Kembali Ke Produk</a>
@endsection
