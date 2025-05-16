<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Usuario_controller extends Controller
{
    public function construct()
    {
        helper(['form','url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view', );
        echo view('back/usuarios/agregarusuario_view');
        echo view('front/footer_view');
    }

    public function formValidation()
    {

        $input = $this->validate(
            [
                'nombre' => 'required|min_length[3]|max_length[25]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]|is_unique[usuarios.usuario]',
                'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
                'pass' => 'required|min_length[3]|',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es obligatorio.',
                    'min_length' => 'El nombre debe tener al menos 3 caracteres.',
                    'max_length' => 'El nombre no puede tener más de 25 caracteres.'
                ],
                'apellido' => [
                    'required' => 'El apellido es obligatorio.',
                    'min_length' => 'El apellido debe tener al menos 3 caracteres.',
                    'max_length' => 'El apellido no puede tener más de 25 caracteres.'
                ],
                'usuario' => [
                    'required' => 'El nombre de usuario es obligatorio.',
                    'is_unique' => 'Este nombre de usuario ya está registrado.'
                ],
                'email' => [
                    'required' => 'El correo electrónico es obligatorio.',
                    'valid_email' => 'El correo debe tener un formato válido.',
                    'is_unique' => 'Este correo ya está registrado.'
                ],
                'pass' => [
                    'required' => 'La contraseña es obligatoria.',
                    'min_length' => 'La contraseña debe tener al menos 3 caracteres.',
                ]
            ]
        );

        $formModel = new Usuarios_model();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/usuarios/agregarusuario_view', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre'   => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario'  => $this->request->getVar('usuario'),
                'email'    => $this->request->getVar('email'),
                'pass'     => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success', 'Se ha registrado con exito :)');
            return $this->response->redirect(site_url('/agregarusuario_view'));
        }
    }
}