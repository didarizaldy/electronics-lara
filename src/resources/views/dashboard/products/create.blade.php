@extends('dashboard.layouts.main')

@section('konten')
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Buat Produk Baru</h1>
    </div>
    <div class="col-lg-8">
      <form method="post" action="/dashboard/products">
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control @error('title')is-invalid              
          @enderror" id="title"
            name="title" required autofocus value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="slug">URL</label>
          <input type="text" class="form-control @error('slug')is-invalid              
          @enderror" id="slug"
            name="slug" required value="{{ old('slug') }}" disabled readonly>
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="category">Kategori</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="body">Deskripsi Produk</label>
          @error('body')
            <p class="text-danger small">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div><button type="submit" class="btn btn-primary">Posting Produk</button>
      </form>
    </div>
  </div>
@endsection
