<?php

namespace App\Models;

use CodeIgniter\Model;

class Talle_model extends Model
{
    protected $table = 'talles';
    protected $primaryKey = 'id_talle';
    protected $allowedFields = ['nombre'];

    public function getTalles(){
        return $this->findAll();
    }
}