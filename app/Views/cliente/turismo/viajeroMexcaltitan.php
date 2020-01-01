<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Mexcaltitán - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>Mexcaltitán<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="site-section py-lg">

      <div class="container">
        
        <div class="row blog-entries">

          <div class="col-md-12 col-lg-8 main-content">

            <h1 class="mb-4">Te invitamos a conocer Mexcaltitán Nayarit</h1>

          <div class="post-content-body">
              <ul>
                <li>La pequeña isla de Mexcaltitán, en Nayarit, es un fascinante y peculiar rincón al occidente del país que no se parece a nada que hayas visto en tus viajes por México.
                </li>
                <li>
                  Pocos saben de esta isla en la que se funden mar y cielo. En Mexcaltitán, una isla en Nayarit, habitan poco más de mil personas (familias pescadoras en su mayoría).
                </li>
                <li>Si vienes con niños que tienen entre 4 y 8 años de edad, es posible que adquieran el paquete de este tour a la isla de Mexcaltitan por un menor costo.
                </li>
                 <li>Ubicada en la Riviera Nayarit, la Isla de Mexcaltitlán es considerada la vieja Aztlán, la cuna de la mexicaneidad. ¡Ven a visitarla!.
                </li>
              </ul>
           

              <div class="row mb-5">
                <div class="col-md-12 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioMexcaltitan1.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioMexcaltitan2.jpg" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                  <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioMexcaltitan3.jpg" alt="Image placeholder" class="img-fluid">
                </div>
              </div>
              
          </div>
          <!-- Video -->
          <?= $this->include('cliente/videoPromocional/videoMexcaltitan.php') ?>

          <!-- END section -->
            
          </div>

          <?= $this->include('cliente/turismo/lugares.php') ?>

        </div>

      </div>

    </section>
<?= $this->endSection() ?>