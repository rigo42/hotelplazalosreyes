<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->include('admin/head/index') ?>
<head>
<body>
	<script src="<?php echo base_url() ?>public/admin/js/jquery.min.js"></script>
    
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
	<?= $this->include('admin/header/index') ?>
	<?= $this->include('admin/menu/index') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('admin/footer/index') ?>
</body>
</html>