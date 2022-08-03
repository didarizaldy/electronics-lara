@extends('layouts.main')

@section('konten')
    <div class="jumbotron bg-light">
        <h1 class="display-4">{{ $name }}</h1>
        <p class="lead">{{ $title }}</p>
        <hr class="my-4">
        <p>{{ $body }}</p>
    </div>
@endsection
