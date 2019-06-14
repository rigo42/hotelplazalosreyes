<?php 
	class nosotrosControlador{

		public function index(){
			include('vista/head/index.php');
			echo "<title >Acerca de nosotros</title>";
			include('vista/menu/index.php');

			include('vista/nosotros/index.php');

			include('vista/footer/index.php');
		}	

	}	
?>