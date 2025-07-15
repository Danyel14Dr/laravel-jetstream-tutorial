<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido - Proyecto Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f5f7fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .hero {
      background: linear-gradient(to right, #1e293b, #0f172a);
      color: white;
      padding: 60px 20px;
      border-radius: 12px;
    }
    .icono {
      font-size: 1.4rem;
      color: #0ea5e9;
      margin-right: 8px;
    }
    .top-right {
      position: absolute;
      right: 20px;
      top: 20px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-box-seam"></i> Mi App</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'active fw-bold text-info' : '' }}" href="{{ url('/dashboard') }}">
      <i class="bi bi-house-door"></i> Inicio
    </a>
  </li>
  @auth
  <li class="nav-item">
    <a class="nav-link {{ Request::is('productos/crear') ? 'active fw-bold text-info' : '' }}" href="{{ url('/productos/crear') }}">
      <i class="bi bi-plus-circle"></i> Nuevo Producto
    </a>
  </li>
  @endauth
</ul>


      <ul class="navbar-nav">
        @auth
          @php
            $name = Auth::user()->name;
            $initials = collect(explode(' ', $name))->map(fn($n) => strtoupper($n[0]))->join('');
          @endphp
          <li class="nav-item dropdown">
            <button class="btn btn-primary dropdown-toggle rounded-circle fw-bold"
                    type="button"
                    id="userDropdown"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="width: 42px; height: 42px; padding: 0; font-size: 0.95rem;">
              {{ $initials }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
          @endif
        @endauth
      </ul>
    </div>
  </div>
</nav>

  <div class="container my-5">
    <div class="hero text-center shadow">
      <h1 class="display-5"><i class="bi bi-terminal"></i> Proyecto Laravel 12 con Jetstream</h1>
      <p class="lead">Actividad 2: Tutorial de una tecnología/framework</p>
    </div>

    <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-person"></i> Datos del Alumno</h5>
            <ul class="list-unstyled mb-4">
              <li><i class="icono bi bi-person-circle"></i><strong>Nombre:</strong> Daniel Deaquino Hernández</li>
              <li><i class="icono bi bi-laptop"></i><strong>Carrera:</strong> Ingeniería en Sistemas Computacionales</li>
              <li><i class="icono bi bi-people"></i><strong>Grupo:</strong> 270 (8vo Cuatrimestre)</li>
            </ul>

            <h5 class="card-title"><i class="bi bi-building"></i> Institución</h5>
            <ul class="list-unstyled mb-4">
              <li><i class="icono bi bi-mortarboard-fill"></i><strong>Colegio:</strong> UNIR México</li>
              <li><i class="icono bi bi-journal-code"></i><strong>Materia:</strong> Desarrollo de Aplicaciones en Red</li>
              <li><i class="icono bi bi-person-badge-fill"></i><strong>Docente:</strong> Edgar Germán Molina Madrigal</li>
            </ul>

            <div class="text-center">
              <a href="https://github.com/Danyel14Dr/laravel-jetstream-tutorial" target="_blank" class="btn btn-outline-primary">
                <i class="bi bi-github"></i> Ver repositorio en GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center text-muted py-4">
    <small>&copy; 2025 - Laravel Jetstream | Actividad Académica UNIR</small>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

