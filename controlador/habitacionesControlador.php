<title >Habitaciones</title>
<?php 
	class habitacionesControlador{

		public function index(){
			include('vista/head/index.php');
			include('vista/menu/index.php');

			include('vista/habitacion/habitacion.php');

			include('vista/footer/index.php');
		}	

	}	
?>