<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Playa los corchos - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>Playa los corchos<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="site-section py-lg">

      <div class="container">
        
        <div class="row blog-entries">

          <div class="col-md-12 col-lg-8 main-content">

            <h1 class="mb-4">Te invitamos la playa de los corchos</h1>

          <div class="post-content-body">
              <ul>
                <li>Los Corchos es una playa con aguas de varias tonalidades que van del azul más intenso al verde esmeralda, la cual se presta mucho para la natación y el reposo.
                </li>
                <li>
                Por lo demás, la frondosa vegetación que la circunda ofrece varios refugios con sombra para mitigar el intenso sol. 
                </li>
              </ul>
           
  
              <div class="row mb-5">
                <div class="col-md-12 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos1.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos2.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos4.jpg" alt="Image placeholder" class="img-fluid">
                </div>
              </div>

              <ul>
                <li>Los Corchos es una playa de considerables dimensiones que se extiende kilómetros hacia el sur, justo hacia donde desemboca el Río Lerma “Santiago”. Los Corchos es una playa de cien metros de ancho, con arena tersa y oleaje de moderada intensidad.
                </li>
                <li>
                 La vegetación de la zona está integrada por arbustos y palmeras. Los visitantes cuentan en el lugar con diferentes servicios para garantizar su máximo esparcimiento, como por ejemplo, paseos en lancha por los sitios más atrayentes de la región, restaurantes de tipo rústico donde se preparan ricos platillos con pescado y marisco y espacios que se utilizan como estacionamiento.
                </li>
              </ul>

              <div class="row mb-5">
                <div class="col-md-12 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos6.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos5.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioCorchos7.jpg" alt="Image placeholder" class="img-fluid">
                </div>
              </div>
           
              
          </div>

          <!-- END section -->
            
          </div>

          <?= $this->include('cliente/turismo/lugares.php') ?>

        </div>

      </div>

    </section>
<?= $this->endSection() ?>