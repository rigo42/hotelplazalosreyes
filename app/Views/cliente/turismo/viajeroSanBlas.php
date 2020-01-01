<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>San Blas - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>San Blas<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="site-section py-lg">

  <div class="container">
        
    <div class="row blog-entries">

      <div class="col-md-12 col-lg-8 main-content">

        <h1 class="mb-4">Te invitamos a conocer San Blas Nayarit</h1>

        <div class="post-content-body">
            <ul>
              <li>San Blas es el tipo de destino perfecto para pasear con la familia y amigos un fin de semana.
              </li>
              <li>
                A lo largo de sus 7 kilómetros de finísima arena se puede disfrutar de un divertido partido de fútbol, caminatas a la orilla del mar, o intentar montar una ola sobre una tabla de surf.
              </li>
              <li>“Aquí tenemos muchas historias”, recalca José, orgulloso sanblasense de 78 que ha dedicado su vida a contar la historia de San Blas a las tantas personas que a diario visitan este puerto.
              </li>
               <li>Visitar San Blas es transportarse a otro tiempo, a otro ritmo en el que hasta las actividades más sencillas como pasear por las calles o beber un café adquieren otra dimensión; da la sensación de que se disfrutan más.
              </li>
            </ul>
         

            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblas1.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblas2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblas3.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>

            <h1 class="mb-4">Un poco mas de San Blas - Riviera Nayarit</h1>

            <div class="row mb-4">
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblas4.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <p>Al pasear por sus calles revivirá épocas pasadas que han marcado la historia no sólo del estado de Nayarit, sino de todo México.</p>
              </div>
              <div class="col-md-6 mb-4 element-animate">
               Esto sin dejar de lado el maravilloso entorno natural que rodea a San Blas: los canales navegables rodeados de mangles, las pequeñas islas, y la visita anual de más de 300 aves migratorias, que hacen de éste un destino obligado e inolvidable.

              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblas5.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
        </div>

        <!-- Video -->
        <?= $this->include('cliente/videoPromocional/videoSanBlas.php') ?>

        <!-- END section -->
          
        </div>

        <?= $this->include('cliente/turismo/lugares.php') ?>

        </div>

      </div>

</section>
<?=$this->endSection()?>