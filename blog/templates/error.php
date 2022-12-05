<?php $title = "SUPER BLOG !"; ?>

<?php ob_start(); ?>
<h1>SUPER BLOG !</h1>
<p>An error occurred : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
