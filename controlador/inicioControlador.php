
<?php
class inicioControlador {

        public function index() {
                include('vista/head/index.php');
                echo "<title>Inicio</title>";
                include('vista/menu/index.php');

                include('vista/anuncio/index.php');
                include('vista/habitacionMasRentada/index.php');
                include('vista/galeria/index.php');
                include('vista/servicio/index.php');
                include('vista/videoPromocional/videoHotel.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
	}

}
?>
