<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Alumnos extends BaseController
{
    protected $modelalumnos;
    public function __construct(){
        $this->modelalumnos = new AlumnosModel();
    }

    public function index($activo=1)
    {
        //http://localhost/codeigniter4/public/Alumnos
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelalumnos->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Alumnos",
            "datos" => $resultado
        ];
        return view("alumnos/lista",$datos);
    }
    public function nuevo(){
        $datos = [
            "titulo" => "Agregar Alumnos"
        ];
        return view("alumnos/nuevo",$datos);
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
        $this->modelalumnos->insert($valores);
        return redirect()->to("http://localhost/codeigniter4/public/alumnos");
    }
    public function editar($id){
        $resultado = $this->modelalumnos->where("idalumno",$id)->first();
        $datos = [
            "titulo" => "Editar Alumno",
            "datos" => $resultado
        ];
        return view("alumnos/editar",$datos);
    }
    public function actualizar(){
        $id = $this->request->getpost("idalumno");
        $valores = [
            "dni" => $this->request->getpost("dni"),
            "nombres" => $this->request->getpost("nombres"),
            "apellidos" => $this->request->getpost("apellidos"),
            "celular" => $this->request->getpost("celular"),
            "email" => $this->request->getpost("email")
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/alumnos");
    }
    public function ocultar($id){
        $valores=[
            "activo"=>0
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/alumnos");
    }
    public function eliminados($activo=0)
    {
        //http://localhost/codeigniter4/public/Alumnos
        // URL / controlador / metodo index por defecto
        $resultado = $this->modelalumnos->where("activo",$activo)->findAll();
        $datos = [
            "titulo" => "Tabla Alumnos eliminados",
            "datos" => $resultado
        ];
        return view("alumnos/eliminados",$datos);
    }
    public function resturar($id){
        $valores=[
            "activo"=>1
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/codeigniter4/public/alumnos/eliminados");
    }
}
