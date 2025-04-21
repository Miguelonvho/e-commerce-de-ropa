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
        echo view('front/footer_view');
    }

    public function quienes_somos() {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function plantilla_generos($genero) {
        $data['titulo'] = $genero;
        $data['genero'] = $genero;
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_generos', $data);
        echo view('front/footer_view');
    }
}

