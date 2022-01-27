@extends('layouts.main')

@section('konten')
  <article class="mb-5">
    <h2>{{ $product->title }}</h2>
    <small class="text-muted">
      Penjual :
      <a href="/seller/{{ $product->user->username }}" class="text-decoration-none">
        {{ $product->user->name }}
      </a>
      Kategori :
      <a href="/categories/{{ $product->category->slug }}" class="text-decoration-none">
        {{ $product->category->name }}
      </a>
      <p>
        {{ $product->created_at->diffForHumans() }}
      </p>
    </small>
    <div class="mt-5">
      {!! $product->body !!}
    </div>
  </article>

  <a href="/products" class="text-decoration-none">Kembali Ke Produk</a>
@endsection
