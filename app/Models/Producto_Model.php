<?php

namespace App\Models;
use CodeIgniter\Model;

class Producto_Model extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre_prod', 'precio_costo', 'precio_venta', 'imagen', 'categoria_id','marca_id','talle_id','genero_id','edad_id','stock','stock_min','eliminado'];


    public function getProductoAll()
    {
        return $this->where('eliminado', 0)->findAll(); // solo productos no eliminados
    }

}

?>