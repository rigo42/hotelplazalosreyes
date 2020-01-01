<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Habitaciones más pedidas | Editar - <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Más pedidas</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                            <li class="breadcrumb-item">Más pedidas</li>
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
          <a href="<?=base_url()?>AdminHabitacionMasPedida/" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </p>
      </div>
      <!-- Cuerpo -->
        <div class="row">
            <div class="card">
                <?php 
                $form = array("id" => "form", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open(base_url().'AdminHabitacionMasPedida/editarHabitacion',$form); ?>
         
                <div class="card-body">
                    <h6 class="card-title text-center">Top 3 habitaciones</h6>
                    <?php for ($i=1; $i <= 3 ; $i++): ?>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Habitación más pedida #<?=$i?></label>
                        <div class="col-sm-7">
                            <select required class="select form-control" class="col-md-6" name="idHabitacion[]">
                              <?php foreach ($resHabitacionMasPedida as $key): 
                                if($key['puesto'] == $i):
                              ?>
                                    <option selected="" value="<?=$key['id_habitacion']?>"><?=$key['habitacion']?></option>
                              <?php
                                endif;
                              ?>
                              <?php endforeach; ?>

                              <?php foreach ($resHabitacion as $key): ?>
                              <option value="<?=$key['id_habitacion']?>"><?=$key['habitacion']?></option>
                              <?php endforeach; ?>
                          </select>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Modificar top 3</button>
                    </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
      <!-- End Cuerpo -->
    </div>
</div>

<?= $this->endSection() ?>