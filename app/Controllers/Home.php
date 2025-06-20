<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $cart;

    public function __construct()
    {
        // Inicializa el servicio de carrito al construir el controlador
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $data['titulo'] = 'Principal';

        $productoModel = new \App\Models\Producto_Model(); // Modelo de productos

        // Trae 4 productos no eliminados de forma aleatoria
        $data['destacados'] = $productoModel
            ->where('eliminado', 'NO')
            ->orderBy('RAND()') // Selección aleatoria
            ->limit(4)
            ->findAll();

        // Carga las vistas principales de la página de inicio
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito', ['cart' => \Config\Services::cart()]);
        echo view('front/plantilla_principal', $data);
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function detalles_producto()
    {
        $data['titulo'] = 'Detalles';
        $data['cart'] = $this->cart;

        // Carga las vistas para la página de detalles de producto
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/detalles_producto', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        $data['cart'] = $this->cart;

        // Carga las vistas para la sección "Quiénes somos"
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/quienes_somos', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function plantilla_productos($categoria)
    {
        // Ajusta el nombre de la categoría si es necesario
        if ($categoria == "Ninos") {
            $categoria = "Niños";
        }
        
        $data = [
            'productos' => $productosPorCategoria[$categoria] ?? [],
            'titulo' => ucfirst($categoria),
            'cart' => $this->cart
        ];

        // Carga las vistas para mostrar productos según la categoría seleccionada
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/plantilla_productos', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        $data['cart'] = $this->cart;

        // Carga las vistas para la página de comercialización
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/comercializacion', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function contacto()
    {
        $data['titulo'] = 'Contacto';
        $data['cart'] = $this->cart;

        // Carga las vistas para la sección de contacto
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/contacto', $data);
        echo view('front/footer_view', $data);
    }

    public function terminos_y_usos()
    {
        $data['titulo'] = 'Términos y Usos';
        $data['cart'] = $this->cart;

        // Carga las vistas para los términos y condiciones del sitio
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/terminos_y_usos', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function registro()
    {
        $data['titulo'] = 'Registro';

        // Carga las vistas del formulario de registro
        // No se carga el carrito en esta página
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'Ingresar';
        $data['cart'] = $this->cart;

        // Carga las vistas del formulario de inicio de sesión
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('back/usuarios/iniciarsesion_view');
        echo view('front/footer_view');
    }
}
