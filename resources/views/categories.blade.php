@extends('layouts.main')

@section('konten')
    <h3 class="mb-5">Kategori Produk</h4>
        @foreach ($categories as $category)
            <ul>
                <li>
                    <h2>
                        <a href="/categories/{{ $category->slug }}">
                            {{ $category->name }}
                        </a>
                    </h2>
                </li>
            </ul>
        @endforeach
    @endsection
