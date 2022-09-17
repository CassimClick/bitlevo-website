<?= $this->extend('layouts/FrontendLayout') ;?>
<?= $this->section('content') ;?>
<?=view('Components/Hero') ?>
<?=view('Components/About') ?>
<?=view('Components/Services') ?>
<?=view('Components/Technologies') ?>
<?=view('Components/Portfolio') ?>
<?=view('Components/Team') ?>
<?=view('Components/Contact') ?>

<?= $this->endSection() ;?>
