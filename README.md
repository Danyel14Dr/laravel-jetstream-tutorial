<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Este proyecto es una implementación práctica usando **Laravel 12** con **Jetstream + Livewire**, orientado al aprendizaje y desarrollo rápido de funcionalidades modernas como:

- Autenticación de usuarios
- Perfil de usuario
- Gestión de productos con Livewire
- Panel de administración básico

---

## 🚀 Tecnologías utilizadas

- PHP 8.2
- Laravel 12.x
- Jetstream
- Livewire
- Tailwind CSS
- Vite

---

## 🧱 Estructura del proyecto

- `resources/views/` → Vistas Blade y componentes Livewire
- `app/Livewire/` → Componentes dinámicos con Livewire
- `app/Models/Producto.php` → Modelo de ejemplo para CRUD
- `routes/web.php` → Rutas del sistema
- `resources/views/layouts/navbar.blade.php` → Barra de navegación adaptada

---

## 🛠️ Funcionalidades

- Registro, inicio de sesión, verificación y autenticación
- Panel de usuario (`/dashboard`) usando Jetstream
- Crear, editar, listar y eliminar productos
- Confirmaciones antes de eliminar
- Validaciones automáticas con Livewire

---

## 📦 Instalación rápida

```bash
# Clonar el repositorio
git clone https://github.com/Danyel14Dr/laravel-jetstream-tutorial.git
cd laravel-jetstream-tutorial

# Instalar dependencias
composer install
npm install && npm run dev

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Ejecutar migraciones
php artisan migrate

# Iniciar servidor
php artisan serve