<?php

namespace App\Models;
use CodeIgniter\Model;

class Usuarios_model extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'usuario', 'pass', 'baja'];
}