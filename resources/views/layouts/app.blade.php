<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mi Aplicación')</title>

  {{-- Bootstrap + íconos --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Livewire Styles deben ir aquí --}}
  @livewireStyles

  <style>
    body {
      background: #f5f7fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  </style>
</head>
<body>

  {{-- Navbar compartido --}}
  @include('layouts.navbar')

  {{-- Contenido dinámico --}}
  <div class="container py-4">
    @yield('content')
  </div>

  {{-- Footer global --}}
  <footer class="text-center text-muted py-4">
    <small>&copy; 2025 - Laravel Jetstream | Actividad Académica UNIR</small>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Livewire Scripts deben ir justo antes de cerrar body --}}
  @livewireScripts

</body>
</html>

