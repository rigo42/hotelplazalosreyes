 <?php 
$encrypter = \Config\Services::encrypter();
foreach ($resCronograma as $key => $value) {}
$form = array("id" => "form", "class" => "form-horizontal");
echo form_open(base_url().'cronograma/editarCronograma',$form); ?>

<div class="row">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title text-center">Editar cronograma</h6>
                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Empresa a auditar</label>
                    <select required class="select form-control" name="idEmpresa">
                        <option value="">Selecciona una opción</option>
                        <?php foreach ($resEmpresa as $key) { ?>
	                        <option 
	                            value="<?= urlencode($encrypter->encrypt($key->id_empresa)); ?>"
	                            <?= $key->id_empresa === $value['id_empresa'] ? "selected" : "" ?> >
	                            <?= $key->empresa; ?>
	                        </option>
	                    <?php } ?>
                    </select>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Auditor</label>
                    <select required class="select form-control" name="idAuditor">
                        <option value="">Selecciona una opción</option>
                        <?php  foreach ($resAuditor as $key): ?>
                        <option 
                            value="<?= urlencode($encrypter->encrypt($key->id_auditor)); ?>"
                            <?= $key->id_auditor === $value['id_auditor'] ? "selected" : "" ?> >
                            <?= $key->auditor; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Fecha</label>
                    <div class="col-sm-12">
                        <input type="date" required name="fechaCronograma" class="form-control" placeholder="Fecha del cronograma" value="<?= $value['fecha_cronograma'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Hora</label>
                    <div class="col-sm-12">
                        <input type="time" required name="horaCronograma" class="form-control" placeholder="hora del cronograma" value="<?= $value['hora_cronograma'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Proceso</label>
                    <div class="col-sm-12">
                        <input type="text" required name="proceso" class="form-control" placeholder="Tipo de proceso" value="<?= $value['proceso'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Responsable</label>
                    <div class="col-sm-12">
                        <input type="text" required name="responsable" class="form-control" placeholder="Nombre del responsable de la empresa a auditar" value="<?= $value['responsable'] ?>" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 control-label col-form-label">Técnica</label>
                    <div class="col-sm-12">
                        <input type="tecnica" required name="tecnica" class="form-control" placeholder="Tipo de técnica a utilizar" value="<?= $value['tecnica'] ?>">
                    </div>
                </div>

                <div class="border-top">
		            <div class="card-body">
		                <button type="submit" class="btn btn-primary" id="gif">Editar</button>
		                <input type="hidden" name="idCronograma" value="<?= urlencode($encrypter->encrypt($value['id_cronograma'])); ?>">
		                <input type="hidden" name="editar" value="<?= $value['proceso'] ?>">
		                <input type="hidden" name="estado" value="1">
		            </div>
		        </div>

            </div>
            
        </div>
    </div>
</div>

<?= form_close(); ?>

<script type="text/javascript">
   $(document).ready(function(){
        var editar = $("input[name='editar']").val();
        titlePage("#menuCronograma","Cronograma | "+editar);

        $("#form").submit(function(e){
            e.preventDefault();
            var datos = $(this).serialize();
            var url = $(this).attr('action');

            ajaxEjecutarBasico(datos,url,'Cronograma editado','#gif','Editar');
        });

   });

</script>
