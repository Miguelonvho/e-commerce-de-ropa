<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'perfiles';
    protected $primaryKey = 'id_perfil';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'usuario', 'pass'];
}