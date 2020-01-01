<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Servicios - <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Servicios</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                            <li class="breadcrumb-item active">Servicios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div>
        <p>
          <a href="<?=base_url()?>AdminServicio/nuevo" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </p>
      </div>
        <!-- Cuerpo -->
       <div class="row">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title text-center">Servicios</h5>

              <?php if(empty($resServicio)): ?>

              <h6>No hay servicios</h6>

            <?php else : ?>
              
              <div class="table-responsive">
                <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">TITULO</th>
                          <th scope="col">IMAGEN</th>
                          <th scope="col"><i class="fas fa-eye"></i></th>
                          <th scope="col"><i class="fas fa-times-circle"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n = 0;
                        foreach ($resServicio as $key) :
                        ?>
                          <tr>
                            <td><?= ++$n ?></td>
                            <td><?= $key['titulo'] ?></td>
                            <td><img height="50" width="50"  class="img-fluid img-thumbnail rounded-circle" src="<?= base_url() ?>public/cliente/images/servicio/<?= $key['imagen'] ?>"></td>
                            <td style="cursor: pointer;" onclick="editar('<?=$key["id_servicio"]?>')"><i class="fas fa-eye"></i></td>
                            <td style="cursor: pointer;" onclick="eliminar('<?=$key["id_servicio"]?>')"><i class="fas fa-times-circle"></i></td>
                          </tr>
                      <?php endforeach; ?>
                      </tbody>
                </table>
              </div>
            <?php
              endif; 
            ?>
              
            </div>
          </div>
        </div>
        <!-- End Cuerpo -->
    </div>
</div>
<script type="text/javascript">
  function editar(idHabitacion){
    location="<?=base_url()?>AdminServicio/editar/"+idHabitacion
  }
  function eliminar(idHabitacion){
    if(confirm("¿Estas seguro que quieres eliminar este servicio?")){
      location="<?=base_url()?>AdminServicio/eliminar/"+idHabitacion
    }
  }
</script>
<?= $this->endSection() ?>