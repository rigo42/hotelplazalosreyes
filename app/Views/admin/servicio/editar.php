<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Servicio | Editar - <?= $this->endSection() ?>

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
          <a href="<?=base_url()?>AdminServicio/" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </p>
      </div>

      <!-- Cuerpo -->
        <div class="row">
            
                <?php if($resServicio): ?>

                <?php 
                $form = array("id" => "form", "class" => "row col-md-12", "enctype" => "multipart/form-data");
                echo form_open(base_url().'AdminServicio/editarServicio',$form); ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center"><?=$resServicio[0]['titulo']?></h4>

                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Titulo</label>
                                <div class="col-sm-12">
                                    <input type="text" required name="titulo" class="form-control" placeholder="Nombre del servicio" value="<?=$resServicio[0]['titulo']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Sub titulo</label>
                                <div class="col-sm-12">
                                    <input type="text" required name="sub_titulo" class="form-control" value="<?=$resServicio[0]['sub_titulo']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea type="text" rows="5" required name="descripcion" class="form-control"><?=$resServicio[0]['descripcion']?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <input type="hidden" name="imagenBackup" value="<?=$resServicio[0]['imagen']?>">
                                <input type="file" class="d-none" id="imagen" name="imagen">
                                <label for="imagen" class="col-sm-12 control-label col-form-label">Imagen principal
                                    <div id="cambiarImagen">
                                        <img style="cursor: pointer;" src="<?=base_url()?>public/cliente/images/servicio/<?=$resServicio[0]['imagen']?>" class="img-fluid" title="Cambiar imagen">
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Editar servicio</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idServicio" value="<?=$id?>">
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
    $("#imagen").change(function () {
        var id = "#cambiarImagen";
        filePreview(this,id);
    });
</script>
<?= $this->endSection() ?>