<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $cart;

    public function __construct()
    {
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $data['titulo'] = 'Principal';
        $data['cart'] = $this->cart;   // PASO carrito a la vista
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/plantilla_principal', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function detalles_producto()
    {
        $data['titulo'] = 'Detalles';
        $data['cart'] = $this->cart;
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
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('front/quienes_somos', $data);
        echo view('front/boton_inicio', $data);
        echo view('front/footer_view', $data);
    }

    public function plantilla_productos($categoria)
    {
        if ($categoria == "Ninos") {
            $categoria = "Niños";
        }

        $productosPorCategoria = [
            // ... tu array de productos sin cambios ...
        ];

        $data = [
            'productos' => $productosPorCategoria[$categoria] ?? [],
            'titulo' => ucfirst($categoria),
            'cart' => $this->cart  // PASO carrito
        ];

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
        // En registro no cargo carrito
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'Ingresar';
        $data['cart'] = $this->cart;
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/panel-carrito', $data);
        echo view('back/usuarios/iniciarsesion_view');
        echo view('front/footer_view');
    }
}
