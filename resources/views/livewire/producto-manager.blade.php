<div>
    <h2 class="mb-3"><i class="bi bi-box-seam"></i> Registrar Producto</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="{{ $modoEdicion ? 'actualizar' : 'guardar' }}">
        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" wire:model="sku" placeholder="SKU">
            </div>
            <div class="col">
                <input type="text" class="form-control" wire:model="descripcion" placeholder="Descripción">
            </div>
            <div class="col">
                <input type="text" class="form-control" wire:model="categoria" placeholder="Categoría">
            </div>
            <div class="col">
                <input type="number" class="form-control" wire:model="cantidad" placeholder="Cantidad">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-{{ $modoEdicion ? 'success' : 'primary' }}">
                    @if($modoEdicion)
                        <i class="bi bi-pencil"></i> Actualizar
                    @else
                        <i class="bi bi-plus"></i> Agregar
                    @endif
                </button>
            </div>
        </div>
    </form>


    <h5 class="mt-4"><i class="bi bi-boxes"></i> Lista de Productos</h5>

    <table class="table table-bordered mt-2">
        <thead class="table-light">
            <tr>
                <th>SKU</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr>
                    <td>{{ $producto->sku }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        <button wire:click="editar({{ $producto->id }})" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button onclick="confirm('¿Eliminar producto?') || event.stopImmediatePropagation()" wire:click="eliminar({{ $producto->id }})" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">No hay productos registrados aún.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

