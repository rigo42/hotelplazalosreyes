<?php
class viajerosControlador {

        public function responsabilidad() {
                echo "<title >Viajeros | Responsabilidad</title>";
                include('vista/head/index.php');
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroResponsable.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
	}

        public function sanBlas() {
                echo "<title >Viajeros | San blas</title>";
                include('vista/head/index.php');
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroSanBlas.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
        }

        public function mexcaltitan() {
                echo "<title >Viajeros | Mexcaltitán</title>";
                include('vista/head/index.php');
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroMexcaltitan.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
        }

}
?>
