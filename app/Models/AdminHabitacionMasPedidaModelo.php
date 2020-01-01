<?php namespace App\Models;

use CodeIgniter\Model; 

class AdminHabitacionMasPedidaModelo extends Model
{

    protected $table      = 'habitacion_mas_pedida';
     
    protected $primaryKey = 'id_habitacion_mas_pedida';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_habitacion','puesto','fecha_nuevo','fecha_editar','fecha_eliminar'];

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
            $this->join("habitacion","habitacion.id_habitacion = habitacion_mas_pedida.id_habitacion");
            $this->orderBy('habitacion_mas_pedida.puesto', 'asc');
            return $this->findAll();
    }

     public function mostrarByIdHabitacion($idHabitacion){
            $this->select('*');
            $this->where('id_habitacion', $idHabitacion);
            return $this->findAll();
    }

    public function nuevo($data){
            $this->insertBatch($data);
    }

    public function editar($idHabitacion,$data){
            if(!$this->update($idHabitacion,$data)){
                    return $this->errors();
            }
    }

    public function eliminar(){
           $this->emptyTable('habitacion_mas_pedida');
    }
        
}