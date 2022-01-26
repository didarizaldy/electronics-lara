@extends('layouts.main')

@section('konten')
    @foreach ($products as $product)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                    {{ $product->title }}
                </a>
            </h2>
            <p>Penjual :
                <a href="/seller/{{ $product->user->username }}" class="text-decoration-none">
                    {{ $product->user->name }}
                </a>Category :
                <a href="/categories/{{ $product->category->slug }}" class="text-decoration-none">
                    {{ $product->category->name }}
                </a>
            </p>
            <p>{{ $product->excerpt }}</p>
            <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                Read more..
            </a>
        </article>
    @endforeach
@endsection
