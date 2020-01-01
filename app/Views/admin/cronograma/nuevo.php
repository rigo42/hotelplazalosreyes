<?php 
$encrypter = \Config\Services::encrypter();
$form = array("id" => "form", "class" => "form-horizontal");
echo form_open(base_url().'cronograma/nuevoCronograma',$form); ?>

<div class="row">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title text-center">Nuevo cronograma</h6>
                
                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Empresa a auditar</label>
                    <select required class="select form-control" name="idEmpresa">
                        <option value="">Selecciona una opción</option>
                        <?php  foreach ($resEmpresa as $key): ?>
                        <option value="<?= urlencode($encrypter->encrypt($key->id_empresa));  ?>">
                            <?= $key->empresa; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Auditor</label>
                    <select required class="select form-control" name="idAuditor">
                        <option value="">Selecciona una opción</option>
                        <?php  foreach ($resAuditor as $key): ?>
                        <option value="<?= urlencode($encrypter->encrypt($key->id_auditor));  ?>">
                            <?= $key->auditor; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Fecha</label>
                    <div class="col-sm-12">
                        <input type="date" required name="fechaCronograma" class="form-control" placeholder="Fecha del cronograma">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Hora</label>
                    <div class="col-sm-12">
                        <input type="time" required name="horaCronograma" class="form-control" placeholder="hora del cronograma">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Proceso</label>
                    <div class="col-sm-12">
                        <input type="text" required name="proceso" class="form-control" placeholder="Tipo de proceso">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Responsable</label>
                    <div class="col-sm-12">
                        <input type="text" required name="responsable" class="form-control" placeholder="Nombre del responsable de la empresa a auditar">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Técnica</label>
                    <div class="col-sm-12">
                        <input type="tecnica" required name="tecnica" class="form-control" placeholder="Tipo de técnica a utilizar">
                    </div>
                </div>

                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary" id="gif">Nuevo</button>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>



<?= form_close(); ?>

<script type="text/javascript">
   $(document).ready(function(){
        titlePage("#menuCronograma","Cronograma | Nuevo");

        $("#form").submit(function(e){
            e.preventDefault();
            var datos = $(this).serialize();
            var url = $(this).attr('action');
            ajaxEjecutarBasico(datos,url,'Cronograma agregado','#gif','Nuevo');
        });

   });
</script>