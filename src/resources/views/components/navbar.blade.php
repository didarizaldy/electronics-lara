<nav class="navbar navbar-expand-lg"">
    <a class=" navbar-brand text-decoration-none text-dark" href="{{ url('/') }}">
  <img class="mb-2 my-0 mr-md-auto"
    src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/samsung/312/high-voltage_26a1.png"
    alt="Logo" width="24" height="24">Electronics</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      @auth
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/products') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/categories') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/about') }}">Tentang Kami</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/products') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/categories') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-none text-dark" href="{{ url('/about') }}">Tentang Kami</a>
        </li>
      @endauth
    </ul>
  </div>
  <div class="mr-2">
    <form action="/products">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif

      @if (request('user'))
        <input type="hidden" name="user" value="{{ request('user') }}">
      @endif
      <div class="input-group mr-sm-2">
        <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </form>
  </div>
  {{-- <form class="form-inline ms-auto mr-2">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari.." aria-label="Search">
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
  </form> --}}
  @auth
    <form action="/logout" method="post">
      @csrf
      <button class="ms-auto btn btn-outline-warning my-2" type="submit">
        <i class="bi bi-box-arrow-left"></i> Logout
      </button>
    </form>
  @else
    <a href="/login" class="ms-auto btn btn-outline-warning my-2">
      <i class="bi bi-box-arrow-in-right"></i> Login
    </a>
  @endauth
</nav>
