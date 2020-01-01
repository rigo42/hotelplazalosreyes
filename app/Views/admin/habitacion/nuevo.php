<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Habitaciones | Nuevo - <?= $this->endSection() ?>

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
                            <li class="breadcrumb-item active">Nuevo</li>
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
            <div class="card">
                <?php 
                $form = array("id" => "form", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open(base_url().'AdminHabitacion/nuevoHabitacion',$form); ?>
         
                <div class="card-body">
                    <h6 class="card-title text-center">Nueva habitación</h6>
                    
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Habitación</label>
                        <div class="col-sm-12">
                            <input type="text" required name="habitacion" class="form-control" placeholder="Nombre de la habitación">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">precio</label>
                        <div class="col-sm-3">
                            <input type="number" required name="precio" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Estrellas</label>
                        <div class="col-sm-3">
                          <select required class="select form-control" class="col-md-6" name="cantidad_estrella">
                              <option value="5">5 Estrellas</option>
                              <option value="4">4 Estrellas</option>
                              <option value="3">3 Estrellas</option>
                              <option value="2">2 Estrellas</option>
                              <option value="1">1 Estrella</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Cantidad de personas</label>
                        <div class="col-sm-3">
                            <input type="number" maxlength="1" required name="cantidad_persona" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Metros cuadrados</label>
                        <div class="col-sm-3">
                            <input type="number" required name="metro_cuadrado" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Descripción</label>
                        <div class="col-sm-12">
                            <textarea type="text" required name="descripcion" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Imagen principal</label>
                        <div class="col-sm-12">
                            <input type="file" required name="imagen" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Imagenes de la habitación</label>
                        <div class="col-sm-12">
                            <input type="file" name="imagenes[]" class="form-control" multiple>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Agregar habitación</button>
                    </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
      <!-- End Cuerpo -->
    </div>
</div>

<?= $this->endSection() ?>