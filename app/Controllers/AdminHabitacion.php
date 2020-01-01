<?php namespace App\Controllers;

use \App\Models\AdminHabitacionModelo;
use \App\Models\AdminHabitacionImagenModelo;
use \App\Controllers\OptimizarImagen;

class AdminHabitacion extends BaseController{

	private $adminHabitacionModelo;

	public function  __construct(){
		$this->adminHabitacionModelo = new AdminHabitacionModelo();
		$this->adminHabitacionImagenModelo = new AdminHabitacionImagenModelo();
	}

	public function index(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resHabitacion = $this->adminHabitacionModelo->mostrar();
		$data = [
			'resHabitacion' => $resHabitacion
		];
		return view('admin/habitacion/index', $data);
	}

	public function nuevo(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		return view('admin/habitacion/nuevo');
	}

	public function editar($id){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resHabitacion = $this->adminHabitacionModelo->construir($id);
		$resHabitacionImagen = $this->adminHabitacionModelo->imagenes($id);
		$data = [
			'id' => $id,
			'resHabitacion' => $resHabitacion,
			'resHabitacionImagen' => $resHabitacionImagen
		];
		return view('admin/habitacion/editar',$data);
	}

	public function nuevoHabitacion(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		if($_POST){
			
			$habitacion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('habitacion')));
			$precio  = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('precio')));
			$cantidad_estrella = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('cantidad_estrella')));
			$cantidad_persona = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('cantidad_persona')));
			$metro_cuadrado = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('metro_cuadrado')));
			$descripcion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('descripcion')));
			
			//Imagen principal
			$imagenTemp = $this->request->getFile('imagen');
			$imagen = time()."-".str_replace(" ",'-',$habitacion).".".pathinfo($imagenTemp->getName(),PATHINFO_EXTENSION);
			$ruta = 'public/cliente/images/habitacion/';
			new OptimizarImagen($imagenTemp,$imagen,$ruta,800,600);  

			$data = [
				'habitacion'   => $habitacion,
				'precio' => $precio,
				'cantidad_estrella'    => $cantidad_estrella,
				'cantidad_persona'    => $cantidad_persona,
				'metro_cuadrado'    => $metro_cuadrado,
				'descripcion' => $descripcion,
				'imagen'	=> $imagen
			];
			$idHabitacion = $this->adminHabitacionModelo->nuevo($data);

			//Imagenes relacionadas con la habitacion
			if($imagenes = $this->request->getFiles()){
				$this->nuevoHabitacionImagen($idHabitacion, $imagenes);
			}

			return redirect()->to(base_url().'AdminHabitacion');

		}
	}

	public function editarHabitacion(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		if($_POST){
			
			$idHabitacion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('idHabitacion')));
			$habitacion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('habitacion')));
			$precio  = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('precio')));
			$cantidad_estrella = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('cantidad_estrella')));
			$cantidad_persona = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('cantidad_persona')));
			$metro_cuadrado = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('metro_cuadrado')));
			$descripcion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('descripcion')));
			
			//Imagen principal
			$imagenBackup = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('imagenBackup')));
			$imagenTemp = $this->request->getFile('imagen');
			$imagen =  "";
			if($imagenTemp->getName() != null || $imagenTemp->getName() != ""){
				
				if(file_exists('public/cliente/images/habitacion/'.$imagenBackup)){
					unlink('public/cliente/images/habitacion/'.$imagenBackup);
				}
				$imagen = time()."-".str_replace(" ",'-',$habitacion).".".pathinfo($imagenTemp->getName(),PATHINFO_EXTENSION);
				$ruta = 'public/cliente/images/habitacion/';
				new OptimizarImagen($imagenTemp,$imagen,$ruta,800,600); 

			}else{
				$imagen = $imagenBackup;
			}
			
			$data = [
				'id_habitacion' => $idHabitacion,
				'habitacion'   => $habitacion,
				'precio' => $precio,
				'cantidad_estrella'    => $cantidad_estrella,
				'cantidad_persona'    => $cantidad_persona,
				'metro_cuadrado'    => $metro_cuadrado,
				'descripcion' => $descripcion,
				'imagen'	=> $imagen
			];
			$this->adminHabitacionModelo->editar($idHabitacion, $data);

			//Imagenes relacionadas con la habitacion

			if($imagenes = $this->request->getFiles()){
				$this->nuevoHabitacionImagen($idHabitacion, $imagenes);
			}

			return redirect()->to(base_url().'AdminHabitacion');

		}
	}

	private function nuevoHabitacionImagen($idHabitacion, $imagenes){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$ruta = 'public/cliente/images/habitacion/';
		$data = [];
		foreach($imagenes['imagenes'] as $img){

			$imagenTemp = $img;
			$imagen = time()."-".$img->getName();

			if ($img->isValid() && ! $img->hasMoved()){
					new OptimizarImagen($imagenTemp, $imagen, $ruta, 800, 600);  
				$dataTmp = [
					'id_habitacion' => $idHabitacion,
					'imagen' => $imagen
				];
			   	array_push($data, $dataTmp);
			}else{
				echo "Los archivos no son validos";
				return false;
			}
	   }
	   $this->adminHabitacionImagenModelo->nuevo($data);
	}

	public function eliminar($idHabitacion){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$this->adminHabitacionModelo->eliminar($idHabitacion);
		return redirect()->to(base_url().'AdminHabitacion/');
	}

	public function eliminarImagen($idHabitacion, $idHabitacionImagen, $imagen){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$this->adminHabitacionImagenModelo->eliminar($idHabitacionImagen);
		if(file_exists("public/cliente/images/habitacion/".$imagen)){
			unlink("public/cliente/images/habitacion/".$imagen);
		}
		return redirect()->to(base_url().'AdminHabitacion/'.$idHabitacion);
	}

}
