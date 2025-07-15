<div class="mt-4">
    <h5>📦 Lista de Productos</h5>
    @if (session()->has('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr>
                    <td>{{ $producto->sku }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->cantidad }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay productos registrados aún.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

