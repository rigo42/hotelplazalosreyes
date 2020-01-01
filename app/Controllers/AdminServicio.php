<?php namespace App\Controllers;

use \App\Models\AdminServicioModelo;
use \App\Controllers\OptimizarImagen;

class AdminServicio extends BaseController{

	private $adminServicioModelo;

	public function  __construct(){
		$this->adminServicioModelo = new AdminServicioModelo();
	}

	public function index(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resServicio = $this->adminServicioModelo->mostrar();
		$data = [
			'resServicio' => $resServicio
		];
		return view('admin/servicio/index', $data);
	}

	public function nuevo(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		return view('admin/servicio/nuevo');
	}

	public function editar($id){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$resServicio = $this->adminServicioModelo->construir($id);
		$data = [
			'id' => $id,
			'resServicio' => $resServicio,
		];
		return view('admin/servicio/editar',$data);
	}

	public function nuevoServicio(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		if($_POST){
			
			$titulo = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('titulo')));
			$sub_titulo  = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('sub_titulo')));
			$descripcion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('descripcion')));
			
			//Imagen principal
			$imagenTemp = $this->request->getFile('imagen');
			$imagen = time()."-".str_replace(" ",'-',$titulo).".".pathinfo($imagenTemp->getName(),PATHINFO_EXTENSION);
			$ruta = 'public/cliente/images/servicio/';
			new OptimizarImagen($imagenTemp,$imagen,$ruta,800,600);  

			$data = [
				'titulo'   => $titulo,
				'sub_titulo' => $sub_titulo,
				'descripcion'    => $descripcion,
				'imagen'	=> $imagen
			];
			$this->adminServicioModelo->nuevo($data);

			return redirect()->to(base_url().'AdminServicio');

		}
	}

	public function editarServicio(){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		if($_POST){
			
			$idServicio = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('idServicio')));
			$titulo = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('titulo')));
			$sub_titulo  = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('sub_titulo')));
			$descripcion = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('descripcion')));
			 
			//Imagen principal
			$imagenBackup = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('imagenBackup')));
			$imagenTemp = $this->request->getFile('imagen');
			$imagen =  "";
			if($imagenTemp->getName() != null || $imagenTemp->getName() != ""){
				
				if(file_exists('public/cliente/images/servicio/'.$imagenBackup)){
					unlink('public/cliente/images/servicio/'.$imagenBackup);
				}
				$imagen = time()."-".str_replace(" ",'-',$titulo).".".pathinfo($imagenTemp->getName(),PATHINFO_EXTENSION);
				$ruta = 'public/cliente/images/servicio/';
				new OptimizarImagen($imagenTemp,$imagen,$ruta,800,600); 

			}else{
				$imagen = $imagenBackup;
			}
			
			$data = [
				'titulo'   => $titulo,
				'sub_titulo' => $sub_titulo,
				'descripcion'    => $descripcion,
				'imagen'	=> $imagen
			];

			$this->adminServicioModelo->editar($idServicio, $data);

			return redirect()->to(base_url().'AdminServicio');

		}
	}


	public function eliminar($idServicio){
		if(!$this->session->has('usuario')){
			return redirect()->to(base_url().'login');
		}
		$this->adminServicioModelo->eliminar($idServicio);
		return redirect()->to(base_url().'AdminServicio/');
	}

}
