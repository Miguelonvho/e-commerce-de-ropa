<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Usuarios_model;
use App\Models\Genero_model;
use App\Models\Edad_model;
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

    public function index()
    {
        $dato['titulo'] = 'Editar productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/editar_productos_view', $data);
        echo view('front/footer_view');
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

        $generoModel = new Genero_model();
        $data['generos'] = $generoModel->getGeneros();
        $data['generoActual'] = $generoModel->where('id_genero', $data['old']['genero_id'])->first();

        $edadModel = new Edad_model();
        $data['edades'] = $edadModel->getedades();
        $data['edadActual'] = $edadModel->where('id_edad', $data['old']['edad_id'])->first();

        $imagen = $this->request->getFile('imagen-producto');
        $nombreImagen = null;

        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $nombreImagen = $imagen->getRandomName();
            $imagen->move('public/assets/img/', $nombreImagen);
        }

        $productoModel->save([
            'id_producto' => $id,
            'nombre_prod' => $this->request->getVar('nombre-producto'),
            'categoria_id' => $this->request->getVar('categorias'),
            'marca_id' => $this->request->getVar('marcas'),
            'talle_id' => $this->request->getVar('talles'),
            'genero_id' => $this->request->getVar('generos'),
            'edad_id' => $this->request->getVar('edades'),
            'precio_costo' => $this->request->getVar('precio-costo'),
            'precio_venta' => $this->request->getVar('precio-venta'),
            'stock' => $this->request->getVar('stock'),
            'stock_min' => $this->request->getVar('stock-minimo'),
        ]);

        return redirect()->to('/editar_productos_view')->with('mensaje', 'Producto actualizado con éxito.');
    }
}
