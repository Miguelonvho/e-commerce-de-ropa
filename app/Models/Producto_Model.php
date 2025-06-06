<?php

namespace App\Models;
use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields =
        [
            'nombre_prod',
            'precio_costo',
            'precio_venta',
            'imagen',
            'pass',
            'categoria_id',
            'marca_id',
            'talle_id',
            'genero_id',
            'edad_id',
            'stock',
            'stock_min',
            'eliminado',     
        ];
}