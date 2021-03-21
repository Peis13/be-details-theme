<?php get_header(); ?>


<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cmlab
 */


get_header();
?>


    <main class="page-main">

        <div class="container">
            <div class="row">

                <!-- Page Content -->
                <div class="col-lg-8">
                    <section class="page-content">

                        <h1 class="page-title primary-title-color">
                            <?php the_title() ?>
                        </h1>

                        <div class="page-entry primary-text-color">
                            <?php the_content() ?>
                        </div>

                    </section>
                </div>
            </div>
        </div>

    </main>

<?php
get_footer();
