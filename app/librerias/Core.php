<?php 
/* Mapear la url ingresar en el navegador
    1.- Controlador
    2.- Método
    3.- Parámetro
*/
    class Core
    {
        
        protected $controladorActual = 'inicio'; // Mientras no encuentra un archivo carga
        protected $metodoActual = 'index';        // Mientras que no edite sera el index
        protected $parametros = [];            // Mientras se carge un parametro sera vacio

        
        //Constructor
        public function __construct(){
            $url = $this->getUrl();
            // print_r($this->getUrl());
            
            // Buscar en controladores si el controlador existe
            if (file_exists('../app/controladores/' . ucwords($url[0]). '.php')) {
                // Si esxiste se setea como controlador por defecto
                $this->controladorActual = ucwords($url[0]);

                unset($url[0]);
            }

            // requerir el controlador
            require_once '../app/controladores/' . $this->controladorActual . '.php';
            $this->controladorActual = new $this->controladorActual;

            // Verificar la 2da parte de la url seria el metodo
            if (isset($url[1])) {
                if (method_exists($this->controladorActual, $url[1])) {
                    //  Checamos el metodos
                    $this->metodoActual = $url[1];

                    unset($url[1]);
                }
            }

            // echo $this->metodoActual;
            // Obtener los parametros
            $this->parametros = $url ? array_values($url) : [];

            // Llamar callback con parametros array
            call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
        }


        // Obtiene su valor desde la carpeta public/.htaccess
        public function getUrl(){
            // echo $_GET['url'];

            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url;

            }
        }
    }
    
 ?>