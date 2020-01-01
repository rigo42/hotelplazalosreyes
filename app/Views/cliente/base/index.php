<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->include('cliente/head/index') ?>
<head>
<body>
	<?= $this->include('cliente/menu/index') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('cliente/footer/index') ?>
    <?= $this->include('cliente/loader/index') ?>
</body>
</html>