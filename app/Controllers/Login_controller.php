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

        $data = $model->where('email', $email)->first();

        if ($data) {
            if ($data['baja'] === 'SI') {
                $session->setFlashdata('msg', 'El usuario está dado de baja.');
                return redirect()->to('/iniciarsesion_view');
            }

            if (password_verify($password, $data['pass'])) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => true,
                ];
                $session->set($ses_data);
                $session->setFlashdata('welcome_message', '¡Bienvenido!');
                return redirect()->to('/plantilla_principal');
            } else {
                $session->setFlashdata('error_password', 'Contraseña incorrecta');
                return redirect()->to('/iniciarsesion_view');
            }
        } else {
            $session->setFlashdata('error_email', 'Correo no registrado');
            return redirect()->to('/iniciarsesion_view');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/iniciarsesion_view');
    }
}