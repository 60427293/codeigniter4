<?php

namespace App\Controllers;

use App\Models\ProfesoresModel;

class Profesores extends BaseController
{
    protected $modelprofesores;
    public function __construct(){
        $this->modelprofesores = new ProfesoresModel();
    }

    public function index($activo=1)
    {
        //http://localhost/codeigniter4/public/Profesores
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelprofesores->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Profesores",
            "datos" => $resultado
        ];
        return view("profesores/lista",$datos);
    }
    public function nuevo(){
        $datos = [
            "titulo" => "Agregar Profesores"
        ];
        return view("profesores/nuevo",$datos);
        //return debuelve la vista y termina el codigo
        //echo debuelve la vista y permite seguir ejecutando codigo
    }
    public function guardar(){
        $valores = [
            //"campo tabla" => $this->request->getpost("name_input formulario"),
            "dni" => $this->request->getpost("dni"),
            "nombres" => $this->request->getpost("nombres"),
            "apellidos" => $this->request->getpost("apellidos"),
            "celular" => $this->request->getpost("celular"),
            "email" => $this->request->getpost("email")
        ];
        $this->modelprofesores->insert($valores);
        return redirect()->to("http://localhost/codeigniter4/public/profesores");
    }
    public function editar($id){
        $resultado = $this->modelprofesores->where("idprofesor",$id)->first();
        $datos = [
            "titulo" => "Editar Profesor",
            "datos" => $resultado
        ];
        return view("profesores/editar",$datos);
    }
    public function actualizar(){
        $id = $this->request->getpost("idprofesor");
        $valores = [
            "dni" => $this->request->getpost("dni"),
            "nombres" => $this->request->getpost("nombres"),
            "apellidos" => $this->request->getpost("apellidos"),
            "celular" => $this->request->getpost("celular"),
            "email" => $this->request->getpost("email")
        ];
        $this->modelprofesores->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/profesores");
    }
    public function ocultar($id){
        $valores=[
            "activo"=>0
        ];
        $this->modelprofesores->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/profesores");
    }
    public function eliminados($activo=0)
    {
        //http://localhost/codeigniter4/public/Profesor
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelprofesores->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Profesor eliminados",
            "datos" => $resultado
        ];
        return view("profesores/eliminados",$datos);
    }
    public function resturar($id){
        $valores=[
            "activo"=>1
        ];
        $this->modelprofesores->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/profesores/eliminados");
    }
}