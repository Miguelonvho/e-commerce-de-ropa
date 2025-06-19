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

    public function crearProducto()
    {
        $categoriaModel = new Categoria_model();
        $marcaModel = new Marca_model();
        $talleModel = new Talle_model();
        $generoModel = new Genero_model();
        $edadModel = new Edad_model();

        $data['categorias'] = $categoriaModel->getCategorias();
        $data['marcas'] = $marcaModel->getMarcas();
        $data['talles'] = $talleModel->getTalles();
        $data['generos'] = $generoModel->getGeneros();
        $data['edades'] = $edadModel->getEdades();

        $dato['titulo'] = 'Alta producto';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/alta_productos_view', $data);
        echo view('front/footer_view');
    }

    // Guarda el producto en la BD
    public function store()
    {
        $productoModel = new Producto_Model();

       $input = $this->validate([
        'nombre_prod' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'El nombre del producto es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.'
            ]
        ],

        'categorias' => [
            'rules' => 'required|is_not_unique[categorias.id_categoria]',
            'errors' => [
                'required' => 'Debes seleccionar una categoría.',
                'is_not_unique' => 'La categoría seleccionada no es válida.'
            ]
        ],

        'marcas' => [
            'rules' => 'required|is_not_unique[marcas.id_marca]',
            'errors' => [
                'required' => 'Debes seleccionar una marca.',
                'is_not_unique' => 'La marca seleccionada no es válida.'
            ]
        ],

        'talles' => [
            'rules' => 'required|is_not_unique[talles.id_talle]',
            'errors' => [
                'required' => 'Debes seleccionar un talle.',
                'is_not_unique' => 'El talle seleccionado no es válido.'
            ]
        ],

        'generos' => [
            'rules' => 'required|is_not_unique[generos.id_genero]',
            'errors' => [
                'required' => 'Debes seleccionar un género.',
                'is_not_unique' => 'El género seleccionado no es válido.'
            ]
        ],

        'edades' => [
            'rules' => 'required|is_not_unique[edades.id_edad]',
            'errors' => [
                'required' => 'Debes seleccionar una edad.',
                'is_not_unique' => 'La edad seleccionada no es válida.'
            ]
        ],

        'precio_costo' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'El precio de costo es obligatorio.',
                'numeric' => 'El precio de costo debe ser un número.'
            ]
        ],

        'precio_venta' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'El precio de venta es obligatorio.',
                'numeric' => 'El precio de venta debe ser un número.'
            ]
        ],

        'stock' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'El stock es obligatorio.',
                'numeric' => 'El stock debe ser un número.'
            ]
        ],

        'stock_min' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'El stock mínimo es obligatorio.',
                'numeric' => 'El stock mínimo debe ser un número.'
            ]
        ],

        'imagen' => [
            'rules' => 'uploaded[imagen]|max_size[imagen,2048]|is_image[imagen]',
            'errors' => [
                'uploaded' => 'Debes subir una imagen del producto.',
                'max_size' => 'La imagen no debe superar los 2MB.',
                'is_image' => 'El archivo debe ser una imagen válida (JPG, PNG, etc).'
            ]
        ]
    ]);


        if (!$input) {
            // Si falla la validación volvemos al formulario con los datos cargados.
            $categoriaModel = new Categoria_model();
            $marcaModel = new Marca_model();
            $talleModel = new Talle_model();
            $generoModel = new Genero_model();
            $edadModel = new Edad_model();

            $data['categorias'] = $categoriaModel->getCategorias();
            $data['marcas'] = $marcaModel->getMarcas();
            $data['talles'] = $talleModel->getTalles();
            $data['generos'] = $generoModel->getGeneros();
            $data['edades'] = $edadModel->getEdades();
            $data['validation'] = $this->validator;

            $dato['titulo'] = 'Alta producto';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/productos/alta_productos_view', $data);
            echo view('front/footer_view');
        } else {
            // Si pasa la validación, guardamos
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'public/assets/uploads', $nombre_aleatorio);

            $data = [
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                'categoria_id' => $this->request->getVar('categorias'),
                'marca_id' => $this->request->getVar('marcas'),
                'talle_id' => $this->request->getVar('talles'),
                'genero_id' => $this->request->getVar('generos'),
                'edad_id' => $this->request->getVar('edades'),
                'precio_costo' => $this->convertir_a_float($this->request->getVar('precio_costo')),
                'precio_venta' => $this->convertir_a_float($this->request->getVar('precio_venta')),
                'stock' => $this->request->getVar('stock'),
                'stock_min' => $this->request->getVar('stock_min'),
                'imagen' => $nombre_aleatorio,
                'eliminado' => 'NO'
            ];

            $productoModel->insert($data);
            session()->setFlashdata('success', 'Producto creado correctamente.');
            return redirect()->to(base_url('/crud_productos_view'));
        }
    }

    private function convertir_a_float($valor)
    {
        return floatval(str_replace(['.', ','], ['', '.'], $valor));
    }


    public function restaurar_producto($id)
    {
        $productoModel = new Producto_Model();
        $productoModel->update($id, ['eliminado' => 'NO']);
        return redirect()->to(base_url('/productos_eliminados'))->with('success', 'Producto restaurado correctamente.');
    }

    public function eliminar_producto($id)
    {
        $productoModel = new Producto_model();
        $producto = $productoModel->find($id);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        // Soft delete
        $productoModel->update($id, ['eliminado' => 'SI']);

        return redirect()->to('crud_productos_view')->with('success', 'Producto eliminado correctamente');
    }

    public function productos_eliminados()
    {
        $productoModel = new Producto_Model();
        $buscar = $this->request->getGet('buscar');

        // Filtrar productos eliminados
        $productos = $productoModel->where('eliminado', 'SI');

        if (!empty($buscar)) {
            $productos = $productos->groupStart()
                ->like('nombre_prod', $buscar)
                ->orLike('id_producto', $buscar)
                ->groupEnd();
        }

        $data['productos'] = $productos->findAll();
        $data['buscar'] = $buscar;

        $dato['titulo'] = 'Productos eliminados';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/productos_eliminados_view', $data); // vista nueva
        echo view('front/footer_view');
    }

