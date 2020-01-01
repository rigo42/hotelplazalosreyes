<div class="row">
  <div class="card">
    <div class="card-body">

      <h5 class="card-title text-center">Cronograma</h5>

      <?php if(empty($resCronograma)): ?>

      <h6>No hay cronogramas</h6>

    <?php else : ?>
      
      <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">Cronogramas recientes</h4>
        </div>
        <div class="comment-widgets scrollable">
                <?php 
                $n = 0;
                $encrypter = \Config\Services::encrypter();
                foreach ($resCronograma as $key) :
                ?>
                <div class="d-flex flex-row comment-row m-t-0 cronograma">
                    <div class="p-2">
                      <img src="<?= base_url() ?>public/libreria/img/empresa/<?= $key['imagen'] ?>" width="50" class="rounded-circle img-fluid img-thumbnail">
                    </div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium"><?= $key['empresa'] ?></h6>
                        <span class="m-b-15 d-block">
                          <p><b>Auditor:</b> <?= $key['auditor']; ?></p>
                          <p><b>Proceso:</b> <?= $key['proceso'] ?></p>
                          <p><b>Tecnica:</b> <?= $key['tecnica'] ?></p>
                        </span>
                        <?php 
                        $form = array("id" => "form");
                        echo form_open(base_url().'cronograma/estadoCronograma',$form); ?>
                        <div class="comment-footer">
                            <span class="text-muted float-right">
                              <?= $key['fechaCronograma']." ".$key['horaCronograma'] ?> 
                            </span>
                            <?php 
                            $fechaEliminar = $key['fechaEliminar'];
                            $estado = 1;
                            $msg = "Restaurar";
                            if(empty($fechaEliminar)):
                              $msg = "Eliminar";
                              $estado = 0;
                            ?>
                            <button type="button" 
                                    class="btn btn-cyan btn-sm editar"
                                    data-idCronograma="<?= urlencode($encrypter->encrypt($key['id_cronograma'])); ?>"
                                    data-url="<?= base_url() ?>cronograma/editar">
                                    Editar
                            </button>
                            <a href="<?= base_url(); ?>auditoria/nuevo" 
                               class="btn btn-success btn-sm nuevoAuditoria"
                               data-idCronograma="<?= $key['id_cronograma']; ?>">
                            Iniciar auditoria
                            </a>
                            <?php endif; ?>
                            
                            <button type="submit" 
                                    class="btn btn-danger btn-sm estadoCronograma"
                                    data-idCronograma="<?= $key['id_cronograma']; ?>"
                                    data-estadoCronograma="<?= $estado ?>"
                                    data-url="<?= base_url() ?>cronograma/estadoCronograma"
                                    data-msg="<?=$msg?>">
                                    <?= $msg ?>
                            </button>                        
                        </div>
                        <?php form_close(); ?>
                    </div>
                </div>
              <?php endforeach;?>
        </div>
      </div>

    <?php
      echo $paginador->only(['page','search'])->links(); 
      endif; 
    ?>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    titlePage("#menuCronograma","Cronograma | Mostrar");

    $(".editar").click(function(e){
      e.preventDefault();
      var id = "#cuerpoPagina";
      var idCronograma = $(this).attr("data-idCronograma");
      var url = $(this).attr("data-url");
      var datos = {
        idCronograma:idCronograma,
        url:url
      }
      ajaxMostrarBasico(datos,url,id);
    });

    $(".nuevoAuditoria").click(function(e){
      e.preventDefault();
      var id = "#cuerpoPagina";
      var idCronograma = $(this).attr("data-idCronograma");
      var url = $(this).attr("href");
      var datos = {
        idCronograma:idCronograma,
        url:url
      }
      ajaxMostrarBasico(datos,url,id);
    });

    $(".estadoCronograma").click(function(e){
      e.preventDefault();
      var id = "#cuerpoPagina";
      var idCronograma = $(this).attr("data-idCronograma");
      var estadoCronograma = $(this).attr("data-estadoCronograma");
      var msg = $(this).attr("data-msg");
      var url = $(this).attr("data-url");
      var este = $(this);
      var datos = $("#form").serialize();
      datos += "&idCronograma="+idCronograma+"&estadoCronograma="+estadoCronograma;
      ajaxEjecutarBasico(datos,url,'Cronograma modificado',este,msg);
    });

    $(".paginador").click(function(e){
      e.preventDefault();
      var url = $(this).attr("href");
      var porciones = url.split('&page=');
      var page = porciones[1];
      var id = "#cuerpoPagina";
      var estado = $(".seleccionado").attr("data-estado");
      var search = $("input[name='search']").val();
          url = $(id).attr("data-url");
      var datos = {
          search:search,
          url:url,
          estado:estado,
          page:page
      };
      ajaxMostrarBasico(datos,url,id);
    });

    
  });
</script>



