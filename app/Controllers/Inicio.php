<?php

namespace App\Controllers;

use App\Models\AlumnosModel;
use App\Models\ProfesoresModel;
use App\Models\CursosModel;

class Inicio extends BaseController
{
    public function __construct(){
        
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
    
}