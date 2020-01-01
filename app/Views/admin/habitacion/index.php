<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Habitaciones - <?= $this->endSection() ?>

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
                            <li class="breadcrumb-item active">Habitaciones</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div>
        <p>
          <a href="<?=base_url()?>AdminHabitacion/nuevo" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </p>
      </div>
        <!-- Cuerpo -->
       <div class="row">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title text-center">Habitaciones</h5>

              <?php if(empty($resHabitacion)): ?>

              <h6>No hay habitaciones</h6>

            <?php else : ?>
              
              <div class="table-responsive">
                <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">HABITACIÓN</th>
                          <th scope="col">IMAGEN</th>
                          <th scope="col">PRECIO</th>
                          <th scope="col"><i class="fas fa-eye"></i></th>
                          <th scope="col"><i class="fas fa-times-circle"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n = 0;
                        foreach ($resHabitacion as $key) :
                        ?>
                          <tr>
                            <td><?= ++$n ?></td>
                            <td><?= $key['habitacion'] ?></td>
                            <td><img height="50" width="50"  class="img-fluid img-thumbnail rounded-circle" src="<?= base_url() ?>public/cliente/images/habitacion/<?= $key['imagen'] ?>"></td>
                            <td>$<?= $key['precio'] ?> MXN</td>
                            <td style="cursor: pointer;" onclick="editar('<?=$key["id_habitacion"]?>')"><i class="fas fa-eye"></i></td>
                            <td style="cursor: pointer;" onclick="eliminar('<?=$key["id_habitacion"]?>')"><i class="fas fa-times-circle"></i></td>
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
    location="<?=base_url()?>AdminHabitacion/editar/"+idHabitacion
  }
  function eliminar(idHabitacion){
    if(confirm("¿Estas seguro que quieres eliminar esta habitación?")){
      location="<?=base_url()?>AdminHabitacion/eliminar/"+idHabitacion
    }
  }
</script>
<?= $this->endSection() ?>