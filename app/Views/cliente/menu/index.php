<header role="banner">
 
  <nav class="navbar navbar-expand-md navbar-dark bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Plaza los reyes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
        <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
          <li class="nav-item">
            <a class="nav-link" id="index" href="<?= base_url() ?>">Inicio</a>
          </li>
          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Habitaciones</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="habitacion.php?titulo=habitacion">Ver todas las habitaciones</a>
              <a class="dropdown-item" href="rooms.php">Presidential Room</a>
              <a class="dropdown-item" href="rooms.php">Luxury Room</a>
              <a class="dropdown-item" href="rooms.php">Deluxe Room</a>
            </div>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>habitaciones">Ver todas las habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>nosotros">Acérca de nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>turismo">Lugares a visitar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>AdminHabitacion/">Administrador</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>
<!-- END header -->

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(<?= base_url() ?>public/cliente/images/sistema/hotelFrente.jpg);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-12 text-center">

        <div class="mb-5 element-animate">
          <h1>HOTEL PLAZA LOS REYES</h1>
          <p><?= $this->renderSection('subtitle') ?> </p> 
          <p><?= $this->renderSection('login') ?> </p> 
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END section -->