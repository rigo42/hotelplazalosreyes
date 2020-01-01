<?php namespace App\Models;

use CodeIgniter\Model; 

class AdminHabitacionImagenModelo extends Model
{

    protected $table      = 'habitacion_imagen';
     
    protected $primaryKey = 'id_habitacion_imagen';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_habitacion','imagen','descripcion','fecha_nuevo','fecha_editar','fecha_eliminar'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_nuevo';
    protected $updatedField  = 'fecha_editar';
    protected $deletedField  = 'fecha_eliminar';

    
    public function construir($idHabitacionImagen){
            $res = $this->withDeleted()->find([$idHabitacionImagen]);
            return $res;
    }

    public function mostrar(){
            $this->select('*');
            $this->orderBy('id_habitacion', 'desc');
            return $this->findAll();
    }

     public function mostrarByIdHabitacion($idHabitacion){
            $this->select('*');
            $this->where('id_habitacion', $idHabitacion);
            return $this->findAll();
    }

    public function nuevo($data){
            $this->insertBatch($data);
            return $this->insertID();
    }

    public function editar($idHabitacion,$data){
            if(!$this->update($idHabitacion,$data)){
                    return $this->errors();
            }
    }

    public function eliminar($idHabitacionImagen){
            if(!$this->delete($idHabitacionImagen)){
                    return $this->errors();
            }
    }
        
}