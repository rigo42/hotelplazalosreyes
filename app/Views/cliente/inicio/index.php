<?= $this->extend('cliente/base/index') ?>

<?= $this->section('title') ?>Inicio - <?= $this->endSection() ?>
<?= $this->section('subtitle') ?>Conoce cuál es nuestra habitación #1<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('cliente/anuncio/index') ?>
    <?= $this->include('cliente/habitacionMasRentada/index') ?>
    <?= $this->include('cliente/galeria/index') ?>
    <?= $this->include('cliente/servicio/index') ?>
    <?= $this->include('cliente/videoPromocional/videoHotel') ?>
<?= $this->endSection() ?>
