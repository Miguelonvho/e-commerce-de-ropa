<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria_model extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $allowedFields = ['nombre', 'activo'];
    /**
     * Devuelve todas las categorías de la tabla.
     */
    public function getCategorias(){
        return $this->findAll();
    }
}
