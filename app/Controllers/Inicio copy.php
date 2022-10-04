<?php

namespace App\Controllers;

use App\Models\AlumnosModel;
use App\Models\ProfesoresModel;
use App\Models\CursosModel;

class Inicio extends BaseController
{
    protected $modelalumnos;
    protected $modelprofesores;
    protected $modelcursos;
    public function __construct(){
        $this->modelalumnos = new AlumnosModel();
        $this->modelprofesores = new ProfesoresModel();
        $this->modelcursos = new CursosModel();
    }

    public function index($nombres = "Danny Jose",$edad = 20)
    {
        //http://localhost/codeigniter4/public/Inicio/index/Danny%20Jose/20
        // URL / controlador / metodo / dato 1 / dato 2
        $contactos = [
            //"nombres" => "Danny Jose",
            "nombres" => $nombres,
            "apellidos" => "Hurtado Champi",
            "edad"=> $edad
        ];
        return view('frontend/admin/admin',$contactos);
    }
    public function veralumnos(){
        $resultado = $this->modelalumnos->findAll();
        $datos = [
            "titulo" => "Tabla Alumnos",
            "datos" => $resultado
        ];
        return view("alumnos/lista",$datos);
    }
    public function verprofesores(){
        $resultado = $this->modelprofesores->findAll();
        $datos = [
            "titulo" => "Tabla Profesores",
            "datos" => $resultado
        ];
        return view("profesores/lista",$datos);
    }
    public function vercursos(){
        $resultado = $this->modelcursos->findAll();
        $datos = [
            "titulo" => "Tabla Cursos",
            "datos" => $resultado
        ];
        return view("cursos/lista",$datos);
    }
}