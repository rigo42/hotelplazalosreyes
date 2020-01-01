<?php namespace App\Controllers;

use \App\Models\AdminHabitacionModelo;
use \App\Models\AdminHabitacionImagenModelo;

class Habitacion extends BaseController{

	private $adminHabitacionModelo;

	public function  __construct(){
		$this->adminHabitacionModelo = new AdminHabitacionModelo();
		$this->adminHabitacionImagenModelo = new AdminHabitacionImagenModelo();
	}

	public function index(){

		$resHabitacion = $this->adminHabitacionModelo->mostrar();
		$resHabitacionImagen = $this->adminHabitacionImagenModelo->mostrar();

		$data = [
			'resHabitacion' => $resHabitacion,
			'resHabitacionImagen' => $resHabitacionImagen
		];
		return view('cliente/habitacion/index',$data);
	}

}
