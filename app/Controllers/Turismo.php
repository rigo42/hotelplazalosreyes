<?php namespace App\Controllers;

class Turismo extends BaseController{

	public function index($lugar=''){
		if(empty($lugar)){
			return view('cliente/turismo/viajeroResponsable');
		}else if($lugar === 'playa-san-blas'){
			return view('cliente/turismo/viajeroSanBlas');
		}else if($lugar === 'mexcaltitan'){
			return view('cliente/turismo/viajeroMexcaltitan');
		}else if($lugar === 'playa-los-corchos'){
			return view('cliente/turismo/viajeroCorchos');
		}else{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

}
