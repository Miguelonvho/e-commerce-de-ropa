<?php

namespace App\Controllers;

use App\Models\Producto_Model;
use App\Models\Usuarios_Model;
use CodeIgniter\Controller;

class Producto_controller extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
        $session = session();
    }

    public function index()
    {
        $data['titulo'] = 'Editar productos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/productos/editar_productos_view', $data);
        echo view('front/footer_view');
    }

    public function singleProducto($id = null) {
        $productoModel = new Producto_Model();
    }
}
