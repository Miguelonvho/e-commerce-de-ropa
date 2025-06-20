<?php

namespace App\Models;

use CodeIgniter\Model;

class Genero_model extends Model
{
    protected $table = 'generos';
    protected $primaryKey = 'id_genero';
    protected $allowedFields = ['nombre'];

    /**
     * Devuelve todos los registros de la tabla 'Generos'.
     */
    public function getGeneros()
    {
        return $this->findAll();
    }
}