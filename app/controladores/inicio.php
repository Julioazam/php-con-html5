<?php 
	
	class Inicio extends Controlador{
		
		public function __construct()
		{
	
		}

		// vista inicio.php
		public function index(){
			$datos = [
				'titulo' => 'Hola como estas'
			];
			$this->vista('bytetics/inicio',$datos);
		}

		// vista servicio Base de datos
		public function db(){
			$this->vista('bytetics/basedatos');
		}

		// vista servicio Base de datos
		public function servicios_db(){
			$this->vista('bytetics/basedatos');
		}

		// vista servicios_web
		public function servicios_web(){
			$this->vista('bytetics/web');
		}

		// vista servicios_web
		public function web(){
			$this->vista('bytetics/web');
		}

		// vista servicios.php
		public function mantenimiento(){
			$this->vista('bytetics/mantenimiento');
		}

		// vista servicios.php
		public function servicios_mantenimiento(){
			$this->vista('bytetics/mantenimiento');
		}

		// vista servicios.php
		public function servicios_marketing(){
			$this->vista('bytetics/marketing');
		}

		// vista servicios.php
		public function marketing(){
			$this->vista('bytetics/marketing');
		}

		

		// vista nosotros.php
		public function nosotros(){
			$this->vista('bytetics/nosotros');
		}
		

		// vista contacto.php
		public function contacto(){
			$this->vista('bytetics/contacto');
		}

		// vista enviar email.php
		public function enviar(){
			$this->vista('bytetics/enviar');
		}

		public function envio_exitoso(){
			$this->vista('Mensajes/envio-exitoso');
		}

		// vista login.php
		public function login(){
			$this->vista('sistema/login');
		}
	}
	
 ?>

