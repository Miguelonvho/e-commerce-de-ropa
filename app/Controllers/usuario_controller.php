<?php

namespace App\Controllers;
use App\Models\UsuarioModel;


class usuario_controller extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function agregar_usuario()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre'     => $this->request->getPost('nombre'),
            'apellido'   => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
            'pass' => $this->request->getPost('pass'),
        ];

        $usuarioModel->insert($data);


    }
}