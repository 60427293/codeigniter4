<?php

namespace App\Controllers;

use App\Models\CursosModel;

class Cursos extends BaseController
{
    protected $modelcursos;
    public function __construct(){
        $this->modelcursos = new CursosModel();
    }

    public function index($activo=1)
    {
        //http://localhost/codeigniter4/public/Cursos
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelcursos->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Cursos",
            "datos" => $resultado
        ];
        return view("cursos/lista",$datos);
    }//revisar lo de abajo-------------------------------------------------------------------------
    public function nuevo(){
        $datos = [
            "titulo" => "Agregar Cursos"
        ];
        return view("cursos/nuevo",$datos);
        //return debuelve la vista y termina el codigo
        //echo debuelve la vista y permite seguir ejecutando codigo
    }
    public function guardar(){
        $valores = [
            //"campo tabla" => $this->request->getpost("name_input formulario"),
            "idalumno" => $this->request->getpost("idalumno"),
            "idprofesor" => $this->request->getpost("idprofesor"),
            "curso" => $this->request->getpost("curso"),
            "creditos" => $this->request->getpost("creditos"),
            "notafinal" => $this->request->getpost("notafinal")
        ];
        $this->modelcursos->insert($valores);
        return redirect()->to("http://localhost/codeigniter4/public/cursos");
    }
    public function editar($id){
        $resultado = $this->modelcursos->where("idcurso",$id)->first();
        $datos = [
            "titulo" => "Editar Curso",
            "datos" => $resultado
        ];
        return view("cursos/editar",$datos);
    }
    public function actualizar(){
        $id = $this->request->getpost("idcurso");
        $valores = [
            "idalumno" => $this->request->getpost("idalumno"),
            "idprofesor" => $this->request->getpost("idprofesor"),
            "curso" => $this->request->getpost("curso"),
            "creditos" => $this->request->getpost("creditos"),
            "notafinal" => $this->request->getpost("notafinal")
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/cursos");
    }
    public function ocultar($id){
        $valores=[
            "activo"=>0
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/cursos");
    }
    public function eliminados($activo=0)
    {
        //http://localhost/codeigniter4/public/Cursos
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelcursos->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Cursos eliminados",
            "datos" => $resultado
        ];
        return view("cursos/eliminados",$datos);
    }
    public function resturar($id){
        $valores=[
            "activo"=>1
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/cursos/eliminados");
    }
}