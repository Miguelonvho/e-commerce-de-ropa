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

        // Mostrar productos en lista

    public function index()
    {
        $productoModel = new Producto_Model();

        $buscar = $this->request->getGet('buscar');
        $data['productos'] = $productoModel->buscarProductos($buscar);
        $data['buscar'] = $buscar;

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/crud_productos_view', $data);
        echo view('front/footer_view');
    }
    public function singleProducto($id = null)
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

        $dato['titulo'] = 'Editar productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/editar_productos_view', $data);
        echo view('front/footer_view');
    }

    public function editar_producto($id = null)
    {

        $productoModel = new Producto_Model();
        $producto = $productoModel->where('id_producto', $id)->first();
        $img = $this->request->getFile('imagen');

        if ($img && $img->isValid()) {
            $rutaDestino = ROOTPATH . 'public/assets/uploads';
            $nombre_aleatorio = $img->getRandomName();
            $img->move($rutaDestino, $nombre_aleatorio);
            $data = [
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                'id_categoria' => $this->request->getVar('categorias'),
                'id_marca' => $this->request->getVar('marcas'),
                'id_talle' => $this->request->getVar('talles'),
                'id_genero' => $this->request->getVar('generos'),
                'id_edad' => $this->request->getVar('edades'),
                'precio_costo' => $this->request->getVar('precio_costo'),
                'precio_venta' => $this->request->getVar('precio_venta'),
                'stock' => $this->request->getVar('stock'),
                'stock_min' => $this->request->getVar('stock_min'),
                'imagen' => $nombre_aleatorio,
                'eliminado' => 'NO',
            ];

        } else {
            $data = [
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                'id_categoria' => $this->request->getVar('categorias'),
                'id_marca' => $this->request->getVar('marcas'),
                'id_talle' => $this->request->getVar('talles'),
                'id_genero' => $this->request->getVar('generos'),
                'id_edad' => $this->request->getVar('edades'),
                'precio_costo' => $this->request->getVar('precio_costo'),
                'precio_venta' => $this->request->getVar('precio_venta'),
                'stock' => $this->request->getVar('stock'),
                'stock_min' => $this->request->getVar('stock_min'),
                'eliminado' => 'NO',
            ];
        }

        if ($productoModel->update($producto['id_producto'], $data)) {
            session()->setFlashdata('success', 'Modificación exitosa.');
        }
        return redirect()->to(base_url('/editar_productos_view/' . $id));
    }
}
