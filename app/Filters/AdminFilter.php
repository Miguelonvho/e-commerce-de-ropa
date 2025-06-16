<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Primero verifico si está logueado
        if (!$session->get('logged_in')) {
            return redirect()->to('/iniciarsesion_view');
        }

        // Ahora verifico si tiene perfil de admin
        if ($session->get('perfil_id') != 1) {
            return redirect()->to('/plantilla_principal');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
