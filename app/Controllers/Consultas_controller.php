<?php namespace App\Controllers;

use App\Models\Consultas_Model;

class Consultas_controller extends BaseController
{
    public function guardar()
    {
        $model = new Consultas_Model();

        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'correo'   => $this->request->getPost('correo'),
            'telefono' => $this->request->getPost('telefono'),
            'mensaje'  => $this->request->getPost('mensaje'),
        ];

        $model->save($data);

        return redirect()->to('/contacto')->with('mensaje', 'Consulta enviada correctamente.');
    }

    public function listar()
    {
        $model = new Consultas_Model();
        $data['consultas'] = $model->orderBy('fecha', 'DESC')->findAll();

        echo view('front/head_view', ['titulo' => 'Consultas']);
        echo view('front/nav_view');
        echo view('front/consultas_view', $data);  // Vista tipo CRUD
        echo view('front/footer_view');
    }
}
