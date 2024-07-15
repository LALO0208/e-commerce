<?php

class TemplateController{
/*======================================== 
Incluir la plantilla principal
==========================================*/
    public function index(){
        include "views/template.php";
    }
/*======================================== 
Ruta principal o Dominio del sitio
==========================================*/
    static public function path(){

        if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER("HTTPS"))){
            return "https://". $_SERVER["SERVER_NAME"]. "/";
        }else{
            return "http://". $_SERVER["SERVER_NAME"]. "/";
        }

    }
}