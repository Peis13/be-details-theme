<?php
/** Template Name: Store */

get_header();
?>

    <main class="page-store">

        <?php get_template_part('templates/home/intro'); ?>

        <?php get_template_part('templates/home/store'); ?>

        <?php get_template_part('templates/page-store/accordion'); ?>

        <?php get_template_part('templates/parallax'); ?>

        <?php get_template_part('templates/features'); ?>

        <?php get_template_part('templates/contact-form'); ?>

    </main>

<?php
get_footer();
