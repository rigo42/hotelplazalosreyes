<?php namespace App\Models;

use CodeIgniter\Model; 

class LoginModelo extends Model
{

    protected $table      = 'usuario';
     
    protected $primaryKey = 'id_usuario';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario','password','fecha_nuevo','fecha_editar','fecha_eliminar'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_nuevo';
    protected $updatedField  = 'fecha_editar';
    protected $deletedField  = 'fecha_eliminar';

    
    public function iniciarSesion($data){
            $this->select('*');
            $this->where('usuario',$data['usuario']);
            return $this->findAll();
    }
        
}