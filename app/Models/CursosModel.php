<?php

namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
    protected $table      = 'cursos';
    protected $primaryKey = 'idcurso';

    protected $useAutoIncrement = true; //tambien se configuro como autoincremental en phpMyAdmin

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //false para poder eliminar datos

    protected $allowedFields = ['idalumno', 'idprofesor', 'curso', 'creditos', 'notafinal','activo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}