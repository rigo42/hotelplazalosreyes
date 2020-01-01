<?php namespace App\Controllers;

use \App\Models\AdminHabitacionMasPedidaModelo; 
use \App\Models\AdminHabitacionModelo;

class AdminHabitacionMasPedida extends BaseController{

	private $adminHabitacionMasPedidaModelo;

	public function  __construct(){
		$this->adminHabitacionMasPedidaModelo = new AdminHabitacionMasPedidaModelo();
	}

	public function index(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resHabitacionMasPedida = $this->adminHabitacionMasPedidaModelo->mostrar();

		$data = [
			'resHabitacionMasPedida' => $resHabitacionMasPedida,
		];
		return view('admin/habitacionMasPedida/index',$data);
	}

	public function nuevo(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$adminHabitacionModelo = new AdminHabitacionModelo();
		$resHabitacion = $adminHabitacionModelo->mostrar();

		$data = [
			'resHabitacion' => $resHabitacion,
		];
		return view('admin/habitacionMasPedida/nuevo',$data);
	}

	public function nuevoHabitacion(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$data = [];
		$idHabitacion = $this->request->getPost('idHabitacion');
		$puesto = 1;
		foreach($idHabitacion as $key){
			$dataTmp = [
				'id_habitacion' => $key,
				'puesto' => $puesto
			];
		   	array_push($data, $dataTmp);
		   	++$puesto;
	   }
	   $this->adminHabitacionMasPedidaModelo->nuevo($data);
	   return redirect()->to(base_url().'AdminHabitacionMasPedida/index');
	}

	public function editar(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resHabitacionMasPedida = $this->adminHabitacionMasPedidaModelo->mostrar();

		$adminHabitacionModelo = new AdminHabitacionModelo();
		$resHabitacion = $adminHabitacionModelo->mostrar();

		$data = [
			'resHabitacionMasPedida' => $resHabitacionMasPedida,
			'resHabitacion' => $resHabitacion,
		];
		return view('admin/habitacionMasPedida/editar',$data);
	}

	public function editarHabitacion(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$data = [];
		$idHabitacion = $this->request->getPost('idHabitacion');
		$puesto = 1;
		foreach($idHabitacion as $key){
			$dataTmp = [
				'id_habitacion' => $key,
				'puesto' => $puesto
			];
		   	array_push($data, $dataTmp);
		   	++$puesto;
	   }
	   $this->adminHabitacionMasPedidaModelo->eliminar();
	   $this->adminHabitacionMasPedidaModelo->nuevo($data);
	   return redirect()->to(base_url().'AdminHabitacionMasPedida/index');
	}

}
