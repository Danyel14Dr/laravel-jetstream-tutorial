<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class ProductoManager extends Component
{
    public $productos;
    public $sku, $descripcion, $categoria, $cantidad;
    public $producto_id = null;
    public $modoEdicion = false;

    public function mount()
    {
        $this->cargarProductos();
    }

    public function cargarProductos()
    {
        $this->productos = Producto::all();
    }

    public function guardar()
    {
        $this->validate([
            'sku' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
        ]);

        Producto::create([
            'sku' => $this->sku,
            'descripcion' => $this->descripcion,
            'categoria' => $this->categoria,
            'cantidad' => $this->cantidad,
        ]);

        session()->flash('success', '✅ Producto guardado correctamente.');

        $this->reset(['sku', 'descripcion', 'categoria', 'cantidad']);
        $this->cargarProductos();
    }

    public function editar($id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $this->sku = $producto->sku;
            $this->descripcion = $producto->descripcion;
            $this->categoria = $producto->categoria;
            $this->cantidad = $producto->cantidad;
            $this->producto_id = $producto->id;
            $this->modoEdicion = true;
        }
    }

    public function actualizar()
    {
        $this->validate([
            'sku' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
        ]);

        $producto = Producto::find($this->producto_id);

        if ($producto) {
            $producto->update([
                'sku' => $this->sku,
                'descripcion' => $this->descripcion,
                'categoria' => $this->categoria,
                'cantidad' => $this->cantidad,
            ]);

            session()->flash('success', '✅ Producto actualizado correctamente.');

            $this->reset(['sku', 'descripcion', 'categoria', 'cantidad', 'producto_id', 'modoEdicion']);
            $this->cargarProductos();
        } else {
            session()->flash('error', '❌ Producto no encontrado.');
        }
    }

    public function cancelarEdicion()
    {
        $this->reset(['sku', 'descripcion', 'categoria', 'cantidad', 'producto_id', 'modoEdicion']);
    }

    public function eliminar($id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->delete();
            session()->flash('success', '🗑 Producto eliminado.');
            $this->cargarProductos();
        }
    }

    public function render()
    {
        return view('livewire.producto-manager');
    }
}

