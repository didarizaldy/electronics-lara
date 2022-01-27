@extends('layouts.main')

@section('konten')
  <h1 class="mb-5">{{ $headtag }}</h1>

  @if ($products->count())
    <div class="card mb-3">
      {{-- <img src="https://source.unsplash.com/1200x400?{{ $products[0]->category->name }}" class="card-img-top"
        alt="{{ $products[0]->category->name }}"> --}}
      <img src="img/cover.jpg" alt="{{ $products[0]->category->name }}">
      <div class="card-body text-center">
        <h5 class="card-title">
          <a href="{{ $products[0]->title }}" class="text-decoration-none text-dark"></a>
        </h5>
        <p>
          <small class="text-muted">
            Penjual :
            <a href="/seller/{{ $products[0]->user->username }}" class="text-decoration-none">
              {{ $products[0]->user->name }}
            </a>Category :
            <a href="/categories/{{ $products[0]->category->slug }}" class="text-decoration-none">
              {{ $products[0]->category->name }}
            </a>
            <p>
              {{ $products[0]->created_at->diffForHumans() }}
            </p>
          </small>
        </p>
        <p class="card-text">{{ $products[0]->excerpt }}</p>
        <a href="/product/{{ $products[0]->slug }}" class="text-decoration-none btn btn-outline-primary">
          Detail Produk
        </a>
      </div>
    </div>
  @else
    <p class="fs-4 text-center">Produk yang kamu cari gada nih !</p>
  @endif

  <div class="container">
    <div class="row">
      @foreach ($products->skip(1) as $product)
        <div class="col-md-4 mb-3">
          <div class="card">
            {{-- <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $product->category->name }}"
              alt="{{ $product->category->name }}"> --}}
            <img class="card-img-top" src="img/kulkas2.jpg" alt="{{ $product->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p>
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
              </p>
              <p>
                {{ $product->excerpt }}
              </p>
              <a href="/product/{{ $product->slug }}" class="btn btn-primary">
                Detail Produk
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
