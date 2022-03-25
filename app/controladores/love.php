<?php 
    
    class Love extends Controlador{
        
        public function __construct()
        {
    
        }

        // vista inicio.php
        public function ahide_and_julio(){
            $datos = [
                'titulo' => 'Hola como estas'
            ];
            $this->vista('love/ahide&julio',$datos);
        }

         // vista miriam y nudito
        public function MYPP_AND_NUDITO(){
            $datos = [
                'titulo' => 'Hola como estas'
            ];
            $this->vista('love/miriam&nudito',$datos);
        }

        // vista servicio Base de datos
        public function db(){
            $this->vista('bytetics/basedatos');
        }
    }
    
 ?>

