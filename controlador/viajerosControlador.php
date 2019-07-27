<?php
class viajerosControlador {

        public function responsabilidad() {
                include('vista/head/index.php');
                 echo "<title >Viajeros | Responsabilidad</title>";
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroResponsable.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
	}

        public function sanBlas() {
                include('vista/head/index.php');
                echo "<title >Viajeros | San blas</title>";
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroSanBlas.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
        }

        public function mexcaltitan() {
                include('vista/head/index.php');
                echo "<title >Viajeros | Mexcaltitán</title>";
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroMexcaltitan.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
        }

        public function corchos() {
                include('vista/head/index.php');
                echo "<title >Viajeros | Playa los corchos</title>";
                include('vista/menu/index.php');

                include('vista/anuncioSaberMas/viajeroCorchos.php');

                include('vista/footer/index.php');
                include('vista/loader/index.php');
        }

}
?>
