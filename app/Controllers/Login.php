<?php namespace App\Controllers;

use \App\Models\LoginModelo;

class Login extends BaseController{

	private $loginModelo;

	public function  __construct(){
		$this->loginModelo = new loginModelo();
	}

	public function index(){
		return view('cliente/login/index');
	}

	public function iniciarSesion(){
    	if($_POST){
			$usuario = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('usuario')));
	    	$password = $this->security->sanitizeFilename(encode_php_tags($this->request->getPost('password')));

	    	$data = [
	    		"usuario" => $usuario
	    	];
	    	
	    	$resUsuario = $this->loginModelo->iniciarSesion($data);
	    	
	    	if($resUsuario){

	    		foreach ($resUsuario as $key){
                    $hash = $key['password'];
                }              

                if(password_verify($password, $hash)){

					$this->session->set($data);
					return redirect()->to(base_url().'AdminHabitacion');

                }else{
                	return redirect()->to(base_url().'login');
                }
	    	}else{
	    		return redirect()->to(base_url().'login');
	    	}

    	}else{
			return redirect()->to(base_url().'login');
		}
    }

    public function cerrarSesion(){
    	
    		$this->session->destroy();
    		return redirect()->to(base_url().'login');
    }


}
