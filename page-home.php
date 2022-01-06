<?php
/** Template Name: Home */

get_header();
?>

    <main class="page-home">

        <?php get_template_part('templates/home/hero'); ?>

        <?php get_template_part('templates/home/intro'); ?>

        <?php get_template_part('templates/home/loghi-modelli'); ?>

        <?php //get_template_part('templates/home/modelli'); ?>

        <?php get_template_part('templates/home/store'); ?>

        <?php get_template_part('templates/home/parallax'); ?>

        <?php get_template_part('templates/features'); ?>

        <?php get_template_part('templates/contact-form'); ?>

    </main>

<?php
get_footer();
