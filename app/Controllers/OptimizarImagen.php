<?php namespace App\Controllers;

class OptimizarImagen extends BaseController{

	public function  __construct($archivo, $nombre, $ruta, $ancho, $alto){

    	try {

		\Config\Services::image()
	        ->withFile($archivo)
	        ->resize($ancho, $alto, true, 'height')
	        ->save($ruta.$nombre,90);

		}catch (CodeIgniter\Images\ImageException $e){
		        echo $e->getMessage();
		}

	}

}
