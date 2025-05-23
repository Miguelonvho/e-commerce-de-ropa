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

    public function detalles_producto()
    {
        $data['titulo'] = 'Detalles';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/detalles_producto');
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
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'Buzos/Mujeres/Buzo-con-estampado-mujer.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'Buzos/Mujeres/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'Buzos/Mujeres/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo gris estampado hombre', 'precio' => 14500, 'imagen' => 'Buzos/Hombres/Buzo-gris-estampado-hombre.jpg'],
                ['nombre' => 'Buzo Adidas hombre', 'precio' => 13900, 'imagen' => 'Buzos/Hombres/Buzo-Adidas-hombre.jpg'],
                ['nombre' => 'Buzo New Balance-hombre', 'precio' => 13900, 'imagen' => 'Buzos/Hombres/Buzo-New-Balance-hombre.jpg'],
                ['nombre' => 'Buzo nike hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/Buzo-nike-hombre.jpg"],
                ['nombre' => 'buzo rosa hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/buzo-rosa-hombre.jpg"],
                ['nombre' => 'Buzo The North Face hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/Buzo-The-North-Face-hombre.jpg"],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-con-estampado-mujer-2.jpg"],
            ],
            'Remeras' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/Mujeres/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Remera Rider hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/remera-rider-hombre.jpg'],
                ['nombre' => 'Remera Ocn hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-Ocn-hombre.jpg'],
                ['nombre' => 'Remera New Balance hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-New-Balance-hombre.jpg'],
                ['nombre' => 'Remera cuello V hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-cuello-v.jpg'],
                ['nombre' => 'Remera Cooper mangas largas hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/remera-Cooper-mangas-largas-hombre.jpg'],
                ['nombre' => 'Remera blanca lisa hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-blanca-lisa-hombre.jpg'],
            ],
            'Mujer' => [
                ['nombre' => 'Remera escote v mujer', 'precio' => 14500, 'imagen' => 'remeras/Mujeres/Remera-escote-v-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-Morley-mujer.jpg'],
                ['nombre' => 'Remera lisa mangas largas mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-lisa-mangas-largas-mujer.jpg'],
                ['nombre' => 'remera janis mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/remera-janis-mujer.jpg'],
                ['nombre' => 'remera extreme estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/remera-extreme-estampado-mujer.jpg'],
                ['nombre' => 'Remera relaxed estampado mujer', 'precio' => 13900, 'imagen' => 'remeras/Mujeres/Remera-relaxed-estampado-mujer.jpg'],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 14500, 'imagen' => 'Buzos/Mujeres/Buzo-con-estampado-mujer.jpg'],
                ['nombre' => 'Buzo Vans mujer', 'precio' => 13900, 'imagen' => 'Buzos/Mujeres/Buzo-Vans-mujer.jpg'],
                ['nombre' => 'Buzo Rusty Bondi Half mujer', 'precio' => 13900, 'imagen' => 'Buzos/Mujeres/Buzo-Rusty-Bondi-Half-mujer.jpg'],
                ['nombre' => 'Buzo Levis mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-Levi's-mujer.jpg"],
                ['nombre' => 'Buzo crudo con escote en V mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-crudo-con-escote-en-V-mujer.jpg"],
                ['nombre' => 'Buzo con estampado mujer', 'precio' => 13900, 'imagen' => "Buzos/Mujeres/Buzo-con-estampado-mujer-2.jpg"],
            ],

            'Hombre' => [
                ['nombre' => 'Remera Rider hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/remera-rider-hombre.jpg'],
                ['nombre' => 'Remera Ocn hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-Ocn-hombre.jpg'],
                ['nombre' => 'Remera New Balance hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-New-Balance-hombre.jpg'],
                ['nombre' => 'Remera cuello V hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-cuello-v.jpg'],
                ['nombre' => 'Remera Cooper mangas largas hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/remera-Cooper-mangas-largas-hombre.jpg'],
                ['nombre' => 'Remera blanca lisa hombre', 'precio' => 13900, 'imagen' => 'remeras/Hombres/Remera-blanca-lisa-hombre.jpg'],
                ['nombre' => 'Buzo gris estampado hombre', 'precio' => 14500, 'imagen' => 'Buzos/Hombres/Buzo-gris-estampado-hombre.jpg'],
                ['nombre' => 'Buzo Adidas hombre', 'precio' => 13900, 'imagen' => 'Buzos/Hombres/Buzo-Adidas-hombre.jpg'],
                ['nombre' => 'Buzo New Balance-hombre', 'precio' => 13900, 'imagen' => 'Buzos/Hombres/Buzo-New-Balance-hombre.jpg'],
                ['nombre' => 'Buzo nike hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/Buzo-nike-hombre.jpg"],
                ['nombre' => 'buzo rosa hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/buzo-rosa-hombre.jpg"],
                ['nombre' => 'Buzo The North Face hombre', 'precio' => 13900, 'imagen' => "Buzos/Hombres/Buzo-The-North-Face-hombre.jpg"],
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

    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view', );
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'Ingresar';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('back/usuarios/iniciarsesion_view');
        echo view('front/footer_view');
    }
}