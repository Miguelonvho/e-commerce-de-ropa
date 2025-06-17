<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function form_validation()
    {

        $input = $this->validate(
            [
                'nombre' => 'required|alpha_space|min_length[3]|max_length[25]',
                'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
                'email' => 'required|valid_email|max_length[50]',
                'usuario' => 'required|alpha_numeric|min_length[3]|max_length[20]',
                'pass' => 'min_length[6]|max_length[30]',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es obligatorio.',
                    'alpha_space' => 'El nombre solo puede contener letras y espacios.',
                    'min_length' => 'El nombre debe tener al menos 3 caracteres.',
                    'max_length' => 'El nombre no puede tener más de 25 caracteres.',
                ],
                'apellido' => [
                    'required' => 'El apellido es obligatorio.',
                    'alpha_space' => 'El apellido solo puede contener letras y espacios.',
                    'min_length' => 'El apellido debe tener al menos 3 caracteres.',
                    'max_length' => 'El apellido no puede tener más de 25 caracteres.',
                ],
                'email' => [
                    'required' => 'El email es obligatorio.',
                    'valid_email' => 'Debes ingresar un email válido.',
                    'max_length' => 'El email no puede tener más de 50 caracteres.',
                ],
                'usuario' => [
                    'required' => 'El usuario es obligatorio.',
                    'alpha_numeric' => 'El usuario solo puede contener letras y números.',
                    'min_length' => 'El usuario debe tener al menos 3 caracteres.',
                    'max_length' => 'El usuario no puede tener más de 20 caracteres.',
                ],
                'pass' => [
                    'min_length' => 'La contraseña debe tener al menos 6 caracteres.',
                    'max_length' => 'La contraseña no puede tener más de 30 caracteres.',
                ],
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
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success', 'Se ha registrado con exito :)');
            return $this->response->redirect(site_url('/iniciarsesion_view'));
        }
    }

    public function editar_usuario($id = 25)
    {
        $input = $this->validate(
            [
                'nombre' => 'required|alpha_space|min_length[3]|max_length[25]',
                'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
                'email' => 'required|valid_email|max_length[50]',
                'usuario' => 'required|alpha_numeric|min_length[3]|max_length[20]',
                'pass' => 'permit_empty|min_length[6]|max_length[30]',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es obligatorio.',
                    'alpha_space' => 'El nombre solo puede contener letras y espacios.',
                    'min_length' => 'El nombre debe tener al menos 3 caracteres.',
                    'max_length' => 'El nombre no puede tener más de 25 caracteres.',
                ],
                'apellido' => [
                    'required' => 'El apellido es obligatorio.',
                    'alpha_space' => 'El apellido solo puede contener letras y espacios.',
                    'min_length' => 'El apellido debe tener al menos 3 caracteres.',
                    'max_length' => 'El apellido no puede tener más de 25 caracteres.',
                ],
                'email' => [
                    'required' => 'El email es obligatorio.',
                    'valid_email' => 'Debes ingresar un email válido.',
                    'max_length' => 'El email no puede tener más de 50 caracteres.',
                ],
                'usuario' => [
                    'required' => 'El usuario es obligatorio.',
                    'alpha_numeric' => 'El usuario solo puede contener letras y números.',
                    'min_length' => 'El usuario debe tener al menos 3 caracteres.',
                    'max_length' => 'El usuario no puede tener más de 20 caracteres.',
                ],
                'pass' => [
                    'min_length' => 'La contraseña debe tener al menos 6 caracteres.',
                    'max_length' => 'La contraseña no puede tener más de 30 caracteres.',
                ],
            ]
        );

        $usuarioModel = new Usuarios_Model();
        $usuario = $usuarioModel->where('id_usuario', $id)->first();

        if (!$input) {
            $data['validation'] = $this->validator;
            $data['usuario'] = $usuario;
            $dato['titulo'] = "Editar perfil";

            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('front/plantilla_perfil', $data);
            echo view('front/footer_view');
            return; // Detiene la ejecución para no seguir adelante
        } else {
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
            ];

            // Solo actualizamos la contraseña si el usuario ingreso una nueva
            $pass = $this->request->getVar('pass');
            if (!empty($pass)) {
                $data['pass'] = password_hash($pass, PASSWORD_DEFAULT);
            }

            if ($usuarioModel->update($usuario['id_usuario'], $data)) {
                // Actualizar sesión con los nuevos datos
                $session = session();
                $session->set([
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                ]);

                session()->setFlashdata('success', 'Modificación exitosa.');
            }
            return redirect()->to(base_url('/plantilla_perfil'));
        }
    }
}

