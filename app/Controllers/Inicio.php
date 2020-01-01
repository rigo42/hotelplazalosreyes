<?php namespace App\Controllers;
/*
use \App\Models\AdminHabitacionMasPedidaModelo;
use \App\Models\AdminServicioModelo;
*/
class Inicio extends BaseController{
/*
	private $adminHabitacionMasPedidaModelo;
	private $adminServicioModelo;

	public function  __construct(){
		$this->adminHabitacionMasPedidaModelo = new AdminHabitacionMasPedidaModelo();
		$this->adminServicioModelo = new AdminServicioModelo();
	}
*/
	public function index(){
		/*$resHabitacionMasPedida = $this->adminHabitacionMasPedidaModelo->mostrar();
		$resServicio = $this->adminServicioModelo->mostrar();

		$data = [
			'resHabitacionMasPedida' => $resHabitacionMasPedida,
			'resServicio' => $resServicio
		];
		return view('cliente/inicio/index', $data);
		*/
		return "OLA";
	}

}
