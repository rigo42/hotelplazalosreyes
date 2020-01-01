
<section class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 heading-wrap text-center">
        <h4 class="sub-heading">Nuestras mejores habitaciones</h4>
          <h2 class="heading">Mas pedidas</h2>
      </div>
    </div>
    <div class="row ">
      <?php 
      foreach ($resHabitacionMasPedida as $key): 
        if($key['puesto'] == 1):
      ?>
      <div class="col-md-7">
        <div class="media d-block room mb-0">
          <figure>
            <img src="<?= base_url() ?>public/cliente/images/habitacion/<?=$key['imagen']?>" alt="<?=$key['habitacion']?>" class="img-fluid">
            <div class="overlap-text">
              <span>
                Estrellas
                <?php for ($i=1; $i <= $key['cantidad_estrella'] ; $i++): ?>
                <span class="ion-ios-star"></span>
                <?php endfor; ?>
              </span>
            </div>
          </figure>
          <div class="media-body">
            <h3 class="mt-0"><a href="#">Habitación <?=$key['habitacion']?></a></h3>
            <ul class="room-specs">
              <li><span class="ion-ios-people-outline"></span> <?=$key['cantidad_persona']?> Personas</li>
              <li><span class="ion-ios-crop"></span> <?=$key['metro_cuadrado']?> M<sup>2</sup></li>
              <li><span class="icon ion-logo-usd"></span> $<?=$key['precio']?> MXN</li>
            </ul>
            <p>Habitación mas pedida por la mayoria de nuestros clientes, dejando un gran satisfacción. </p>
          </div>
        </div>
      </div>

      <?php
        elseif($key['puesto'] == 2):
      ?>
      <div class="col-md-5 room-thumbnail-absolute">
      <a href="#" class="media d-block room bg first-room" style="background-image: url(<?= base_url() ?>public/cliente/images/habitacion/<?=$key['imagen']?>); ">
          <!-- <figure> -->
            <div class="overlap-text">
              <span>
               Habitación <?=$key['habitacion']?>
                <?php for ($i=1; $i <= $key['cantidad_estrella'] ; $i++): ?>
                <span class="ion-ios-star"></span>
                <?php endfor; ?>
              </span>
              <span class="pricing-from">
                costo $<?=$key['precio']?> MXN
              </span>
            </div>
          <!-- </figure> -->
        </a>
      <?php
        elseif($key['puesto'] == 3):
      ?>
      <a href="#" class="media d-block room bg second-room" style="background-image: url(<?= base_url() ?>public/cliente/images/habitacion/<?=$key['imagen']?>); ">
          <!-- <figure> -->
            <div class="overlap-text">
              <span>
                Habitación <?=$key['habitacion']?>
                 <?php for ($i=1; $i <= $key['cantidad_estrella'] ; $i++): ?>
                <span class="ion-ios-star"></span>
                <?php endfor; ?>
              </span>
              <span class="pricing-from">
                costo $<?=$key['precio']?> MXN
              </span>
            </div>
          <!-- </figure> -->
        </a>
        </div>
      <?php
        endif;
      ?>

    <?php endforeach; ?>

    </div>
  </div>
</section>