<section class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 heading-wrap text-center">
        <h4 class="sub-heading">Servicio</h4>
          <h2 class="heading">Nuestros Servicios</h2>
      </div>
    </div>
    <div class="row ">
    <?php foreach ($resServicio as $key): ?>
      <div class="col-md-4">
        <div class="post-entry">
          <img src="<?= base_url() ?>public/cliente/images/servicio/<?=$key['imagen']?>" alt="<?=$key['titulo']?>" class="img-fluid">
          <div class="body-text">
            <div class="category"><?=$key['titulo']?></div>
            <h3 class="mb-3"><a href="#"><?=$key['sub_titulo']?></a></h3>
            <p class="mb-4"><?=$key['descripcion']?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>
    <!-- END section -->