<?= $this->extend('admin/base/index') ?>

<?= $this->section('title') ?>Admin | Más pedidas - <?= $this->endSection() ?>

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
                            <li class="breadcrumb-item active">Más pedidas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
      <div>
        <p>
          <a href="<?=base_url()?>AdminHabitacionMasPedida/nuevo" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </p>
      </div>
        <!-- Cuerpo -->
       <div class="row">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title text-center">Top 3 habitaciones más pedidas</h5>

              <?php if(empty($resHabitacionMasPedida)): ?>

              <h6>No hay habitaciones más pedidas</h6>

            <?php else : ?>
              
              <div class="table-responsive">
                <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">HABITACIÓN</th>
                          <th scope="col">IMAGEN</th>
                          <th scope="col">PUESTO</th>
                          <th scope="col"><i class="fas fa-eye"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n = 0;
                        foreach ($resHabitacionMasPedida as $key) :
                        ?>
                          <tr>
                            <td><?= ++$n ?></td>
                            <td><?= $key['habitacion'] ?></td>
                            <td><img height="50" width="50"  class="img-fluid img-thumbnail rounded-circle" src="<?= base_url() ?>public/cliente/images/habitacion/<?= $key['imagen'] ?>"></td>
                            <td><?= $key['puesto'] ?> lugar</td>
                            <td style="cursor: pointer;" onclick="editar()"><i class="fas fa-eye"></i></td>
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
  function editar(){
    location="<?=base_url()?>AdminHabitacionMasPedida/editar"
  }
</script>
<?= $this->endSection() ?>