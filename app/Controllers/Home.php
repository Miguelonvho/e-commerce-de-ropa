<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_principal');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/quienes_somos');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function plantilla_productos($categoria)
    {
        if ($categoria == "Ninos") {
            $categoria = "Niños";
        }

        $productosPorCategoria = [
            'Buzos' => [
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'buzos/mujeres/Buzo-con-estampado-mujer.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'buzos/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'buzos/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-con-estampado-mujer-2.jpg"],
            ],
            'Remeras' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-relaxed-estampado-mujer.jpg'],
            ],
            'Mujer' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'buzos/Buzo-con-estampado-mujer.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'buzos/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'buzos/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "buzos/Buzo-con-estampado-mujer-2.jpg"],
            ]
        ];

        $data = [
            'productos' => $productosPorCategoria[$categoria] ?? [],
            'titulo' => ucfirst($categoria)
        ];

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_productos', $data);
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/comercializacion');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        $data['titulo'] = 'Contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/contacto');
        echo view('front/footer_view');
    }

    public function terminos_y_usos()
    {
        $data['titulo'] = 'Términos y Usos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/terminos_y_usos');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function plantilla_perfil()
    {
        $data['titulo'] = 'Mi informacion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_perfil');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }
}