public function editar_producto($id = null)
{
    $productoModel = new Producto_Model();
    $producto = $productoModel->where('id_producto', $id)->first();

    // Validar campos obligatorios simples (podés agregar más reglas o usar validación CI)
    $campos = [
        'nombre_prod',
        'categorias',
        'marcas',
        'talles',
        'generos',
        'edades',
        'precio_costo',
        'precio_venta',
        'stock',
        'stock_min',
    ];

    $campos_vacios = [];
    foreach ($campos as $campo) {
        $valor = $this->request->getVar($campo);
        if ($valor === null || trim($valor) === '') {
            $campos_vacios[] = $campo;
        }
    }

    if (count($campos_vacios) > 0) {
        session()->setFlashdata('error', 'Por favor, completa todos los campos obligatorios.');
        // Mantener los datos enviados y la validación en la sesión para mostrar errores en la vista si tenés validación
        return redirect()->back()->withInput();
    }

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
    } else {
        session()->setFlashdata('error', 'No se pudo actualizar el producto.');
    }
    
    return redirect()->to(base_url('/editar_productos_view/' . $id));
}


public function catalogo()
{
    $productoModel = new Producto_model();
    $generoModel = new Genero_model();
    $edadModel = new Edad_model();
    $categoriaModel = new Categoria_model();
    $marcaModel = new Marca_model();

    $filtros = [
        'genero' => $generoModel->findAll(),
        'edad' => $edadModel->findAll(),
        'categoria' => $categoriaModel->findAll(),
        'marca' => $marcaModel->findAll(),
    ];

    // Captura de filtros desde la URL (GET)
    $generoId = $this->request->getGet('genero');
    $edadId = $this->request->getGet('edad');
    $categoriaId = $this->request->getGet('categoria');
    $marcaId = $this->request->getGet('marca');

    $productos = $productoModel->where('eliminado', 'NO');

    if ($generoId) $productos->where('genero_id', $generoId);
    if ($edadId) $productos->where('edad_id', $edadId);
    if ($categoriaId) $productos->where('categoria_id', $categoriaId);
    if ($marcaId) $productos->where('marca_id', $marcaId);

    $data = [
        'productos' => $productos->findAll(),
        'titulo' => 'Catálogo de Productos',
        'edades' => $filtros['edad'],
        'categorias' => $filtros['categoria'],
        'marcas' => $filtros['marca'],
        'generos' => $filtros['genero'], // 💡 agregalo si usás el filtro por género
        'filtroActual' => [
            'genero' => $generoId,
            'edad' => $edadId,
            'categoria' => $categoriaId,
            'marca' => $marcaId
        ]
    ];

    echo view('front/head_view', ['titulo' => $data['titulo']]);
    echo view('front/nav_view');
    echo view('front/panel-carrito');
    echo view('front/catalogo_productos_view', $data);
    echo view('front/footer_view');
}}