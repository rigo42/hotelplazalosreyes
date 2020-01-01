<?php namespace App\Models;

use CodeIgniter\Model; 

class AdminServicioModelo extends Model
{

    protected $table      = 'servicio';
     
    protected $primaryKey = 'id_servicio';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['titulo','sub_titulo','descripcion','imagen','fecha_nuevo','fecha_editar','fecha_eliminar'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_nuevo';
    protected $updatedField  = 'fecha_editar';
    protected $deletedField  = 'fecha_eliminar';

    
    public function construir($idServicio){
            $res = $this->withDeleted()->find([$idServicio]);
            return $res;
    }

    public function mostrar(){
            $this->select('*');
            $this->orderBy('id_servicio', 'desc');
            return $this->findAll();
    }

    public function nuevo($data){
            $this->insert($data);
    }

    public function editar($idServicio,$data){
            if(!$this->update($idServicio,$data)){
                    return $this->errors();
            }
    }

    public function eliminar($idServicio){
            if(!$this->delete($idServicio)){
                    return $this->errors();
            }
    }
  
}