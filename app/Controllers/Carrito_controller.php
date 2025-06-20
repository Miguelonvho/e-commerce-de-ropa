<?php

namespace App\Controllers;

use App\Models\Producto_Model;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;
use CodeIgniter\Controller;

class Carrito_controller extends Controller
{
    protected $cart;
    protected $session;


    public function __construct()
    {
        helper(['form', 'url', 'cart']);
        $this->cart = \Config\Services::cart();
        $this->session = session();
    }

    public function agregar()
    {
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        $productoModel = new Producto_Model();

        $idProducto = $request->getPost('id');
        $cantidadNueva = (int) $request->getPost('cantidad') ?? 1;

        // Buscar el producto en la base de datos
        $producto = $productoModel->find($idProducto);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        $producto = (array) $producto;

        // Calcular cuántas unidades ya hay en el carrito
        $cantidadEnCarrito = 0;
        foreach ($cart->contents() as $item) {
            if ($item['id'] == $idProducto) {
                $cantidadEnCarrito += (int) $item['qty'];
            }
        }

        $stockDisponible = (int) $producto['stock'];

        // Verificar si se supera el stock disponible
        if (($cantidadEnCarrito + $cantidadNueva) > $stockDisponible) {
            return redirect()->back()->with('error', 'No hay suficiente stock disponible para este producto');
        }

        // Agregar al carrito
        $cart->insert([
            'id' => $producto['id_producto'],
            'qty' => $cantidadNueva,
            'price' => $producto['precio_venta'],
            'name' => $producto['nombre_prod'],
            'options' => [
                'imagen' => $producto['imagen']
            ]
        ]);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }


    public function actualizar()
    {
        $request = \Config\Services::request();
        $updates = $request->getPost('cart');
        $productoModel = new Producto_Model();

        foreach ($updates as $rowid => $item) {
            $cantidadSolicitada = (int) $item['qty'];

            // Obtener el item actual del carrito
            $cartItem = $this->cart->getItem($rowid);
            if (!$cartItem)
                continue;

            // Buscar el producto en la base de datos
            $producto = $productoModel->find($cartItem['id']);
            if (!$producto)
                continue;

            $stockDisponible = (int) $producto['stock'];

            // Validar contra el stock
            if ($cantidadSolicitada > $stockDisponible) {
                return redirect()->back()->with('error', 'Stock insuficiente para el producto "' . esc($producto['nombre_prod']) . '"');
            }

            // Actualizar cantidad
            $this->cart->update([
                'rowid' => $rowid,
                'qty' => $cantidadSolicitada
            ]);
        }

        return redirect()->back()->with('success', 'Carrito actualizado');
    }


    public function eliminar($rowid)
    {
        $this->cart->remove($rowid);
        return redirect()->back()->with('success', 'Producto eliminado del carrito');
    }

    public function vaciar()
    {
        $this->cart->destroy();
        return redirect()->back()->with('success', 'Carrito vaciado');
    }
}
?>