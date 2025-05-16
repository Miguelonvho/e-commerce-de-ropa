<?php

namespace App\Controllers;
use App\Models\UsuarioModel;


class usuario_controller extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view',);
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function agregar_usuario()
    {

        $condiciones = [
            'nombre'   => 'required|min_length[2]|alpha',
            'apellido' => 'required|min_length[2]|alpha',
            'email'    => 'required|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|is_unique[usuarios.usuario]',
            'pass'     => 'required|min_length[6]',
        ];

        $mensajes = [
            'nombre' => [
                'required'    => 'El nombre es obligatorio.',
                'min_length'  => 'El nombre debe tener al menos 2 caracteres.',
                'alpha' => 'El nombre solo debe contener letras sin espacios',
            ],
            'apellido' => [
                'required'    => 'El apellido es obligatorio.',
                'min_length'  => 'El apellido debe tener al menos 3 caracteres.',
                'alpha' => 'El apellido solo debe contener letras sin espacios',
            ],
            'email' => [
                'required'    => 'El correo electrónico es obligatorio.',
                'valid_email' => 'Debe ingresar un correo electrónico válido.',
                'is_unique'   => 'El correo ya está registrado.',
            ],
            'usuario' => [
                'required'  => 'El nombre de usuario es obligatorio.',
                'is_unique' => 'El nombre de usuario ya existe.',
            ],
            'pass' => [
                'required'   => 'La contraseña es obligatoria.',
                'min_length' => 'La contraseña debe tener al menos 6 caracteres.',
            ],
        ];

        if (!$this->validate($condiciones, $mensajes)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre'     => $this->request->getPost('nombre'),
            'apellido'   => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
            'pass' => $this->request->getPost('pass'),
        ];

        $usuarioModel->insert($data);

        session()->setFlashdata('success', '¡Registro exitoso!');

        return redirect()->to('agregarusuario_view');
    }
}