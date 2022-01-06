<?php
/** Template Name: Modello */

get_header();
?>

    <main class="page-modello">

        <?php get_template_part('templates/page-modello/intro'); ?>

        <?php get_template_part('templates/page-modello/content'); ?>

        <?php get_template_part('templates/page-modello/tecniche'); ?>

        <?php get_template_part('templates/features'); ?>

        <?php get_template_part('templates/contact-form'); ?>

    </main>

<?php
get_footer();
