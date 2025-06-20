<?php

namespace App\Models;

use CodeIgniter\Model;

class Marca_model extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';
    protected $allowedFields = ['nombre'];

    /**
     * Devuelve todos los registros de la tabla 'Marcas'.
     */
    public function getMarcas()
    {
        return $this->findAll();
    }
}