<?php namespace App\Models;

use CodeIgniter\Model;

class Consultas_Model extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'correo', 'telefono', 'mensaje', 'fecha'];
    protected $useTimestamps = true;
    protected $createdField  = 'fecha';
    protected $updatedField  = '';
}
