<?php get_header(); ?>

<?php
include('includes/section-one.php');
include('includes/section-two.php');

$mostrar = true;
if ($mostrar) {
    include('includes/section-conditional.php');
}
?>

<?php get_footer(); ?>
