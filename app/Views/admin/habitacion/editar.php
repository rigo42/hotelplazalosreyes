<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Habitaciones | Editar - <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Habitaciones</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                            <li class="breadcrumb-item">Habitaciones</li>
                            <li class="breadcrumb-item active">Editar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div>
        <p>
          <a href="<?=base_url()?>AdminHabitacion/" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </p>
      </div>

      <!-- Cuerpo -->
        <div class="row">
            
                <?php if($resHabitacion): ?>

                <?php 
                $form = array("id" => "form", "class" => "row col-md-12", "enctype" => "multipart/form-data");
                echo form_open(base_url().'AdminHabitacion/editarHabitacion',$form); ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center"><?=$resHabitacion[0]['habitacion']?></h4>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Habitación</label>
                                <div class="col-sm-12">
                                    <input type="text" required name="habitacion" class="form-control" placeholder="Nombre de la habitación" value="<?=$resHabitacion[0]['habitacion']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">precio</label>
                                <div class="col-sm-3">
                                    <input type="number" required name="precio" class="form-control" value="<?=$resHabitacion[0]['precio']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Estrellas</label>
                                <div class="col-sm-4">
                                  <select required class="select form-control" class="col-md-6" name="cantidad_estrella">
                                      <option <?=$resHabitacion[0]['cantidad_estrella'] == 5 ? 'selected' : '' ?> value="5">5 Estrellas</option>
                                      <option <?=$resHabitacion[0]['cantidad_estrella'] == 4 ? 'selected' : '' ?>  value="4">4 Estrellas</option>
                                      <option <?=$resHabitacion[0]['cantidad_estrella'] == 3 ? 'selected' : '' ?>  value="3">3 Estrellas</option>
                                      <option <?=$resHabitacion[0]['cantidad_estrella'] == 2 ? 'selected' : '' ?>  value="2">2 Estrellas</option>
                                      <option <?=$resHabitacion[0]['cantidad_estrella'] == 1 ? 'selected' : '' ?>  value="1">1 Estrella</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Cantidad de personas</label>
                                <div class="col-sm-3">
                                    <input type="number" maxlength="1" required name="cantidad_persona" class="form-control" value="<?=$resHabitacion[0]['cantidad_persona']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Metros cuadrados</label>
                                <div class="col-sm-3">
                                    <input type="number" required name="metro_cuadrado" class="form-control" value="<?=$resHabitacion[0]['metro_cuadrado']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea type="text" required name="descripcion" class="form-control"><?=$resHabitacion[0]['descripcion']?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="imagenBackup" value="<?=$resHabitacion[0]['imagen']?>">
                                <input type="file" class="d-none" id="imagen" name="imagen">
                                <label for="imagen" class="col-sm-12 control-label col-form-label">Imagen principal
                                    <div id="cambiarImagen">
                                        <img style="cursor: pointer;" src="<?=base_url()?>public/cliente/images/habitacion/<?=$resHabitacion[0]['imagen']?>" class="img-fluid" title="Cambiar imagen">
                                    </div>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Imagenes de la habitación</h4>
                        </div>
                        <div class="card-body row">
                            <?php $n = 0; foreach ($resHabitacionImagen as $key): ?>
                            <div class="form-group col-sm-4">
                                <label class="col-sm-12 control-label col-form-label">Imagen <?=++$n;?> 
                                    <i  style="cursor: pointer;" 
                                        class="fas fa-times-circle"
                                        onclick="eliminarImagen('<?=$key->id_habitacion?>','<?=$key->id_habitacion_imagen?>','<?=$key->imagen?>')"></i>
                                </label>
                                <img src="<?=base_url()?>public/cliente/images/habitacion/<?=$key->imagen?>" class="img-fluid">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Agregar más imagenes de esta habitación</label>
                                <div class="col-sm-12">
                                    <input type="file" name="imagenes[]" class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idHabitacion" value="<?=$id?>">
                <?= form_close(); ?>

                <?php else: ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Datos vacios</h4>
                    </div>
                </div>
                
                <?php endif; ?>

            
        </div>
      <!-- End Cuerpo -->
    </div>
</div>

<script type="text/javascript">
    function eliminarImagen(idHabitacion, idHabitacionImagen, imagen){
        location="<?=base_url()?>AdminHabitacion/eliminarImagen/"+idHabitacion+"/"+idHabitacionImagen+"/"+imagen;
    }
    $("#imagen").change(function () {
        var id = "#cambiarImagen";
        filePreview(this,id);
    });
</script>
<?= $this->endSection() ?>