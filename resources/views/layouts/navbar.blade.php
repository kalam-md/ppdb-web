{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ?
: 'bg-white shadow' }}">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" width="55" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="mb-2 navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#agenda">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#ppdb">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#fasilitas">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#kontak">Kontak</a>
          </li>
        </ul>
        <div class="d-flex">
          @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
              <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
              <a href="{{ route('daftar') }}" class="ms-3 btn btn-primary">Daftar</a>
          @endauth
      </div>
    </div>
</nav>
{{-- Navbar --}}
