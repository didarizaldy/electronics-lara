@extends('dashboard.layouts.main')

@section('konten')
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Hallo, {{ auth()->user()->name }}</h1>
    </div>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        @if (session()->has('delete'))
          <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
          </div>
        @endif
        @if (session()->has('edit'))
          <div class="alert alert-success" role="alert">
            {{ session('edit') }}
          </div>
        @endif
        <div class="table-responsive">
          <a href="/dashboard/products/create" class="btn btn-primary mb-3">Buat Produk Baru</a>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Produk</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->category->name }}</td>
                  <td>
                    <a href="/dashboard/products/{{ $product->slug }}" class="btn-sm btn-info"><i
                        class="far fa-eye"></i></a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn-sm btn-warning"><i
                        class="far fa-edit"></i></a>
                    <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn-sm btn-danger border-0"
                        onclick="return confirm('Apakah yakin menghapus data ?')"><i
                          class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-end">
          {{ $products->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection
