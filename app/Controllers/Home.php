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

    public function quienes_somos() {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/quienes_somos');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function plantilla_productos($categoria) {
        if ($categoria == "Ninos") {
            $categoria = "Niños";
        }
        $data['titulo'] = $categoria;
        $data['genero'] = $categoria;
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_productos', $data);
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function comercializacion() {
        $data['titulo'] = 'Comercialización';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/comercializacion');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function contacto() {
        $data['titulo'] = 'Contacto';   
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
    
    public function terminos_y_usos() {
        $data['titulo'] = 'Términos y Usos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/terminos_y_usos');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

    public function plantilla_perfil() {
        $data['titulo'] = 'Mi informacion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_perfil');
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }

}