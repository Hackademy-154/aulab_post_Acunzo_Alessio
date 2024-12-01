<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">The Aulab Post</a>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
    </li>
    <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
</li>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto">
        @auth
        @if(Auth::user()->is_writer)
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        @endif
          <li class="nav-item dropdown">
            @if (Auth::user()->is_revisor)
            <li><a class="dropdown-item" href="{{ route('revisor.dashboard')}}">Dashboard Revisor</a></li>
            @endif
            <i class="bi bi-person-circle me-2"></i>Profilo</a></li>
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                  <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
                @if (Auth::user()->is_admin)
                <li>
                  <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                </li>
                @endif
                @if (Auth::user()->is_writer)
                <li>
                  <a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a>
                </li>
                @endif
                <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        @endauth
        @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto, Ospite
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('register') }}"><i class="bi bi-person-plus me-2"></i>Registrati</a></li>
              <li><a class="dropdown-item" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right me-2"></i>Accedi</a></li>
            </ul>
          </li>
        @endguest
      </ul>
      <form action="{{ route('article.search') }}" method="GET" class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>
