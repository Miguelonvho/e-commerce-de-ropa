<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'perfiles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descripcion'];
}