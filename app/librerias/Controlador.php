<?php 
    // Clase controlador main
    // Se encarga de poder cargar los modelos y las vistas
    class Controlador{
       
        // Cargar Vista
        public function vista($vista, $datos = []){

            if (file_exists('../app/vistas/' . $vista . '.php')) {

                // carga
                require_once '../app/vistas/' . $vista . '.php';
            }else{

                // si no existe
                require_once '../app/vistas/error/404' . '.php';
            }
        }
    }
 ?>