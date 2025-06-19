<?php

namespace App\Models;

use CodeIgniter\Model;

class Ventas_cabecera_model extends Model
{
    protected $table = 'ventas_cabecera';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fecha',
        'usuario_id',
        'total_venta'
    ];

    /**
     * Obtiene todas las ventas con datos del usuario.
     */
    public function getBuilderVentas_cabecera()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('ventas_cabecera');
        $builder->select('ventas_cabecera.*, usuarios.nombre, usuarios.apellido');
        $builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');

        $query = $builder->get();
        return $query->getResultArray();
    }

    /**
     * Devuelve las ventas para un usuario específico o todas si no se pasa ID.
     */
    public function getVentas($id_usuario = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('ventas_cabecera');
        $builder->select('ventas_cabecera.*, usuarios.nombre, usuarios.apellido');
        $builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');

        if ($id_usuario !== null) {
            $builder->where('ventas_cabecera.usuario_id', $id_usuario);
        }

        $query = $builder->get();
        return $query->getResultArray();
    }
}
