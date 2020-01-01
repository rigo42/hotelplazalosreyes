<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Servicio | Nuevo - <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Servicio</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                            <li class="breadcrumb-item">Servicio</li>
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
          <a href="<?=base_url()?>AdminServicio/" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </p>
      </div>
      <!-- Cuerpo -->
        <div class="row">
            <div class="card">
                <?php 
                $form = array("id" => "form", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open(base_url().'AdminServicio/nuevoServicio',$form); ?>
         
                <div class="card-body">
                    <h6 class="card-title text-center">Nuevo servicio</h6>
                    
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Titulo</label>
                        <div class="col-sm-12">
                            <input type="text" required name="titulo" class="form-control" placeholder="Nombre del servicio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label col-form-label">Sub titulo</label>
                        <div class="col-sm-12">
                            <input type="text" required name="sub_titulo" class="form-control">
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
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Agregar servicio</button>
                    </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
      <!-- End Cuerpo -->
    </div>
</div>

<?= $this->endSection() ?>