<?php

namespace App\Models;

use CodeIgniter\Model;

class Ventas_detalle_model extends Model
{
    protected $table = 'ventas_detalle';
    protected $primaryKey = 'id';
    protected $allowedFields = ['venta_id', 'producto_id', 'cantidad', 'precio'];

    /**
     * Devuelve los detalles de una venta específica, incluyendo info de producto, usuario y cabecera.
     */
    public function getDetalles($id = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('ventas_detalle');
        $builder->select('
            ventas_detalle.*,
            productos.nombre_prod AS producto_nombre,
            productos.imagen AS producto_imagen,
            ventas_cabecera.fecha AS fecha_venta,
            usuarios.nombre AS usuario_nombre,
            usuarios.apellido AS usuario_apellido
        ');
        $builder->join('ventas_cabecera', 'ventas_cabecera.id = ventas_detalle.venta_id');
        $builder->join('productos', 'productos.id_producto = ventas_detalle.producto_id');
        $builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');

        if ($id !== null) {
            $builder->where('ventas_cabecera.id', $id);
        }

        $query = $builder->get();
        return $query->getResultArray();
    }
}
