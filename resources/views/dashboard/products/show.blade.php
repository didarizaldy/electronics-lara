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
        <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning">
          <i class="far fa-edit"></i>
          Edit
        </a>
        <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus ddata ?')"><i
              class="far fa-trash-alt"></i> Hapus</button>
        </form>
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
