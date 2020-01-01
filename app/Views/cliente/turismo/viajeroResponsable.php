<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Turismo - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>¿Cómo ser un viajero responsable?<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="site-section py-lg">

      <div class="container">
        
        <div class="row blog-entries">

          <div class="col-md-12 col-lg-8 main-content">

            <h1 class="mb-4">¿Cómo ser un viajero responsable en <script>document.write(new Date().getFullYear());</script>?</h1>

            <div class="post-content-body">

              <p>1. Sé consciente de los riesgos que supone viajar y toma las precauciones necesarias
                  Investiga, cuando estés planificando tu viaje, las características del destino que quieres conocer y toma las medidas necesarias para tener al día toda la documentación, seguros de viaje o controles médicos que te puedan pedir.</p>
              <p>2. Fomenta el desarrollo local del destino, consumiendo productos locales
                  Apoya el emprendimiento local consumiendo productos o servicios que se produzcan en el destino y cuyos beneficios directos e indirectos sean repartidos transversalmente y favorezcan a los grupos más vulnerables.</p>
              <p>3. Comparte y aprende sobre tu comunidad de acogida, respetando sus valores y 
                  tradiciones
                  Aprende, siempre que sea posible, sobre los aspectos culturales del destino que visitas(costumbres, gastronomía, idiomas o dialectos, tradiciones, patrimonio…).</p>
             

            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioSanblasPrincipal.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioViajesPrincipal.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="<?= base_url() ?>public/cliente/images/turismo/anuncioViajes2Principal.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>

            <p>4. Contribuye a la conservación, protección y regeneración de los ecosistemas acuáticos
                    y terrestres del terreno Disfruta solo de productos, servicios y experiencias que garanticen la explotación sostenible de los recursos acuáticos y terrestres del destino y que respeten el hábitat natural de la fauna y flora autóctona o foránea, evitando el maltrato animal o la destrucción del entorno.</p>
            <p>5. Respeta la diversidad y no fomentes o participes en actividades discriminatorias
                  Favorece la eliminación de barreras que limiten la integración de las personas por motivos de género, origen, religión, orientación sexual, situación económica u otra condición; evitando lenguajes sexistas, comentarios ofensivos o el uso de etiquetas que contribuyan a estereotipar negativamente a estos colectivos.</p>

            </div>

            
          </div>

          <?= $this->include('cliente/turismo/lugares.php') ?>

        </div>

      </div>

    </section>
<?= $this->endSection(); ?>