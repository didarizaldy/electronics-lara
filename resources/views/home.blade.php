@extends('layouts.main')

@section('konten')
  {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/dapur.jpg" class="d-block w-100" alt="Kitchen Set">
                </div>
                <div class="carousel-item">
                    <img src="img/kulkas.jpg" class="d-block w-100" alt="Kulkas">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div> --}}
  <div class="jumbotron"
    style="background: url('img/cover.jpg') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container">
      <h1 class="text-lr">A Better Life With Electronics</h1>
      <p>
        Kami berkomitmen untuk menciptakan hidup dan dunia yang lebih baik,
        <br>
        serta berkontribusi untuk terus mengembangkan
        masyarakat
        <br>
        dan kebahagiaan manusia di seluruh Indonesia.
      </p>
      <p>
        <a class="btn btn-warning" href="/products" role="button">Produk &raquo;</a>
      </p>
    </div>
  </div>
@endsection
