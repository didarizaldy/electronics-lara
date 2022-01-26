@extends('layouts.main')

@section('konten')
    <article class="mb-5">
        <h2>{{ $product->title }}</h2>
        <p>Penjual :
            <a href="/seller/{{ $product->user->username }}" class="text-decoration-none">
                {{ $product->user->name }}
            </a>Category :
            <a href="/categories/{{ $product->category->slug }}" class="text-decoration-none">
                {{ $product->category->name }}
            </a>
        </p>
        {!! $product->body !!}
    </article>

    <a href="/products">Kembali Ke Produk</a>
@endsection
