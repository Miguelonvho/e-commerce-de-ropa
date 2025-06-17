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

    public function index()
    {
        $usuarioModel = new Usuarios_model();

        $data['usuarios'] = $usuarioModel->where('baja', 'NO')->findAll(); // Solo activos
        $data['titulo'] = 'CRUD de Usuarios';

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuarios/crud_usuarios_view', $data);
        echo view('front/footer_view');
    }

    public function eliminados()
    {
        $usuarioModel = new Usuarios_model();

        $data['titulo'] = 'Usuarios eliminados';
        $data['usuarios'] = $usuarioModel->where('baja', 'SI')->findAll();

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuarios/usuarios_eliminados_view', $data);
        echo view('front/footer_view');
    }

    public function eliminar($id)
    {
        $usuarioModel = new Usuarios_model();

        // Verificamos si el usuario existe
        $usuario = $usuarioModel->find($id);
        if (!$usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuario no encontrado");
        }

        // Marcamos como dado de baja
        $usuarioModel->update($id, ['baja' => 'SI']);

        session()->setFlashdata('success', 'Usuario eliminado correctamente.');
        return redirect()->to('/crud_usuarios_view');
    }

    public function form_validation()
    {
        $input = $this->validate(
            [
                'nombre' => 'required|alpha_space|min_length[3]|max_length[25]',
                'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
                'email' => 'required|valid_email|max_length[50]',
                'usuario' => 'required|alpha_numeric|min_length[3]|max_length[20]',
                'pass' => 'required|min_length[6]|max_length[30]',
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
                    'required' => 'La contraseña es obligatoria.',
                    'min_length' => 'La contraseña debe tener al menos 6 caracteres.',
                    'max_length' => 'La contraseña no puede tener más de 30 caracteres.',
                ],
            ]
        );

        $formModel = new Usuarios_model();

        // Comprobación de duplicados
        $usuarioExistente = $formModel
            ->groupStart()
            ->where('email', $this->request->getVar('email'))
            ->orWhere('usuario', $this->request->getVar('usuario'))
            ->groupEnd()
            ->where('baja', 'NO')
            ->first();

        if ($usuarioExistente) {
            // Agregamos el error a la validación manualmente
            $validation = \Config\Services::validation();
            $validation->setError('email', 'El correo o nombre de usuario ya están en uso.');
        }

        // Si la validación falla (por cualquier motivo)
        if (!$input || $usuarioExistente) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/usuarios/agregarusuario_view', [
                'validation' => \Config\Services::validation()
            ]);
            echo view('front/footer_view');
            return;
        }

        // Guardar datos
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
        ]);

        session()->setFlashdata('success', 'Se ha registrado con éxito :)');
        return redirect()->to('/iniciarsesion_view');
    }

    public function activar_usuario($id)
    {
        $model = new Usuarios_model();

        // Obtener usuario por ID
        $usuario = $model->find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        // Actualizar campo 'baja' a 'NO'
        $model->update($id, ['baja' => 'NO']);

        return redirect()->to(base_url('usuarios_eliminados_view'))->with('success', 'Usuario activado correctamente.');
    }

    public function editar_usuario_admin($id = null)
    {
        $usuarioModel = new Usuarios_Model();
        $usuario = $usuarioModel->where('id', $id)->first();

        if (!$this->request->is('post')) {
            // Mostrar formulario
            $data['usuario'] = $usuario;
            $dato['titulo'] = "Editar perfil";
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('front/plantilla_perfil_admin', $data);
            echo view('front/footer_view');
            return;
        }

        // Validar formulario
        $rules = [
            'nombre' => 'required|alpha_space|min_length[3]|max_length[25]',
            'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
            'email' => 'required|valid_email|max_length[50]',
            'usuario' => 'required|alpha_numeric|min_length[3]|max_length[20]',
            'pass' => 'permit_empty|min_length[6]|max_length[30]',
        ];

        $messages = [
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
        ];

        if (!$this->validate($rules, $messages)) {
            $data['validation'] = $this->validator;
            $data['usuario'] = $usuario;
            $dato['titulo'] = "Editar perfil";

            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('front/plantilla_perfil_admin', $data);
            echo view('front/footer_view');
            return;
        }

        // Preparar datos para actualizar
        $updateData = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
        ];

        $pass = $this->request->getPost('pass');
        if (!empty($pass)) {
            $updateData['pass'] = password_hash($pass, PASSWORD_DEFAULT);
        }

        $usuarioModel->update($usuario['id'], $updateData);

        session()->setFlashdata('success', 'Usuario actualizado correctamente.');
        return redirect()->to(base_url('editar_usuario_admin/' . $usuario['id']));
    }


    public function editar_usuario($id = null)
    {
        $session = session();
        $usuarioLogueadoId = $session->get('id');
        $perfil = $session->get('perfil_id');

        if ($perfil != 1 && $usuarioLogueadoId != $id) {
            return redirect()->to('/plantilla_principal')->with('error', 'No tenés permiso para editar este usuario.');
        }

        $usuarioModel = new Usuarios_Model();
        $usuario = $usuarioModel->where('id', $id)->first();

        $accion = $this->request->getPost('accion');
        if ($accion === 'eliminar') {
            $usuarioModel->update($id, ['baja' => 'SI']);
            $session->destroy();
            return redirect()->to(base_url('/agregarusuario_view'));
        }

        $input = $this->validate([
            'nombre' => 'required|alpha_space|min_length[3]|max_length[25]',
            'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
            'email' => 'required|valid_email|max_length[50]',
            'usuario' => 'required|alpha_numeric|min_length[3]|max_length[20]',
            'pass' => 'permit_empty|min_length[6]|max_length[30]',
        ], [
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
        ]);

        if (!$input) {
            $data['validation'] = $this->validator;
            $data['usuario'] = $usuario;
            $dato['titulo'] = "Editar perfil";
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('front/plantilla_perfil', $data);
            echo view('front/footer_view');
            return;
        }

        $updateData = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email' => $this->request->getVar('email'),
            'usuario' => $this->request->getVar('usuario'),
        ];

        $pass = $this->request->getVar('pass');
        if (!empty($pass)) {
            $updateData['pass'] = password_hash($pass, PASSWORD_DEFAULT);
        }

        if ($usuarioModel->update($usuario['id'], $updateData)) {
            $session->set([
                'nombre' => $updateData['nombre'],
                'apellido' => $updateData['apellido'],
                'email' => $updateData['email'],
                'usuario' => $updateData['usuario'],
            ]);
            session()->setFlashdata('success', 'Modificación exitosa.');
        }

        return redirect()->to(base_url('/plantilla_perfil'));
    }


}

