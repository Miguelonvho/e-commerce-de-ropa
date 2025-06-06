<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Usuarios_model;
use App\Models\Marca_model;
use App\Models\Talle_model;
use App\Models\Categoria_model;
use CodeIgniter\Controller;

class Producto_controller extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
        $session = session();
    }

    public function editar_producto($id = 1)
    {
        $productoModel = new Producto_model();

        $data['old'] = $productoModel->where('id_producto', $id)->first();

        if (empty($data['old'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se pudo encontrar el producto seleccionado');
        }

        $categoriasModel = new Categoria_model();
        $data['categorias'] = $categoriasModel->getCategorias();
        $data['categoriaActual'] = $categoriasModel->where('id_categoria', $data['old']['categoria_id'])->first();

        $marcaModel = new Marca_model();
        $data['marcas'] = $marcaModel->getMarcas();
        $data['marcaActual'] = $marcaModel->where('id_marca', $data['old']['marca_id'])->first();

        $talleModel = new Talle_model();
        $data['talles'] = $talleModel->getTalles();
        $data['talleActual'] = $talleModel->where('id_talle', $data['old']['talle_id'])->first();

        $dato['titulo'] = 'Editar productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/editar_productos_view', $data);
        echo view('front/footer_view');
    }
}
