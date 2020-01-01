<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Login - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>Login<?= $this->endSection() ?>

<?= $this->section('login') ?>
	<div align="center">
		<?php 
            $form = array("id" => "form", "class" => "col-md-6", "enctype" => "multipart/form-data");
            echo form_open(base_url().'login/iniciarSesion',$form); 
        ?>
		  <div class="form-group">
		    <label for="usuario">Usuario</label>
		    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="Password" placeholder="Agrege el usuario">
		  </div>
		  <div class="form-group">
		    <label for="contraseña">Contraseña</label>
		    <input type="password" class="form-control" name="password" id="contraseña" placeholder="Agrege la contraseña">
		  </div>
		  <button type="submit" class="btn btn-primary">Ingresar</button>
		<?= form_close(); ?>
	</div>
	
<?= $this->endSection() ?>
