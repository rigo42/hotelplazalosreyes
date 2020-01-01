<?php namespace App\Models;

use CodeIgniter\Model; 

class AdminHabitacionModelo extends Model
{

    protected $table      = 'habitacion';
     
    protected $primaryKey = 'id_habitacion';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['habitacion','precio','cantidad_estrella','cantidad_persona','metro_cuadrado','descripcion','imagen','fecha_nuevo','fecha_editar','fecha_eliminar'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_nuevo';
    protected $updatedField  = 'fecha_editar';
    protected $deletedField  = 'fecha_eliminar';

    
    public function construir($idHabitacion){
            $res = $this->withDeleted()->find([$idHabitacion]);
            return $res;
    }

    public function mostrar(){
            $this->select('*');
            $this->orderBy('cantidad_estrella', 'desc');
            return $this->findAll();
    }

    public function nuevo($data){
            $this->insert($data);
            return $this->insertID();
    }

    public function editar($idHabitacion,$data){
            if(!$this->update($idHabitacion,$data)){
                    return $this->errors();
            }
    }

    public function eliminar($idHabitacion){
            if(!$this->delete($idHabitacion)){
                    return $this->errors();
            }
    }

    public function imagenes($idHabitacion){
        $sql   = "SELECT * FROM habitacion_imagen WHERE id_habitacion = $idHabitacion AND fecha_eliminar IS NULL";
        $query = $this->query($sql);
        $res   = $query->getResult();
        return $res;
    }
        
}