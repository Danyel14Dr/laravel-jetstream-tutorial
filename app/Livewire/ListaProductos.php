<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class ListaProductos extends Component
{
    public $productos;
    public $modoEdicion = false;
    public $producto_id = null;

    public $sku;
    public $descripcion;
    public $categoria;
    public $cantidad;

    protected $listeners = ['productoAgregado' => 'render'];

    public function render()
    {
        $this->productos = Producto::latest()->get();
        return view('livewire.lista-productos');
    }
}

