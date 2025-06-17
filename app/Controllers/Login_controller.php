<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class Login_controller extends Controller
{
    public function index()
    {
        helper(['form', 'url']);
    }

    public function Auth()
    {
        $session = session();
        $model = new Usuarios_model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model
            ->where('email', $email)
            ->where('baja', 'NO')  // solo usuarios activos
            ->orderBy('id', 'DESC')  // toma el más reciente
            ->first();

        if ($data) {
            if ($data['baja'] === 'SI') {
                $session->setFlashdata('msg', 'El usuario está dado de baja.');
                return redirect()->to('/iniciarsesion_view');
            }

            if (password_verify($password, $data['pass'])) {
                $ses_data = [
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => true,
                ];
                $session->set($ses_data);
                $session->setFlashdata('welcome_message', '¡Bienvenido!');
                if ($data['perfil_id'] == 1) {
                    return redirect()->to('/crud_productos_view');
                } else {
                    return redirect()->to('/plantilla_principal');
                }
            } else {
                $session->setFlashdata('error_password', 'Contraseña incorrecta');
                return redirect()->to('/iniciarsesion_view');
            }
        } else {
            $session->setFlashdata('error_email', 'Correo no valido');
            return redirect()->to('/iniciarsesion_view');
        }
    }

    public function buscar_usuario()
    {
        $session = session();
        $id = $session->get('id');
        $usuario_model = new Usuarios_model();
        $usuario = $usuario_model->find($id);
        $data['titulo'] = 'Mi informacion';
        $data['usuario'] = $usuario;

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/panel-carrito');
        echo view('front/plantilla_perfil', $data);
        echo view('front/boton_inicio');
        echo view('front/footer_view');
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/iniciarsesion_view');
    }
}