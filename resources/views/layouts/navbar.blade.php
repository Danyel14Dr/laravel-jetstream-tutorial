<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-box-seam"></i> Mi App</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('welcome') ? 'active fw-bold text-info' : '' }}" href="{{ route('welcome') }}">
            <i class="bi bi-house-door"></i> Inicio
          </a>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold text-info' : '' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('productos/crear') ? 'active fw-bold text-info' : '' }}" href="{{ url('/productos/crear') }}">
            <i class="bi bi-plus-circle"></i> Nuevo Producto
          </a>
        </li>
        @endauth
      </ul>

      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="dropdown-item" type="submit">
                  <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">
            <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
          </a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

