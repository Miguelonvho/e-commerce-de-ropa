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
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'buzos/mujeres/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'buzos/mujeres/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo gris estampado hombre', 'precio' => 14500, 'imagen' => 'buzos/hombres/Buzo-gris-estampado-hombre.jpg'],
                ['nombre' => 'Buzo Adidas hombre', 'precio' => 13900, 'imagen' => 'buzos/hombres/Buzo-Adidas-hombre.jpg'],
                ['nombre' => 'Buzo New Balance-hombre', 'precio' => 13900, 'imagen' => 'buzos/hombres/Buzo-New-Balance-hombre.jpg'],
                ['nombre' => 'Buzo nike hombre', 'precio' => 13900, 'imagen' => "buzos/hombres/Buzo-nike-hombre.jpg"],
                ['nombre' => 'buzo rosa hombre', 'precio' => 13900, 'imagen' => "buzos/hombres/buzo-rosa-hombre.jpg"],
                ['nombre' => 'Buzo The North Face hombre', 'precio' => 13900, 'imagen' => "buzos/hombres/Buzo-The-North-Face-hombre.jpg"],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-con-estampado-mujer-2.jpg"],
            ],
            'Remeras' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/mujeres/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-relaxed-estampado-mujer.jpg'],
            ],
            'Mujer' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/mujeres/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/mujeres/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'buzos/mujeres/Buzo-con-estampado-mujer.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'buzos/mujeres/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'buzos/mujeres/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "buzos/mujeres/Buzo-con-estampado-mujer-2.jpg"],
            ],

            'Hombre' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/hombres/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/hombres/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/hombres/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/hombres/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/hombres/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/hombres/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'buzos/hombres/Buzo-gris-estampado-hombre.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'buzos/hombres/Buzo-Adidas-hombre.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'buzos/hombres/Buzo-New-Balance-hombre.jpg'],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "buzos/hombres/Buzo-nike-hombre.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "buzos/hombres/buzo-rosa-hombre.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "buzos/hombres/Buzo-The-North-Face-hombre.jpg"],
            ],
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