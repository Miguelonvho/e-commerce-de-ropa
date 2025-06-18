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


    public function index()
    {
        $data['titulo'] = 'Carrito de Compras';
        $data['cart'] = $this->cart;

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/carrito_view', $data);
        echo view('front/footer_view');
    }

    public function agregar()
{
    $request = \Config\Services::request();
    $cart = \Config\Services::cart(); 
    $producto = [
        'id'    => $request->getPost('id'),
        'qty'   => $request->getPost('cantidad') ?? 1,
        'price' => $request->getPost('precio_venta'),
        'name'  => $request->getPost('nombre_prod'),
        'options' => [
            'imagen' => $request->getPost('imagen')
        ]
    ];

    $cart->insert($producto); 
    return redirect()->back()->with('success', 'Producto agregado al carrito');
}

    public function actualizar()
    {
        $request = \Config\Services::request();
        $updates = $request->getPost('cart');

        foreach ($updates as $rowid => $item) {
            $this->cart->update([
                'rowid' => $rowid,
                'qty'   => $item['qty']
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
