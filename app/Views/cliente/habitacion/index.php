<?php use \App\Models\AdminHabitacionImagenModelo; 
$adminHabitacionImagenModelo = new AdminHabitacionImagenModelo();
?>

<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Habitaciones - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>Solo basta una llamada para reservar<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="site-section">
  <div class="container">
    <div class="row">

    <?php foreach ($resHabitacion as $key): ?>
      <div class="col-md-4 mb-4">
        <div class="media d-block room mb-0">
          <figure>
            <img src="<?= base_url() ?>public/cliente/images/habitacion/<?=$key['imagen']?>" alt="<?=$key['habitacion']?>" class="img-fluid">
            <div class="overlap-text">
              <span>
                Estrellas
                <?php for ($i=1; $i <= $key['cantidad_estrella']; $i++): ?>
                <span class="ion-ios-star"></span>
                <?php endfor; ?>
              </span>
            </div>
          </figure>
          <div class="media-body">
            <h3 class="mt-0"><a href="#"><?=$key['habitacion'];?></a></h3>
            <ul class="room-specs">
              <li><span class="ion-ios-people-outline"></span> <?=$key['cantidad_persona'];?> Personas</li>
              <li><span class="ion-ios-crop"></span> <?=$key['metro_cuadrado'];?> M<sup>2</sup></li>
              <li><span class="icon ion-logo-usd"></span> $<?=$key['precio'];?> MXN</li>
            </ul>
            <p><?=$key['descripcion'];?>. </p>
            <p><a href="#" data-toggle="modal" data-target="#id<?=$key['id_habitacion'];?>" class="btn btn-primary btn-sm">Ver fotos</a></p>
          </div>
        </div>
      </div>

      <!-- Modal King Size-->
      <div class="modal fade" id="id<?=$key['id_habitacion'];?>" tabindex="-1" role="dialog" aria-labelledby="kingsizeTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Habitación <?=$key['habitacion'];?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php 
            $resImagenes = $adminHabitacionImagenModelo->mostrarByIdHabitacion($key['id_habitacion']);
            $count = count($resImagenes);
            ?>
            <div id="carouselExampleControls<?=$key['id_habitacion'];?>" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php $n=0; foreach ($resImagenes as $keyImagen): ?>
                <?php 
                if($n == 0){
                  $class = "active";
                }else{
                  $class = "";
                }
                 $n++;
                ?>
                <div class="carousel-item <?=$class?>">
                  <img class="d-block w-100" src="<?= base_url() ?>public/cliente/images/habitacion/<?=$keyImagen['imagen']?>" alt="First slide">
                </div>
                <?php endforeach; ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls<?=$key['id_habitacion'];?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls<?=$key['id_habitacion'];?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- fin modal king size -->

      <?php endforeach; ?>

    </div>
  </div>
</section>





<!-- fin modal sencilla -->
<?= $this->endSection() ?>