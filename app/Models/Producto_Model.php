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

    public function buscarProductos($buscar = null)
    {
        $builder = $this->where('eliminado', 'NO');

        if ($buscar) {
            $builder = $builder
                ->groupStart()
                ->like('nombre_prod', $buscar)
                ->orLike('precio_costo', $buscar)
                ->orLike('precio_venta', $buscar)
                ->orLike('stock', $buscar)
                ->groupEnd();
        }

        return $builder->findAll();
    }

    public function filtrarProductos($filtros = [])
{
    $builder = $this->select('*')->where('eliminado', 'NO');

    if (!empty($filtros['genero'])) {
        $builder->where('genero_id', $filtros['genero']);
    }

    if (!empty($filtros['edad'])) {
        $builder->where('edad_id', $filtros['edad']);
    }

    if (!empty($filtros['categoria'])) {
        $builder->where('categoria_id', $filtros['categoria']);
    }

    if (!empty($filtros['marca'])) {
        $builder->where('marca_id', $filtros['marca']);
    }

    return $builder->findAll();
}


}

?>
