@extends('dashboard.layouts.main')

@section('konten')
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Hallo, {{ auth()->user()->name }}</h1>
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
      </div>
    </div>
  </div>
@endsection
