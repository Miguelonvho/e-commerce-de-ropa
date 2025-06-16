<?php
namespace App\Controllers;

use App\Models\Producto_Model;
use CodeIgniter\Controller;

class Producto_controller extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->session = session();
    }

    // Mostrar productos en lista
    public function index()
    {
        $productoModel = new Producto_Model();

        // Obtener todos los productos no eliminados
        $data['productos'] = $productoModel->getProductoAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);     
        echo view('front/nav_view');
        echo view('front/crud_productos_view', $data); 
        echo view('front/footer_view');
    }
}
