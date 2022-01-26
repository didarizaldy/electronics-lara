@extends('layouts.main')

@section('konten')
    <h2 class="mb-5">Kategori Produk : {{ $category }}</h2>
    @foreach ($products as $product)
        <article class="mb-5">
            <h2>
                <a href="/product/{{ $product->slug }}">{{ $product->title }}</a>
            </h2>
            <h5>Category : {{ $product->category->name }}</h5>
            <p>{{ $product->excerpt }}</p>
        </article>
    @endforeach
@endsection
